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

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Aan</strong>. U zult geen enkel nieuws van dit forum missen. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Uitschakelen?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Aan</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Uitschakelen?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Uit</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Klik hier om browser notificaties in te schakelen</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Uit</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Inschakelen?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Geforceerd uitgeschakeld</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Hoe ze in te schakelen?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Uitgeschakeld</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Hoe in te schakelen?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Browser notificaties voor deze browser',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Browser notificaties',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Er is een fout opgetreden (mogelijk verbindingsfout tijdens contact met de server) tijdens het abonnement op web notificaties. Ze zijn uitgeschakeld in deze browser. Controleer uw internetverbinding en probeer het opnieuw. Neem contact op met de forumbeheerder als het probleem aanhoudt.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Er is een fout opgetreden (mogelijk een verbindingsfout tijdens het contact met de server) tijdens de afmelding bij web notificaties. Controleer uw internetverbinding en probeer het opnieuw. Neem contact op met de forumbeheerder als het probleem aanhoudt.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Hoe browser notificaties in te schakelen',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Klik op het omcirkelde "i" -pictogram links op de adresbalk.</li><li>Zoek het "Notificaties" label</li><li>Klik op het vakje "Blokkeren" in het selectievakje</li><li>Selecteer in de vervolgkeuzelijst "Inschakelen"</li><li>Vernieuw deze pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Klik op het wereldbol icoon links op de adresbalk.</li><li>Zoek het "Notificaties" label</li><li>Selecteer in de vervolgkeuzelijst naast het label "Altijd inschakelen voor deze site"</li><li>Vernieuw deze pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Klik op het slot pictogram links in de adresbalk.</li><li>Zoek het label "Notificaties" onder de kop "Website-machtigingen".</li><li>Wissel met de schakelaar.</li><li>Vernieuw deze pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Tik links van de adresbalk op Info (omcirkeld "i").</li><li>Tik op Site instellingen > Notificaties.</li><li>Kies Toestaan.</li><li>Vernieuw deze pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Tik in de rechterbenedenhoek op Opera logo en vervolgens op Instellingen.</li><li>Scrol omlaag naar Privacy &gt; Locatie instellingen.</li><li>Tik nogmaals op Notificaties en Notificaties.</li><li>Selecteer Toegestaan.</li><li>Vernieuw deze pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Tik op het pictogram van het Controle Centrum (vergrendeling/Tandwiel), links op de adresbalk.</li><li>Tik op Site instellingen bewerken.</li><li>Controleer Notificaties.</li><li>Vernieuw deze pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Tik op Menu in de balk onderaan.</li><li>Tik op het pictogram Instellingen, vervolgens NOtificatie instellingen en vervolgens Site notificaties.</li><li>Zoek de URL van deze site en tik op Wissen.</li><li>Vernieuw deze pagina en schakel notificaties opnieuw in.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Tik rechts van de adresbalk op Menu (drie stippen).</li><li>Tik op Instellingen, vervolgens Geavanceerd en vervolgens Web notificaties.</li><li>Zoek de URL van deze site en schakel de schakelaar.</li><li>Vernieuw deze pagina.</li></ol>',
));
