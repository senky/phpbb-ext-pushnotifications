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
			'core.user_setup'			=> 'load_language_on_setup',
			'core.page_header'			=> 'load_notification_parameters',
		);
	}

	protected $template;
	protected $config;
	protected $helper;
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\controller\helper $helper)
	{
		$this->template = $template;
		$this->config = $config;
		$this->helper = $helper;
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
		$this->template->assign_vars(array(
			'SENKY_PUSHNOTIFICATIONS_PUBLIC_KEY'	=> $this->config['senky_pushnotifications_public_key'],
			'U_SENKY_PUSHNOTIFICATIONS_SUBSCRIBE'	=> $this->helper->route('senky_pushnotifications_subscribe'),
			'U_SENKY_PUSHNOTIFICATIONS_UNSUBSCRIBE'	=> $this->helper->route('senky_pushnotifications_unsubscribe'),
		));
	}
}
