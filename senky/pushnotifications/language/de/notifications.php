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

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>An</strong>. Du wirst keine Nachrichten von diesem Board verpassen. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Deaktivieren?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>An</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Deaktivieren?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Aus</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Klicke hier, um die Browser-Benachrichtigungen zu aktivieren</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Aus</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Aktivieren??</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Deaktiviert erzwungen</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Wie können sie aktiviert werden?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Deaktiviert</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Wie aktivieren?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Browser-Benachrichtigungen für diesen Browser',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Browser-Benachrichtigunge',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Ein Fehler ist beim Abonnieren der Internet-Benachrichtigungen aufgetreten (vermutlich ein Verbindungsfehler bei der Kommunikation mit dem Server). Sie wurden in diesem Browser deaktiviert. Bitte prüfe deine Internetverbindung und versuche es erneut. Kontaktiere die Board-Administrations, falls das Problem weiterhin besteht.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Ein Fehler ist beim Abbestellen der Internet-Benachrichtigungen aufgetreten (vermutlich ein Verbindungsfehler bei der Kommunikation mit dem Server). Sie wurden in diesem Browser deaktiviert. Bitte prüfe deine Internetverbindung und versuche es erneut. Kontaktiere die Board-Administrations, falls das Problem weiterhin besteht.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Wie die Browser-Benachrichtigungen aktiviert werden',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Klicke links von der Adresszeile auf das eingekreiste „i“-Symbol.</li><li>Suche das „Benachrichtigungs“-Feld</li><li>Klicke auf den „Bereich“ in der Auswahl</li><li>Wähle aus dem Ausklappmenü „aktivieren“ aus</li><li>Aktualisiere diese Seite</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Klicke links von der Adresszeile auf das „Weltkugel“-Symbol.</li><li>Suche das „Benachrichtigungs“-Feld</li><li>Wähle rechts von diesem Feld im Ausklappmenü „Immer für diese Seite erlauben“ aus</li><li>Aktualisiere diese Seite</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Klicke links von der Adresszeile auf das „Schloss“-Symbol.</li><li>Suche das „Benachrichtigungs“-Feld im Bereich „Website-Berechtigungen“.</li><li>Verändere den Schalter.</li><li>Aktualisiere diese Seite</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Tippe links von der Adresszeile auf Info (eingekreistes „i“).</li><li>Tippe auf Seiteneinstellungen > Benachrichtigungen.</li><li>Wähle erlauben.</li><li>Aktualisiere diese Seite</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Tippe in der rechten unteren Eck auf das Opera-Logo, danach auf Einstellungen.</li><li>Scrolle nach unten bis zu Sicherheit und Datenschutz.</li><li>Tippe Benachrichtigungen und erneut Benachrichtigungen an.</li><li>Wähle erlauben.</li><li>Aktualisiere diese Seite</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Tippe links von der Adressezeile auf das „Kontrollzentrum“-Icon (Schloss).</li><li>Tippe auf „Seiteneinstellungen bearbeiten“.</li><li>Prüfe Benachrichtigungen.</li><li>Aktualisiere diese Seite</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Tippe in der Fußleiste auf das Menü.</li><li>Tippe auf das „Einstellungen“-Symbol, danach auf Benachrichtigungs-Einstellungen und dann auf Seiten-Benachrichtigungen.</li><li>Finde die URL dieser Seite und tippe auf „löschen“.</li><li>Aktualisiere diese Seite und aktivierere die Benachrichtigungen erneut.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Tippe rechts von der Adresszeile auf das Menü (drei Punkte).</li><li>Tippe auf Einstellungen, dann zu Erweitert, dann auf Internet-Benachrichtigungen.</li><li>Finde die URL dieser Seite und verändere den Schalter.</li><li>Aktualisiere diese Seite</li></ol>',
));
