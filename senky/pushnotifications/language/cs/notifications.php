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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Prohlížeč',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Zapnuto</strong>. Už nezmeškáte žádné novinky. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Vypnout?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Zapnuto</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Vypnout?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Vypnuto</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Klikněte zde pro zapnutí</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Vypnuto</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Zapnout?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Omezeno nastavením prohlížeče</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Jak povolit upozornění přes prohlížeč?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Omezeno prohlížečem</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Jak na povolení?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Zasílání upozornění přes prohlížeč',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Upozornění přes prohlížeč',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Objevila se chyba (možná chyba spojení se serverem) při zapínání upozornění přes prohlížeč. Je možné, že jsou v tomto prohlížeči vypnuté nebo je problém s internetovým přípojením. Pokud problém trvá, kontaktujte administrátora fóra.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Objevila se chyba (možná chyba spojení se serverem) při vypínání upozornění přes prohlížeč. Je možné, že je problém s internetovým přípojením. Pokud problém trvá, kontaktujte administrátora fóra.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Jak povolit upozornění přes prohlížeč',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Klikněte na ikonu i v kruhu či zámku, nalevo od adresního řádku.</li><li>Najděte položku Oznámení.</li><li>Klikněte na Blokovat pro otevření rozbalovacího menu.</li><li>Z robzalovacího menu vyberze Povolit.</li><li>Aktualizujte stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Klikněte na ikonu i v kruhu či zámku, nalevo od adresního řádku.</li><li>Najděte položku Oznámení.</li><li>Klikněte na Blokovat pro otevření rozbalovacího menu a vyberte položku Povolit.</li><li>Aktualizujte stránku..</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Klikněte na ikonu i v kruhu či zámku, nalevo od adresního řádku.</li><li>Najděte položku Oznámení v sekci Oprávnění pro web.</li><li>Přepněte spínač do polohy zapnuto.</li><li>Aktualizujte stánku..</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Klikněte na ikonu i v kruhu či zámku, nalevo od adresního řádku.</li><li>Klikněte na Nastevení webu a následně na Oznámení.</li><li>Vyberte Povolit.</li><li>Aktualizujte stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Klikněte na ikonu i v kruhu či zámku, nalevo od adresního řádku..</li><li>Klikněte na Místní nastavení.</li><li>Klikněte na Oznámení.</li><li>Vyberte Povoleno.</li><li>Aktualizujte stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Klikněte na ikonu glóbu či zámku, nalevo od adresního řádku.</li><li>Klikněte na Upravit nastavení stránky.</li><li>Označte položku Oznámení.</li><li>Aktualizujte stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Otevřete menu ve spodním panelu.</li><li>Klikněte na ikonu nastavení, vyberte položku Notification Settings a následně Site Notification.</li><li>Vyberte adresu stánky a klikněte na Clear.</li><li>Aktualizujte stránku a povolte Upozornění ještě jednou.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Vpravo dole klikněte na ikonu menu (tři pomlčky).</li><li>Vyberte Nastavení a sekci Rozšířené vyberte Weby a stahování a zde klikněte na Zobrazit oznámení z webů.</li><li>Najděte adresu stránky a přesuňte spínač na polohu Povoleno.</li><li>Aktualizujte stránku..</li></ol>',
));
