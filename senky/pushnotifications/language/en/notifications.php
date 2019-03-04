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

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Browser',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>On</strong>. You will not miss any news from this board. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Disable?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>On</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Disable?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Off</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Click here to enable browser notifications</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Off</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Enable?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Forcely disabled</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">How to enable them?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Disabled</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">How to enable?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Browser notifications for this browser',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Browser notifications',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'There was an error (possibly connection error while contacting the server) during the subscription to Web Notifications. They have been disabled in this browser. Please check your Internet connection and try again. Contact the board administrator if the problem persists.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'There was an error (possibly connection error while contacting the server) during the unsubscription to Web Notifications. Please check your Internet connection and try again. Contact the board administrator if the problem persists.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'How to enable browser notifications',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Click on the encircled "i" icon left to the address bar.</li><li>Find the "Notifications" label</li><li>Click on the "Block" in selectbox</li><li>From the dropdown select "Enable"</li><li>Refresh this page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Click on the globe icon left to the address bar.</li><li>Find the "Notifications" label</li><li>From the dropdown right to the label select "Always enable for this site"</li><li>Refresh this page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Click on the lock icon left to the address bar.</li><li>Find the "Notifications" label under "Website permissions" heading.</li><li>Toggle the switch.</li><li>Refresh this page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>To the left of the address bar, tap Info (encircled "i").</li><li>Tap Site Settings > Notifications.</li><li>Choose Allow.</li><li>Refresh this page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>In the right bottom corner, tap Opera logo, then Settings.</li><li>Scroll down to Privacy &gt; Location settings.</li><li>Tap Notifications and Notifications again.</li><li>Select Allowed.</li><li>Refresh this page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Tap the Control Center icon (lock), left to the address bar.</li><li>Tap Edit Site Settings.</li><li>Check Notifications.</li><li>Refresh this page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Tap Menu from the bottom bar.</li><li>Tap Settings icon, then Notification Settings and then Site Notifications.</li><li>Find URL of this site and tap Clear.</li><li>Refresh this page and enable notifications once more.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>To the right of the address bar, tap Menu (three dots).</li><li>Tap Settings, then Advanced, then Web Notifications.</li><li>Find URL of this site and toggle the switch.</li><li>Refresh this page.</li></ol>',

	'BROWSER_NOTIFICATIONS_POPUP_TITLE'	=> 'Browser notifications',
	'BROWSER_NOTIFICATIONS_POPUP_TEXT'	=> 'This board allows you to receive notifications directly to your browser - even when it is closed. You will never miss anything important and you can always choose what type of notifications you receive or turn them all off. Do you want to opt-in now?<br><br><span style="display: block; text-align: center;"><a class="button1 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Yes, please</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button2 alert_close" style="cursor: pointer; float: none; margin-right: 0;">No</a></span>',
));
