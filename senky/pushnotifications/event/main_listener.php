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

			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'load_notification_parameters',

			//'core.notification_type_check_user_notification_options_before'	=> 'load_users',
		);
	}

	protected $template;
	protected $config;
	protected $helper;
	protected $auth;
	protected $user_loader;
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\auth\auth $auth, \senky\pushnotifications\notification\user_loader $user_loader)
	{
		$this->template = $template;
		$this->config = $config;
		$this->helper = $helper;
		$this->auth = $auth;
		$this->user_loader = $user_loader;
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
			'S_SENKY_PUSHNOTIFICATIONS'				=> $this->auth->acl_get('u_senky_pushnotifications'),
			'SENKY_PUSHNOTIFICATIONS_PUBLIC_KEY'	=> $this->config['senky_pushnotifications_public_key'],
			'U_SENKY_PUSHNOTIFICATIONS_SUBSCRIBE'	=> $this->helper->route('senky_pushnotifications_subscribe'),
			'U_SENKY_PUSHNOTIFICATIONS_UNSUBSCRIBE'	=> $this->helper->route('senky_pushnotifications_unsubscribe'),
		]);
	}

	// public function load_users($event)
	// {
	// 	if (empty($event['user_ids']))
	// 	{
	// 		return;
	// 	}

	// 	foreach ($event['user_ids'] as $user_id)
	// 	{
	// 		$this->user_loader->add_user($user_id);
	// 	}
	// }
}
