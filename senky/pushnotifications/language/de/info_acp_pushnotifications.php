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
		1	=> 'Dein Board hat <strong>%d</strong> Benutzer von %d (%0.2f%%), der die Browser-Benachrichtigungen aktiviert hat.',
		2	=> 'Dein Board hat <strong>%d</strong> Benutzer von %d (%0.2f%%), die die Browser-Benachrichtigungen aktiviert haben.',
	],

	'DISPLAY_POPUP'			=> 'Pop-up anzeigen',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Schalte diese Option an, um deinen Benutzern ein Pop-up anzuzeigen, dass sie auffordert die Browser-Benachrichtigugnen zu aktivieren. Deine Benutzer können dies ablehnen und das Pop-up ausblenden, aber dies ist eine der aussichtsreichsten Methoden, um deine Benutzer zum Aktivieren der Funktion zu bringen. Andererseits ist es möglich, dass deine Nutzer diese Option als zu aufdringlich empfinden und die Benachrichtigungen deshalb ablehnen. Daher sollte diese Option mit Vorsicht verwendet werden.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Verschiedene Optionen anzeigen</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Wie können Benutzer davon überzeugt werden die Browser-Benachrichtigungen zu aktivieren',
	'POP_UP_ALTENRATIVES_P1'			=> 'Deine Benutzer davon zu überzeugen, auf das Browser-Pop-up zu klicken, ist nicht einfach. Viele Benutzerfreundlichkeitstests haben diesen Fall untersucht und sind zur gleichen Schlussfolgerung gekommen: frage deine Benutzer nie um ihr Einverständnis, bevor sie nicht deutlich den Vorteil erkennen können. Deshalb bietet diese Erweiterung die Browser-Benachrichtigungen dort an, wo sich der Benutzer mit den Board-Benachrichtigungen befasst.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Allerdings ist es mehr als verständlich, dass du möchtest, dass deine Benutzer die Vorteile dieser tollen Funktion erkennen. Deshalb kommen jetzt ein paar Empfehlungen für weniger aggressive Methoden:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Erstelle eine Bekanntmachung',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Wenn du weißt, dass deine Benutzer regelmäßig die Bekanntmachungen lesen, erstelle einfach eine Bekanntmachung, die deinen Benutzern erklärt, was Browser-Benachrichtigungen sind und wie sie aktiviert werden können.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Sende an alle eine Private Nachricht',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Es gibt keine persönlichere Kontaktaufnahme in phpBB als eine Private Nachricht. Sie kann nicht unentdeckt bleiben, da das auffällige „Ungelesene Private Nachricht“-Symbol im Seitenkopf erscheint. Zudem verdienen deine Benutzer ab und zu eine positive Nachricht von ihrem Administrator, oder nicht?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Benutze die „Board Announcements“-Erweiterung',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board Announcements</a> ist eine offizielle Erweiterung, die es dir ermöglicht eine Nachricht auf jeder Board-Seite anzeigen zu lassen. Diese Erweiterung und ein paar animierenden Worte sind genug, um die Nutzungshäufigkeit zu steigern.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Sende Massenbenachrichtigungen',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Noch nie von solch einer Funktion gehört? Meine neue Erweiterung <a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass notification</a> ermöglicht es dir einzelne Board-Benachrichtigungen zu senden. Während deine Benutzer die Benachrichtigung lesen, könnten sie direkt den „Aktivieren“-Button drücken.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Immer noch nicht überzeugt? Sofern dir die oben erwähnten Vorschläge nicht helfen, kannst du überlegen die Pop-up-Methode zu aktivieren, um die übrigen Benutzer zu erreichen. Das Pop-up wird nicht anzeigt, wenn die Benutzer die Benachrichtigungen bereits aktiviert oder deaktiviert haben.',
	'CLOSE'								=> 'Schließen',

	'POPUP_METHOD'					=> 'Pop-up Methode',
	'POPUP_METHOD_EXPLAIN'			=> 'Nachdem du dich entschieden hast ein Pop-up anzuzeigen, um deine Benutzer zu überzeugen Browser-Benachrichtigungen zu erlauben, gibt es zwei Varianten die Pop-ups anzuzeigen. Die erste Möglichkeit ist weniger aufdringlich und gibt den Benutzern zudem die Chance zu verstehen, was die Vorteile von aktivierten Browser-Benachrichtigungen sind. Die zweite Möglichkeit ist aufdringlicher, könnte allerdings zu vielen Absagen führen.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Sofortige Aufforderung anzeigen.</strong> Deine Benutzer werden die Browser-Aufforderung sofort auf allen Seiten angezeigt bekommen, bis sie die Aufforderung bestätigen oder ablehnen.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Einmal nach jeder Anmeldung nachfragen</strong> Deine Benutzer werden nach jeder Anmeldung gefragt, ob sie Browser-Benachrichtigungen empfangen möchten. Beim Bestätigen, wird eine Browser-Eingabeaufforderung angezeigt. Beim Ablehnen sehen sie das Pop-up nicht erneut.',

	'SETTINGS_SAVED'	=> '„Browser- und Mobil-Benachrichtigungen“-Einstellungen wurden gespeichert.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Benachrichtigungs-Methode',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Du kannst zwischen dem Versenden von Benachrichtigugnen via der „Browser- und Mobil-Benachrichtigungen“ Erweiterung und den herkömmlichen Board-Benachrichtigugnen entscheiden.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Verwende die Board-Benachrichtigungen',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Verwende die Browser-Benachrichtigungen',
));
