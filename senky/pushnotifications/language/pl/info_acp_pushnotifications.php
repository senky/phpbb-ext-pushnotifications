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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Powiadomienia "push"',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Ustawienia',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Ustawienia powiadomień "push"',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Na witrynie <strong>%d</strong> użytkownik z (%0.2f%%) ma włączone powiadomienia.',
		2	=> 'Na witrynie <strong>%d</strong> użytkowników z (%0.2f%%) ma włączone powiadomienia.',
	],

	'DISPLAY_POPUP'			=> 'Wyświetl wyskakujące okienko pop-up',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Wybranie Tak spowoduje, że po zalogowaniu zostanie wyświetlone wyskakujące okienko pop-up użytkownikom z informacją o włączenie powiadomień w przeglądarce. Może ono zostać zaakceptowane lub odrzucone.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Zobacz sposoby powiadomień</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Jak zachęcić użytkowników do włączenia powiadomień?',
	'POP_UP_ALTENRATIVES_P1'			=> 'Wyskakujące okienka podczas przeglądania strony internetowej są często dla użytkowników irytujące. 
											Należy się dobrze zastanowić w jaki sposób poinformować o nowej funkcjonalności',
	'POP_UP_ALTENRATIVES_P2'			=> 'Poniżej znajduje się lista kilku możliwości jak poinformować użytkowników o funkcjonalności powiadomień mobilnych czy w przeglądarce.',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Napisz nowy temat',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Użytkownicy zazwyczaj czytają nowe tematy, więc możesz poinformować ich o nowej funkcjonalności powiadomień w ten sposób.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Wyślij prywatną wiadomość',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Prywatna wiadomość jest bezpośrednią formą kontaktu z użytkownikami. W ten sposób 
											na pewno nie pominą informacji o nowej funkcjonalności.',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Skorzystaj z rozszerzenia "Board Announcements"',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board
											Announcements</a> to oficjalne rozszerzenie, dzięki któremu możesz wyświetlić ogłoszenie na witrynie forum
											i powiadomić o nowej funkcjonalności.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Powiadom wszystkich użytkowników',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Nowe rozszerzenie <a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass
											notification</a> pozwala wysłać powiadomienie do każdego użytkownika witryny.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Alternatywną możliwością jest włączenie powiadomień poprzez wyskakujące okno pop-up. 
											Opcja ta nie będzie działać dla użytkowników, którzy mają już włączone powiadomienia.',
	'CLOSE'								=> 'Zamknij',

	'POPUP_METHOD'					=> 'Metoda pop-up',
	'POPUP_METHOD_EXPLAIN'			=> 'Do wyboru są dwie możliwości wyświetlania powiadomienia pop-up dla użytkownika.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Wyświetl stałe powiadomienie.</strong> Użytkownik otrzyma powiadomienie pop-up po zalogowaniu i do czasu akceptacji lub odmowy będzie on stale wyświetlony.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Wyświetl przy każdym logowaniu.</strong> Użytkownik otrzyma powiadomienie pop-up przy każdym zalogowaniu. Potwierdzając, zobaczą monit przeglądarki. Jeśli odmówi, powiadomienie nie zostanie więcej wyświetlone.',

	'SETTINGS_SAVED'	=> 'Ustawienia powiadomień zostały zapisane.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Typ powiadomień',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Można wysłać powiadomienie mobilne lub w przeglądarce, zamiast korzystać z powiadomień phpBB.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Wybierz powiadomienia phpBB',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Wybierz powiadomienia w przeglądarce',
));
