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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Upozornění přes prohlížeč',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Nastavení',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Nastavení upozornění přes prohlížeč',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Upozornění využívá <strong>%d</strong> uživatel fóra z celkového počtu %d (%0.2f%%).',
		2	=> 'Upozornění využívají <strong>%d</strong> uživatelé z celkového počtu %d (%0.2f%%).',
		3	=> 'Upozornění využívá <strong>%d</strong> uživatelů z celkového počtu %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Vyskakovací okno',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Zde můžete povolit zda se má zobrazit vyskakovací okno s možnostní odběru oznámení z fóra pomocí upozornění přes prohlížeč.<br />Jedná se o nepřehlédnutelný způsob jak uživatele upozornit na možnost těchto upozornění, ale zároveň se jedná o velice agresivní způsob jenž může zapřícinit zamítnutí odběru upozornění.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Další možnosti informování uživatelů</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Jak upozornit uživatele na možnost upozornění přes prohlížeč',
	'POP_UP_ALTENRATIVES_P1'			=> 'Uživatele na možnost těchto upozornění lze upozornit pomocí vyskakovacího okna. Jedná se ale o agresivní způsob, a uživatelé většinou tuto možnost rovnou zamítnou. Není dobré uživatele hned nutit k přihlášení oznámení dokud se nemohou předvědčit o výhodách. Lepší je na tuto možnost upozornit uživatele na místech, kde si hlídají důležité informace z fóra.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Samozřejmě je jasné, že chcete aby uživatelé o této funkci věděli a mohli jí využívat. Zde je pár doporučení jak je o možnosti informovat:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Napsat oznámení',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Pokud víte, že uživatelé čtou oznámení, můžete napsat oznámení či globální oznámení a v něm uvést informace o této funkci s postupem jejího zapnutí.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Zaslat soukromou zprávu',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'V systému phpBB není nic osobnějšího než soukromá zpráva. Uživatelé si jednou za čas zaslouží příjemnou zprávu od administrátora. Navíc není lehké přehlédnout, že se ve schránce nachází nová soukromá zpráva.',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Použít rozšíření Oznámení fóra',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Oznámení fóra</a> je skvělé rozšíření přímo od tvůrců systému phpBB. Umožňuje zobrazit zprávu na každé stránce fóra a tu není jednoduché přehlédnout.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Zaslat hromadné upozornění',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Ještě jste neslyšeli o této možnosti? Moje nové rozšíření <a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Hromadné upozornění</a> umožňuje uživatelům zaslat jednorázové upozornění. A povolit upozornění přes prohlížeč mohou přímo ze zaslaného upozornění!',
	'POP_UP_ALTENRATIVES_P3'			=> 'Pokud se rozhodnete použít možnost vyskakovacího okna, nemusíte se bát přílišného otravování uživatelů. Vyskakovací okno se uživateli zobrazí pouze jednou a po vybrání volby se již dále nezobrazuje.',
	'CLOSE'								=> 'Zavřít',

	'POPUP_METHOD'					=> 'Vyskakovací okno',
	'POPUP_METHOD_EXPLAIN'			=> 'Rozhodli jste se používat vyskakovací okno a nyní si můžete vybrat jednu z možností zobrazování vyskakovacího okna. První je velice agresivní a může uživatele otravovat, ale také je donutit k případnému odběru.<br />Druhá možnost již není tolik agresivní a nebude uživatele tolik otravovat čímž jim poskytne více času na rozmyšlení.<br />V obouch případech se vyskakovací okno zobrazuje do té doby, dokud si uživatele nevybere jednu z možností. Poté se již znovu nezobrazuje.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Zobrazovat na každé stránce</strong><br />Uživatelům je vyskakovací okno zobrazováno na každé stránce dokud si nevyberou jednu z možností.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Zobrazovat po každém přihlášení</strong><br />Uživatelům je vyskakovací okno zobrazeno po každém přihlášení dokud si nevyberou jednu z možností.',

	'SETTINGS_SAVED'	=> 'Nastavení upozornění přes prohlížeč bylo uloženo.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Druh upozornění',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Zde si můžete vybrat jakou formou chcete upozornění uživatelům zaslat.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Upozornění přes fórum',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Upozornění přes prohlížeč',
));
