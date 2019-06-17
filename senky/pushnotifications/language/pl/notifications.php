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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Przeglądarka',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>włączone.</strong> Nie przegapisz żadnych nowych wiadomości na tej witrynie. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Wyłącz</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>włączone.</strong> <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Wyłącz</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>wyłączone.</strong> <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Kliknij tutaj, aby włączyć powiadomienia w przeglądarce</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>wyłączone.</strong> <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Włącz</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Wymuszone wyłaczenie</strong> <a href=javascript:;" id="senky-pushnotifications-btn-enable">Jak włączyć powiadomienia?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Wyłączone</strong> <a href=javascript:;" id="senky-pushnotifications-btn-enable">Jak włączyć powiadomienia?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Powiadomienia w przeglądarce dla tej witryny są',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Powiadomienia w przeglądarce są',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Wystąpił błąd podczas włączania powiadomień i ustawienia nie zostały zapisane. Sprawdź połączenie internetowe i spróbuj ponownie. Jeśli problem nadal występuje, skontaktuj się z administratorem witryny.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Wystąpił błąd podczas wyłączania powiadomień i ustawienia nie zostały zapisane. Sprawdź połączenie internetowe i spróbuj ponownie. Jeśli problem nadal występuje, skontaktuj się z administratorem witryny.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Jak włączyć powiadomienia w przeglądarce</br><strong>Jeśli pojawi się okno z zapytaniem o włączenie powiadomień dla witryny forum, kliknij Zezwalaj</strong>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Kliknij okrągłą ikonę "i" lub "kłódkę" na lewo od paska adresu</li><li>Znajdź opcję Powiadomienia</li><li>Z rozwijanego menu wybierz opcję Zezwalaj</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Kliknij ikonę globu na lewo od paska adresu</li><li>Znajdź opcję Powiadomienia</li><li>Z rozwijanego menu wybierz opcję Zezwalaj</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Kliknij "kłódkę" na lewo od paska adresu</li><li>Znajdź opcję Powiadomienia pod ustawieniami stron</li><li>Włącz opcję Powiadomienia</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Kliknij okrągłą ikonę "i" lub "kłódkę" na lewo od paska adresu<</li><li>Kliknij Ustawienia witryn</li><li>Kliknij Powiadomienia i wybierz Zezwalaj</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>W prawym, dolnym rogu kliknij logo Opera, a następnie Ustawienia</li><li>Zjedź na dół do opcji Prywatność > Ustawienia witryny</li><li>Kliknij Powiadomienia i wybierz Zawsze pytaj</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Kliknij okrągłą ikonę "i" lub "kłódkę" na lewo od paska adresu</li><li>Edytuj ustawienia witryny</li><li>Zaznacz opcję Powiadomienia</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Przejdź do ustawień przeglądarki (trzy kropki/paski)</li><li>Kliknij ikonę Ustawień, a następnie Ustawienia Powiadomień</li><li>Włącz powiadomienia</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Przejdź do ustawień przeglądarki (trzy kropki/paski)</li><li>Kliknij Ustawienia, następnie zaawansowane i Powiadomienia</li><li>Włącz powiadomienia</li><li>Odśwież stronę i zaakceptuj powiadomienia dla witryny forum</li></ol>',

	'BROWSER_NOTIFICATIONS_POPUP_TITLE'	=> 'Powiadomienia w przeglądarce',
	'BROWSER_NOTIFICATIONS_POPUP_TEXT'	=> 'Na tej witrynie zostaną wyświetlone powiadomienia w przeglądarce, nawet jeśli zostanie ona zminimalizowana. Nie przeoczysz żadnych nowych wiadomości na tej witrynie. W każdej chwili możesz zmienić typ powiadomień lub je wyłaczyć. Czy chcesz to zrobić teraz?<br><br><span style="display: block; text-align: center;"><a class="button1 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Tak</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button2 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Nie</a></span>',
));
