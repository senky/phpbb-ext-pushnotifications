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

namespace senky\pushnotifications\controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class main
{
	protected $user;
	protected $db;
	protected $config;
	protected $helper;
	protected $request;
	protected $auth;
	protected $php_ext;
	protected $phpbb_root_path;
	protected $subscriptions_table;
	protected $subscription_id = 0;
	public function __construct(\phpbb\user $user, \phpbb\db\driver\driver_interface $db, \phpbb\config\config $config, \phpbb\controller\helper $helper, $request, \phpbb\auth\auth $auth, $php_ext, $phpbb_root_path, $subscriptions_table)
	{
		$this->user = $user;
		$this->db = $db;
		$this->config = $config;
		$this->helper = $helper;
		$this->request = $request;
		$this->auth = $auth;
		$this->php_ext = $php_ext;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->subscriptions_table = $subscriptions_table;
	}

	public function subscribe()
	{
		if (!$this->request->is_ajax())
		{
			redirect(append_sid("{$this->phpbb_root_path}index.{$this->php_ext}"));
		}

		if (!$this->auth->acl_get('u_senky_pushnotifications'))
		{
			throw new \phpbb\exception\http_exception(403);
		}

		$endpoint = $this->request->variable('endpoint', '', true);
		$keys = $this->request->variable('keys', array('' => ''), true);

		// remove old subscription
		$old_id = $this->request->variable('subscription_id', 0);
		if ($old_id)
		{
			$sql = 'DELETE FROM ' . $this->subscriptions_table . '
					WHERE subscription_id = ' . (int) $old_id;
			$this->db->sql_query($sql);
		}

		if (!$this->exists($endpoint, $keys))
		{
			$sql = 'INSERT INTO ' . $this->subscriptions_table . $this->db->sql_build_array('INSERT', [
				'endpoint'        => $endpoint,
				'push_key_auth'   => $keys['auth'],
				'push_key_p256dh' => $keys['p256dh'],
				'user_id'         => (int) $this->user->data['user_id'],
			]);
			$this->db->sql_query($sql);
			$this->subscription_id = $this->db->sql_nextid();
		}

		return new JsonResponse([
			'status' => 'success',
			'id'     => $this->subscription_id,
		]);
	}

	public function unsubscribe()
	{
		if (!$this->request->is_ajax())
		{
			redirect(append_sid("{$this->phpbb_root_path}index.{$this->php_ext}"));
		}

		if (!$this->auth->acl_get('u_senky_pushnotifications'))
		{
			throw new \phpbb\exception\http_exception(403);
		}

		$endpoint = $this->request->variable('endpoint', '', true);
		$keys = $this->request->variable('keys', array('' => ''), true);

		$sql = 'DELETE FROM ' . $this->subscriptions_table . '
				WHERE ' . $this->build_where_statement($endpoint, $keys);
		$this->db->sql_query($sql);

		return new JsonResponse([
			'status' => 'success',
		]);
	}

	protected function exists($endpoint, $keys)
	{
		$sql = $this->db->sql_build_query('SELECT', [
			'SELECT' => 's.subscription_id',
			'FROM'   => [
				$this->subscriptions_table => 's',
			],
			'WHERE'  => $this->build_where_statement($endpoint, $keys),
		]);
		$result = $this->db->sql_query($sql);
		$subscription_id = $this->db->sql_fetchfield('subscription_id');
		$this->db->sql_freeresult($result);

		if (!empty($subscription_id))
		{
			$this->subscription_id = $subscription_id;
			return true;
		}

		return false;
	}

	protected function build_where_statement($endpoint, $keys)
	{
		$where = '';

		if (isset($keys['auth']))
		{
			$where .= "push_key_auth = '" . $this->db->sql_escape($keys['auth']) . "' AND ";
			$where .= "push_key_p256dh = '" . $this->db->sql_escape($keys['p256dh']) . "' AND ";
		}
		else
		{
			$where .= 'user_id = ' . (int) $this->user->data['user_id'] . ' AND ';
		}

		$where .= "endpoint = '" . $this->db->sql_escape($endpoint) . "'";

		return $where;
	}
}
