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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Browser- und Mobile Benachrichtigungen',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Einstellungen',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Browser- und Mobile Benachrichtigungseinstellungen',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Ihr Board hat <strong>%d</strong> Benutzer von %d (%0.2f%%), der die Browser-Benachrichtigungen aktiviert hat.',
		2	=> 'Ihr Board hat <strong>%d</strong> Benutzer von %d (%0.2f%%), die die Browser-Benachrichtigungen aktiviert haben.',
	],

	'DISPLAY_POPUP'			=> 'Pop-up anzeigen',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Schalten Sie diese Option an, um Ihren Benutzern ein Pop-up anzuzeigen, dass sie auffordert die Browser-Benachrichtigugnen zu aktivieren. Ihre Benutzer können dies ablehnen und das Pop-up ausblenden, aber dies ist eine der aussichtsreichsten Methoden, um Ihre Benutzer zum Aktivieren der Funktion zu bringen. Andererseits ist es möglich, dass Ihre Nutzer diese Option als zu aufdringlich empfinden und die Benachrichtigungen deshalb ablehnen. Daher sollte diese Option mit Vorsicht verwendet werden.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Verschiedene Optionen anzeigen</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Wie können Benutzer davon überzeugt werden die Browser-Benachrichtigungen zu aktivieren',
	'POP_UP_ALTENRATIVES_P1'			=> 'Ihre Benutzer davon zu überzeugen, auf das Browser-Pop-up zu klicken, ist nicht einfach. Viele Benutzerfreundlichkeitstests haben diesen Fall untersucht und sind zur gleichen Schlussfolgerung gekommen: fragen Sie Ihre Benutzer nie um ihr Einverständnis, bevor sie nicht deutlich den Vorteil erkennen können. Deshalb bietet diese Erweiterung die Browser-Benachrichtigungen dort an, wo sich der Benutzer mit den Board-Benachrichtigungen befasst.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Allerdings ist es mehr als verständlich, dass Sie möchten, dass Ihre Benutzer die Vorteile dieser tollen Funktion erkennen. Deshalb kommen jetzt ein paar Empfehlungen für weniger aggressive Methoden:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Erstellen Sie eine Bekanntmachung',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Wenn Sie wissen, dass Ihre Benutzer regelmäßig die Bekanntmachungen lesen, erstellen Sie einfach eine Bekanntmachung, die Ihren Benutzern erklärt, was Browser-Benachrichtigungen sind und wie sie aktiviert werden können.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Senden Sie an alle eine Private Nachricht',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Es gibt keine persönlichere Kontaktaufnahme in phpBB als eine Private Nachricht. Sie kann nicht unentdeckt bleiben, da das auffällige „Ungelesene Private Nachricht“-Symbol im Seitenkopf erscheint. Zudem verdienen Ihre Benutzer ab und zu eine positive Nachricht von ihrem Administrator, oder nicht?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Benutzen Sie die „Board Announcements“-Erweiterung',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board Announcements</a> ist eine offizielle Erweiterung, die es Ihnen ermöglicht eine Nachricht auf jeder Board-Seite anzeigen zu lassen. Diese Erweiterung und ein paar animierenden Worten sind genug, um die Nutzungshäufigkeit zu steigern.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Sende Massenbenachrichtigungen',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Noch nie von solch einer Funktion gehört? Meine neue Erweiterung <a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass notification</a> ermöglicht es Ihnen einzelne Board-Benachrichtigungen zu senden. Während Ihre Benutzer die Benachrichtigung lesen, könnten sie direkt den „Aktivieren“-Button drücken.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Immer noch nicht überzeugt? Sofern Ihnen die oben erwähnten Vorschläge nicht helfen, können Sie überlegen die Pop-up-Methode zu aktivieren, um die übrigen Benutzer zu erreichen. Das Pop-up wird nicht anzeigt, wenn die Benutzer die Benachrichtigungen bereits aktiviert oder deaktiviert haben.',
	'CLOSE'								=> 'Schließen',

	'POPUP_METHOD'					=> 'Pop-up Methode',
	'POPUP_METHOD_EXPLAIN'			=> 'Nachdem Sie sich entschieden haben ein Pop-up anzuzeigen, um Ihre Benutzer zu überzeugen, Browser-Benachrichtigungen zu erlauben, gibt es zwei Varianten die Pop-ups anzuzeigen. Die erste Möglichkeit ist weniger aufdringlich und gibt den Benutzern zudem die Chance zu verstehen, was die Vorteile von aktivierten Browser-Benachrichtigungen sind. Die zweite Möglichkeit ist aufdringlicher, könnte allerdings zu vielen Absagen führen.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Sofortige Aufforderung anzeigen.</strong> Ihre Benutzer werden die Browser-Aufforderung sofort auf allen Seiten angezeigt bekommen, bis sie die Aufforderung bestätigen oder ablehnen.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Einmal nach jeder Anmeldung nachfragen</strong> Ihre Benutzer werden nach jeder Anmeldung gefragt, ob sie Browser-Benachrichtigungen empfangen möchten. Beim Bestätigen, wird eine Browser-Eingabeaufforderung angezeigt. Beim Ablehnen sehen sie das Pop-up nicht erneut.',

	'SETTINGS_SAVED'	=> '„Browser- und Mobil-Benachrichtigungen“-Einstellungen wurden gespeichert.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Benachrichtigungs-Methode',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Sie können zwischen dem Versenden von Benachrichtigugnen via der „Browser- und Mobil-Benachrichtigungen“ Erweiterung und den herkömmlichen Board-Benachrichtigugnen entscheiden.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Verwende die Board-Benachrichtigungen',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Verwende die Browser-Benachrichtigungen',
));
