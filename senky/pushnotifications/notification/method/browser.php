<?php
/**
 *
 * Browser and Mobile Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Jakub Senko
 * @license Proprietary/All rights reserved
 * @licensee {{LICENSEE}}
 *
 */

namespace senky\pushnotifications\notification\method;

use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;
use phpbb\notification\type\type_interface;

class browser extends \phpbb\notification\method\base
{
	protected $user_loader;
	protected $user;
	protected $config;
	protected $db;
	protected $log;
	protected $filesystem;
	protected $auth_user_loader;
	protected $phpbb_root_path;
	protected $php_ext;
	protected $subscriptions_table;
	protected $user_subscriptions = [];
	public function __construct(\phpbb\user_loader $user_loader, \phpbb\user $user, \phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\log\log_interface $log, \phpbb\filesystem\filesystem_interface $filesystem, \senky\pushnotifications\notification\user_loader $auth_user_loader, $phpbb_root_path, $php_ext, $subscriptions_table)
	{
		$this->user_loader = $user_loader;
		$this->user = $user;
		$this->config = $config;
		$this->db = $db;
		$this->log = $log;
		$this->filesystem = $filesystem;
		$this->auth_user_loader = $auth_user_loader;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
		$this->subscriptions_table = $subscriptions_table;
	}

	public function get_type()
	{
		return 'senky.pushnotifications.notification.method.browser';
	}

	public function is_enabled_by_default()
	{
		return true;
	}

	public function is_available(type_interface $notification_type = null, $user_id = false)
	{
		if (empty($user_id))
		{
			return true;
		}

		return true;// $this->auth_user_loader->get_user_auth($user_id)->acl_get('u_senky_pushnotifications');
	}

	public function notify()
	{
		// Do not send anything if there is nothing to send
		if (empty($this->queue))
		{
			return;
		}

		$user_ids = $this->setup_users();

		// We do not send notifications to banned users
		if (!function_exists('phpbb_get_banned_user_ids'))
		{
			include($this->phpbb_root_path . 'includes/functions_user.' . $this->php_ext);
		}
		$banned_users = phpbb_get_banned_user_ids($user_ids);

		$WebPush = $this->setup_webpush();

		foreach ($this->queue as $notification)
		{
			$user = $this->user_loader->get_user($notification->user_id);

			if ($this->check_user_inactive($user) || in_array($notification->user_id, $banned_users))
			{
				continue;
			}

			$display_data = $notification->prepare_for_display();

			$message = html_entity_decode(truncate_string(strip_tags($display_data['FORMATTED_TITLE'] . ' ' . $display_data['REFERENCE'] . $display_data['FORUM'] . $display_data['REASON']), 1000, 1000), ENT_COMPAT);

			$this->prepare_push_notifications($WebPush, $notification->user_id, [
				'user_id'	=> $notification->user_id,
				'title'		=> $this->config['sitename'],
				'message'	=> $message,
				'url'		=> $this->make_clean_url(str_replace('&amp;', '&', $display_data['URL'])),
				'time'		=> $notification->notification_time,
				// 'badge'   => $this->config['push_badge_url'],
				'avatar'	=> $this->get_avatar_url($notification->get_avatar()),
			]);
		}

		// Send notifications
		$results = $WebPush->flush();

		$this->handle_errors($results);

		// We're done, empty the queue
		$this->empty_queue();
	}

	protected function setup_users()
	{
		// Load all users we want to notify
		$user_ids = array();
		foreach ($this->queue as $notification)
		{
			$user_ids[] = $notification->user_id;
		}

		// Load all the users we need
		$this->user_loader->load_users($user_ids);

		// Load browsers' data
		$this->setup_subscriptions($user_ids);

		return $user_ids;
	}

	protected function setup_webpush()
	{
		$WebPush = new WebPush([
			'VAPID' => [
				'subject'    => 'localhost',
				'publicKey'  => $this->config['senky_pushnotifications_public_key'],
				'privateKey' => $this->config['senky_pushnotifications_private_key'],
			],
			[
				'batchSize'	=> 50,
			],
			3 // timeout is 3 seconds. It is better to discard notification than timeout the posting user.
		]);

		// Fix for mobile Firefox
		try
		{
			$WebPush->setAutomaticPadding(2000);
		}
		catch (\Exception $e)
		{
			// Do not process errors - if the fix cannot be applied, proceed with default padding
		}

		return $WebPush;
	}

	protected function check_user_inactive($user)
	{
		return $user['user_type'] == USER_IGNORE || ($user['user_type'] == USER_INACTIVE && $user['user_inactive_reason'] == INACTIVE_MANUAL);
	}

	protected function setup_subscriptions(array $user_ids)
	{
		$this->user_subscriptions = [];

		$sql = $this->db->sql_build_query('SELECT', [
			'SELECT' => 's.*',
			'FROM'   => [
				$this->subscriptions_table => 's',
			],
			'WHERE'  => $this->db->sql_in_set('s.user_id', $user_ids),
		]);
		$res = $this->db->sql_query($sql);

		while ($row = $this->db->sql_fetchrow($res))
		{
			$this->user_subscriptions[$row['user_id']][] = [
				'endpoint'	=> $row['endpoint'],
				'publicKey'	=> $row['push_key_p256dh'],
				'authToken'	=> $row['push_key_auth'],
			];
		}
	}

	protected function prepare_push_notifications(WebPush $WebPush, $user_id, array $notification_data)
	{
		if (empty($this->user_subscriptions[$user_id]))
		{
			return;
		}

		foreach ($this->user_subscriptions[$user_id] as $subscription)
		{
			$WebPush->sendNotification(
				Subscription::create([
					'endpoint'	=> $subscription['endpoint'],
					'publicKey'	=> $subscription['publicKey'],
					'authToken'	=> $subscription['authToken'],
				]),
				json_encode($notification_data)
			);
		}
	}

	protected function handle_errors($results)
	{
		if (!is_array($results))
		{
			return;
		}

		foreach ($results as $res)
		{
			if (!empty($res['expired']))
			{
				$sql = 'DELETE FROM ' . $this->subscriptions_table . "
						WHERE endpoint = '" . $this->db->sql_escape($res['endpoint']) . "'";
				$this->db->sql_query($sql);
			}
			else if (isset($res['statusCode']))
			{
				$this->log->add('critical', $this->user->data['user_id'], $this->user->ip, 'LOG_WEB_PUSH_SERVER_ERROR', time(), array($res['statusCode'], $res['message']));
			}
			else if (empty($res['success']))
			{
				$this->log->add('critical', $this->user->data['user_id'], $this->user->ip, 'LOG_WEB_PUSH_GENERAL_ERROR', time(), array($res['message']));
			}
		}
	}

	protected function make_clean_url($url)
	{
		if (strpos($url, $this->phpbb_root_path) !== 0)
		{
			return $url;
		}

		$filesystem = new \Symfony\Component\Filesystem\Filesystem();
		return generate_board_url() . '/' . rtrim($filesystem->makePathRelative($url, $this->phpbb_root_path), '/');
	}

	protected function get_avatar_url($avatar)
	{
		// There's no data field for src - e.g. in Gravatar driver.
		// We need to parse the result HTML string.
		if (!$avatar)
		{
			return generate_board_url() . '/styles/prosilver/theme/images/no_avatar.gif';
		}

		// Handle "lazy-loaded" case.
		if (preg_match('#data-src="([^"]+)"#im', $avatar, $matches))
		{
			$avatar = $matches[1];
		}
		else
		{
			preg_match('#src="([^"]+)"#im', $avatar, $matches);
			$avatar = $matches[1];
		}

		return $this->make_clean_url($avatar);
	}
}