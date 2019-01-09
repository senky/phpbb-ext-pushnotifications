<?php
/**
 *
 * Browser and Mobile Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license Proprietary/All rights reserved
 * @licensee {{LICENSEE}}
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Browser & Mobile Notifications',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Settings',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Browser & Mobile Notifications Settings',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Your board has <strong>%d</strong> user with enabled browser notifications out of %d (%0.2f%%).',
		2	=> 'Your board has <strong>%d</strong> users with enabled browser notifications out of %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Display pop-up',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Set to yes to display pop-up to your users after they log in prompting them to enable browser notifications. They will be able to reject and hide pop-up, but it is likely that you will receive more conversions this way than any other. On the other hand, this method might seem too invasive for the users and they may reject notifications of momentary fear. Thus this method should be used with caution.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">See different approaches</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'How to encourage users to enable browser notifications',
	'POP_UP_ALTENRATIVES_P1'			=> 'Making users click on that weird browser pop-up is not an easy task. Many usability
											tests dealing with this scenario resulted in the same recommendation: never ask users
											permission before they can clearly see advantage of it. That\'s why this extension
											offers browser notification in places where user deals with board notifications.',
	'POP_UP_ALTENRATIVES_P2'			=> 'But it is clearly understandable that you want users to get advantage of this fantastic feature. So here are few recommended ways to do it in a non-aggressive way:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Post an announcement',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'If you know that your users are regularly reading the announcements, just post
											a new one informing them what browser notifications are, what is the advantage
											of it and how to enable them.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Send PM to everyone',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Nothing is more personal in phpBB than a private message. It will not hide from
											user sight because of that glowing unread PM count number in the header. And your
											users deserve a positive message from admin once in a while, don\'t they?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Use Board Announcements extension',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board
											Announcements</a> is a great official extension enabling you to display a message
											on every board page. This extension and a few encouraging words are enough to boost
											the usage counter.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Send mass notification',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Never heard of such an option? My new extension
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass
											notification</a> allows you to send a one-time board notification. So while your users
											are reading the notification, they might just hit that Enable button right below.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Still not confident? If the suggestions above didn\'t help, you might consider using pop‑up
											option to hunt down the remaining users. Pop‑up won\'t be displayed to users who already
											enabled or disabled notifications, so don\'t worry about aready decided users.',
	'CLOSE'								=> 'Close',

	'SETTINGS_SAVED'	=> 'Browser and Mobile Notifications settings has been saved.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Notification method',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'You may choose to send notification via Browser and Mobile Notifications Extension instead of traditional board notification method.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Use board notifications',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Use browser notifications',
));
