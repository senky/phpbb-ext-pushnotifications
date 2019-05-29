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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Browser & Mobile Notificaties',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Instellingen',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Browser & Mobile Notificaties Instellingen',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Uw forum heeft <strong>%d</strong> gebruiker met browser notificaties ingeschakeld van de %d (%0.2f%%).',
		2	=> 'Uw forum heeft <strong>%d</strong> gebruikers met browser notificaties ingeschakeld van de %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Pop-up weergeven',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Stel in op yes om pop-up weer te geven aan uw gebruikers nadat ze zich hebben aangemeld en hen vragen om browser notificaties in te schakelen. Ze kunnen de pop-up weigeren en verbergen, maar het is waarschijnlijk dat u op deze manier meer conversies ontvangt dan andere. Aan de andere kant lijkt deze methode misschien te ingrijpend voor de gebruikers en kunnen ze notificaties van tijdelijke angst afwijzen. Dus deze methode moet met voorzichtigheid worden gebruikt.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Zie andere benaderingen</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Hoe gebruikers aan te moedigen om browser notificaties in te schakelen',
	'POP_UP_ALTENRATIVES_P1'			=> 'Gebruikers laten klikken op die rare browser pop-up is geen gemakkelijke taak. Veel bruikbaarheid
                                            tests die dit scenario behandelden resulteerden in dezelfde aanbeveling: vraag nooit gebruikers
                                            toestemming voordat ze duidelijk het voordeel ervan kunnen zien. Dat is waarom deze extensie 
											een browser notificatie biedt op plaatsen waar de gebruiker te maken heeft met forum notificaties.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Maar het is duidelijk begrijpelijk dat u wilt dat gebruikers voordeel halen uit deze fantastische functie. Dus hier zijn enkele aanbevolen manieren om het op een niet-agressieve manier te doen:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Plaats een aankondiging',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Als u weet dat uw gebruikers regelmatig de aankondigingen lezen, plaats dan een 
	                                        nieuw bericht met informatie over browser notificaties, wat hiervan het voordeel is 
											en hoe u deze kunt inschakelen.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Stuur PB naar iedereen',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Niets is persoonlijker in phpBB dan een privébericht. Het zal niet verborgen 
	                                        blijven voor het zicht van de gebruiker vanwege dat gloeiende ongelezen PB 
											tel nummer bovenaan. En uw gebruikers verdienen af en toe een positief bericht 
											van de beheerder, of niet soms?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Gebruik de extensie: “Board Announcements”.',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board
											Announcements</a> is een geweldige officiële extensie waarmee je een bericht op elke 
											forumpagina kunt weergeven. Deze uitbreiding en enkele bemoedigende woorden zijn 
											voldoende om het gebruik van de extensie te stimuleren.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Verzend massa notificatie',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Nog nooit van een dergelijke optie gehoord? Mijn nieuwe extensie
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass
											notification</a> staat u toe om een eenmalige notificatie te sturen. Dus terwijl uw 
											gebruikers de notificatie lezen, kunnen ze ook onmiddellijk op onderaan op de knop klikken 
											op de extensie te activeren.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Heb je nog steeds geen vertrouwen? Als de bovenstaande suggesties niet hebben geholpen, 
	                                        kunt u de pop-up optie gebruiken om de resterende gebruikers op te sporen. 
											Pop-up wordt niet weergegeven voor gebruikers die de extensie al hebben 
											ingeschakeld of uitgeschakeld, dus maak je geen zorgen over de 
											gebruikers die al een besluit gemaakt hebben..',
	'CLOSE'								=> 'Sluit',

	'POPUP_METHOD'					=> 'Pop-up methode',
	'POPUP_METHOD_EXPLAIN'			=> 'Aangezien u hebt besloten om een pop-up weer te geven om gebruikers aan te moedigen browser notificaties toe te staan, heeft u hier twee opties voor het weergeven ervan. De eerste optie is minder opdringerig en geeft de gebruiker ook een kans om te begrijpen wat de voordelen zijn van het inschakelen van browser notificaties. De tweede optie is minder opdringerig, maar kan tot veel weigeringen leiden.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Toon direct pop-up.</strong> Uw gebruikers zien de browser pop-up direct op alle pagina’s die ze bezoeken totdat ze dit bevestigen of weigeren.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Vraag één keer na elke login.</strong> Uw gebruikers zullen één keer bij iedere login gevraagd worden of ze browser notificaties willen ontvangen. Toestaan, ze zullen een browser pop-up zien. Weigeren, ze zullen die pop-up nooit meer zien.',

	'SETTINGS_SAVED'	=> 'Instellingen voor browser en mobiele notificaties zijn opgeslagen.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Notificatie methode',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'U kunt ervoor kiezen om een notificaties te verzenden via de Browser en Mobiele Notificaties Extensie in plaats van de traditionele forum notificatie methode.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Gebruik forum notificaties',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Gebruik browser notificaties',
));
