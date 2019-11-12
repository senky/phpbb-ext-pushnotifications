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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Notifiche Web e Mobile',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Impostazioni',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Impostazioni Notifiche Web e Mobile',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Il vostro forum ha <strong>%d</strong> utenti con attivate le notifiche Web su %d (%0.2f%%).',
		2	=> 'Il vostro forum ha <strong>%d</strong> utenti con attivate le notifiche Web su %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Mostra pop-up',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Imposta su Sì per visualizzare un pop-up agli utenti dopo l\'accesso chiedendo loro di abilitare le notifiche del browser. Saranno in grado di rifiutare e nascondere il pop-up, ma è probabile che riceverai più conversioni in questo modo rispetto a qualsiasi altro. D\'altra parte, questo metodo potrebbe sembrare troppo invasivo per gli utenti e possono rifiutare le notifiche per timore. Quindi questo metodo dovrebbe essere usato con cautela.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Vedi approcci differenti</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Come incoraggiare gli utenti ad attivare le notifiche del browser',
	'POP_UP_ALTENRATIVES_P1'			=> 'Fare in modo che gli utenti facciano clic sul pop-up non è facile. Molti test di usabilità
											relativi a questo scenario hanno portato alla stessa raccomandazione: Non chiedere mai agli utenti
											il permesso prima che possano vederne chiaramente il vantaggio. Ecco perché questa estensione
											propone la notifiche del browser nei luoghi in cui l\'utente si occupa di notifiche.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Ma è chiaramente comprensibile che tu voglia che gli utenti traggano vantaggio da questa fantastica funzionalità. Quindi ecco alcuni modi consigliati per farlo in modo non aggressivo:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Pubblica un annuncio',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Se sai che i tuoi utenti leggono regolarmente gli annunci, basta pubblicarne uno
											per informarli su cosa sono le notifiche del browser, quali vantaggi portano
											se attivate.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Manda a tutti un messaggio privato',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'nulla è più personale in phpBB di un messaggio privato. non sarà nascosto alla
											vista degli utenti a causa dell\'avviso presente nell\'intestazione. I vostri
											utenti si meritano di tanto in tanto un messaggio positivo dall\'amministratore, no?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Usa l\'astensione Board Announcements',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board
											Announcements</a> è una buona estensione ufficiale che permette di visualizzare un messaggio
											su ogni pagina del forum. Questa estensione e alcune parole incoraggianti sono sufficienti
											per aumentare l\'utilizzo delle notifiche.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Nanda una notifica di massa',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Non hai mai sentito parlare di questa opzione? La mia nuova estensione
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">
											La Notifica di Massa</a> permette di inviare una modifica dalla bacheca. Così mentre i vostri utenti
											leggono la notifica, possono semplicemente premere il pulsante Attiva sotto.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Non sei ancora sicuro? sei suggerimenti sopra riportati molti sono stati d\'aiuto, potresti considerare l\'uso 
											dell\'opzione pop-up per convincere gli utenti rimanenti. Il pop-up non sarà mostrato a chi ha già deciso di
											attivare o disattivare le notifiche, quindi non preoccuparti degli utenti che hanno già deciso.',
	'CLOSE'								=> 'Chiudi',

	'POPUP_METHOD'					=> 'Pop-up method',
	'POPUP_METHOD_EXPLAIN'			=> 'Since you have decided to display a pop-up to encourage users to allow browser notifications, here you have two options on how to display it. The first option is less invasive and also gives user a chance to understand what are the advantages of enabling browser notifications. The second option is less intrusive, but may lead to many denials.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Display directly prompt.</strong> Your users will see the browser prompt directly on all pages they visit until they confirm or deny it.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Ask once after every login.</strong> Your users will be asked once every time they log in whether they wish to receive browser notifications. Confirming, they will see a browser prompt. Denying, they will never see that pop-up again.',

	'SETTINGS_SAVED'	=> 'Le impostazione delle Notifiche Web e mobile sono state salvate.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Metodo di notifica',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Puoi scegliere di inviare le notifiche attraverso l\'estensione Notifiche Web e mobile invece del tradizionale metodo del forum.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Usa le notifiche del forum',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Usa le notifiche del browser',
));
