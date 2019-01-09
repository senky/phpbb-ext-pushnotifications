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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Notifikácie v prehliadači a mobile',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Nastavenia',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Nastavenia notifikácií v prehliadači a mobile',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Vaše fórum má <strong>%d</strong> používateľa so zapnutými notifikáciami v prehliadači z celkových %d (%0.2f%%).',
		2	=> 'Vaše fórum má <strong>%d</strong> používateľov so zapnutými notifikáciami v prehliadači z celkových %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Zobraziť vyskakovacie okno',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Nastavte áno pre zobrazenie vyskakovacieho okna vašim používateľom po tom, čo sa prihlásia. Okno ich vyžiada, aby povolili notifikácie v prehliadači. Používatelia to budú schopní odmietnuť a skryť vyskakovacie okno, ale je vysoko pravdepodobné, že získate viac konverzií ako akoukoľvek inou cestou. Na druhej strane môže táto metóda používateľom pripadať príliš invazívne a môžu notifikácie z aktuálneho vystrašenia odmietnuť. Používajte preto túto metódu opatrne.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Pozrite si alternatívne prístupy</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Ako povzbudiť používateľov aby povolili notifikácie v prehliadači',
	'POP_UP_ALTENRATIVES_P1'			=> 'Povzbudiť používateľa aby klikol na to divné malé okno v prehliadači nie je jednoduchá úloha. Veľa používateľských
											testov zaoberajúcich sa týmto scenárom došlo k rovnakým záverom: nikdy nepýtajte používateľa
											oprávnenie pred tým, ako on sám pochopí jeho výhodu. Preto toto rozšírenie
											ponúka notifikácie v prehliadači na miestach, kde sa nimi používateľ už zaoberá.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Ale je pochopiteľné, že chcete, aby vaši používatelia používali tútu skvelú novú vlastnosť vášho fóra. Tu je niekoľko odporúčaní, ako je to možné urobiť neagresívnym spôsobom:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Napíšte oznámenie',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Ak viete, že vaši používatelia pravidelne čítajú oznámenia, jednoducho napíšte
											nové, ktoré ich informuje čo notifikácie v prehliadači sú, aké majú výhody
											a ako ich povoliť.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Pošlite všetkým SS',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Nič v phpBB nie je viac osobné ako súkromná správa. Nestratí sa
											z očí používateľa vďaka zvýraznenému číslo v hlavičke každej stránky. A vaši
											používatelia si zaslúžia raz za čas pozitívnu správu od administrátora, nie?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Použite rozšírenie Board Announcements',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board
											Announcements</a> je skvelé oficiálne rozšírenie, ktoré vám umožní zobraziť text
											na každej stránke fóra. Toto rozšírenie a niekoľko povzbudzujúcich slov určite postačí na zvýšenie
											celkového počtu používateľov notifikácií.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Pošlite hormadnú notifikáciu',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Nikdy ste o takej možnosti nepočuli? Moje nové rozšírenie
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass
											notification</a> umožňuje poslať jednorázovú notifikáciu. Takže kým si používatelia
											čítajú túto notifikáciu, je možné, že rovno kliknú tlačidlo Povoliť trošku nižšie.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Stále nie ste presvedčení? Ak vyššie uvedené návrhy nepomohli, mali by ste začať uvažovať o povolení vyskakovacieho okna
											aby ste zachytili zvyšných používateľov. Vyskakovacie okno sa nezobrazí používateľom, ktorí už
											povolili alebo zamietli notifikácie, takže sa nemusíte báť o ož rozhodnutých používateľov.',
	'CLOSE'								=> 'Zatvoriť',

	'SETTINGS_SAVED'	=> 'Nastavenia notifikácií v prehliadači a mobile boli uložené.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Notifikačná metóda',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Namiesto klasickej metódy máte možnosť poslať notifikáciu cez rozšírenie Browser and Mobile Notifications.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Použiť notifikácie fóra',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Použiť notifikácie v prehliadači',
));
