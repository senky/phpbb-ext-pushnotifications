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

class massnotification_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'senky.massnotification.notification_users'	=> 'switch_method',
		);
	}

	protected $request;
	public function __construct(\phpbb\request\request $request)
	{
		$this->request = $request;
	}

	public function switch_method($event)
	{
		if ($this->request->variable('use_browser_method', 0))
		{
			$users = $event['users'];
			$users = array_map(function() {
				return ['senky.pushnotifications.notification.method.browser'];
			}, $users);
			$event['users'] = $users;
		}
	}
}
