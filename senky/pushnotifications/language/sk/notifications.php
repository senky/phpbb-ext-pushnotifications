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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Prehliadač',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Zapnuté</strong>. Nezmeškáte žiadne novinky z tohto fóra. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Zakázať?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Zapnuté</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Vypnúť?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Vypnuté</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Kliknite sem pre povolenie notifikácii v prehliadači</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Vypnuté</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Zapnúť?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Vynútene vypnuté</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Ako ich povoliť?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Zakázané</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Ako povoliť?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Notifikácie pre tento prehliadač',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Notifikácie v prehliadači',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Nastala chyba (pravdepodobne chyba pripojenia počas kontaktovania servera) počas spúštania webových notifikácií. Pre tento prehliadač boli vypnuté. Prosíme, skontrolujte si internetové pripojenie a skúste to znova. Ak problém pretrváva, kontaktujte administrátora fóra.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Nastala chyba (pravdepodobne chyba pripojenia počas kontaktovania servera) počas rušenia webových notifikácii. Prosíme, skontrolujte si internetové pripojenie a skúste to znova. Ak problém pretrváva, kontaktujte administrátora fóra.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Ako povoliť notifikácie v prehliadači',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Kliknite na zakrúžkovanú ikonku "i" naľavo od adresneúho riadku.</li><li>Nájdite položku "Notifikácie"</li><li>Kliknite na "Blokované"</li><li>Zo zoznamu vyberte "Povolené"</li><li>Znova načítajte túto stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Kliknite na ikonku zemegule naľavo od adresného riadku.</li><li>Nájdite položku "Notifikácie"</li><li>Zo zoznamu napravo vyberte "Vždy povolené pre túto stránku"</li><li>Znova načítajte túto stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>liknite na ikonku naľavo od adresného riadku.</li><li>Nájdite položku "Notifikácie" pod nadpisom "Oprávnenia webstránky".</li><li>Kliknite na prepínač.</li><li>Znova načítajte túto stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Stlačte Info (zakrúžkované "i") naľavo od adresného riadku.</li><li>Stlačte Nastavenia webstránky &gt; Notifikácie.</li><li>Stlačte Povoliť.</li><li>Znova načítajte túto stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Stlačte logo Opera v pravom dolnom rohu, potom Nastavenia.</li><li>Prejdite úplne dole do Súkromie &gt; Nastavenia lokalít.</li><li>Stlačte Notifikácie a znova Notifikácie.</li><li>Vyberte Povolené.</li><li>Znova načítajte túto stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Stlačte ikonku Kontrolného centra (zámok) naľavo od adresného riadku.</li><li>Stlačte Upraviť nastavenia stránky.</li><li>Zaškrtnite Notifikácie.</li><li>Znova načítajte túto stránku.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Stlačte Menu z dolného riadku.</li><li>Stlačte ikonku Nastavenia, potom Nastavenia notifikácií a potom Notifikácie stránky.</li><li>Nájdite URL tejto stránky a stlačte Vyčistiť.</li><li>Znova načítajte túto stránku a povoľte notifikácie.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Stlačte Menu (tri bodky) napravo od adresného riadku.</li><li>Stlačte Nastavenia, potom Pokročilé, potom Webové notifikácie.</li><li>Nájdite URL tejto stránky a kliknite na prepínač.</li><li>Znova načítajte túto stránku.</li></ol>',
));
