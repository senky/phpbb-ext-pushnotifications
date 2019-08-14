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

namespace senky\pushnotifications\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.permissions'	=> 'permissions',

			'core.user_setup'			=> 'load_language_on_setup',
			'core.page_header'			=> 'load_notification_parameters',
			'core.login_box_redirect'	=> 'add_cookie_after_login',

			//'core.notification_type_check_user_notification_options_before'	=> 'load_users',
		);
	}

	protected $template;
	protected $config;
	protected $helper;
	protected $auth;
	protected $user;
	protected $request;
	protected $user_loader;
	protected $root_path;
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\auth\auth $auth, \phpbb\user $user, \phpbb\request\request $request, \senky\pushnotifications\notification\user_loader $user_loader, $root_path)
	{
		$this->template = $template;
		$this->config = $config;
		$this->helper = $helper;
		$this->auth = $auth;
		$this->user = $user;
		$this->request = $request;
		$this->user_loader = $user_loader;
		$this->root_path = $root_path;
	}

	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_senky_pushnotifications'] = [
			'lang' => 'ACL_U_SENKY_PUSHNOTIFICATIONS',
			'cat' => 'misc'
		];
		$event['permissions'] = $permissions;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'senky/pushnotifications',
			'lang_set' => 'notifications',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function load_notification_parameters($event)
	{
		$this->template->assign_vars([
			'S_SENKY_PUSHNOTIFICATIONS'					=> $this->auth->acl_get('u_senky_pushnotifications'),
			'SENKY_PUSHNOTIFICATIONS_PUBLIC_KEY'		=> $this->config['senky_pushnotifications_public_key'],
			'U_SENKY_PUSHNOTIFICATIONS_SUBSCRIBE'		=> $this->helper->route('senky_pushnotifications_subscribe'),
			'U_SENKY_PUSHNOTIFICATIONS_UNSUBSCRIBE'		=> $this->helper->route('senky_pushnotifications_unsubscribe'),
			'U_SENKY_PUSHNOTIFICATIONS_SERVICE_WORKER'	=> $this->helper->route('senky_pushnotifications_sw'),
			'SENKY_PUSHNOTIFICATIONS_SCOPE'				=> $this->root_path,
			'S_SENKY_PUSHNOTIFICATIONS_DISPLAY_POPUP'	=> $this->should_display_popup(),
			'S_SENKY_PUSHNOTIFICATIONS_POPUP_METHOD'	=> $this->config['senky_pushnotifications_popup_method'],
		]);
	}

	public function add_cookie_after_login($event)
	{
		if (!$event['admin'])
		{
			$this->user->set_cookie('senky_pushnotifications_after_login', '', time() + 60);
		}
	}

	public function load_users($event)
	{
		if (empty($event['user_ids']))
		{
			return;
		}

		foreach ($event['user_ids'] as $user_id)
		{
			$this->user_loader->add_user($user_id);
		}
	}

	protected function should_display_popup()
	{
		if ($this->config['senky_pushnotifications_popup'])
		{
			if ($this->config['senky_pushnotifications_popup_method'] == 'only_prompt')
			{
				return true;
			}
			else if ($this->request->is_set($this->config['cookie_name'] . '_senky_pushnotifications_after_login', \phpbb\request\request_interface::COOKIE))
			{
				$this->user->set_cookie('senky_pushnotifications_after_login', '', time() - 1);
				return true;
			}
		}

		return false;
	}
}
