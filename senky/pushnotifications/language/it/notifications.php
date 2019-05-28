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

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>On</strong>. Non ti perderai nessuna notizia di questo forum.<a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Disattiva?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>On</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Disattiva?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Off</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Fai clic qui per attivare le notifiche Web</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Off</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Attiva?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Disattivate forzatamente</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Come attivarle?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Disattivate</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Come attivarle?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Notifiche Web per questo browser',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Notifiche Web',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'C\'è stato un errore (probabilmente un problema di connessione mentre si cercava di raggiungere il server) durante l\'attivazione delle Notifiche Web. Esse sono state disattivate in questo browser. Per piacere controlla la tua connessione Internet e riprova. Contatta l\'amministratore del forum se il problema persiste.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'C\'è stato un errore (probabilmente un problema di connessione mentre si cercava di raggiungere il server) durante la disattivazione delle Notifiche Web. Per piacere controlla la tua connessione Internet e riprova. Contatta l\'amministratore del forum se il problema persiste.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Come attivare le Notifiche Web',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Fai clic sull\'icona con la "i" cerchiata a sinistra della barra degli indirizzi.</li><li>Trova l\'etichetta "Notifiche"</li><li>Fai clic su "Blocca" nella selectbox</li><li>Dal menù a tendina dropdown seleziona "Attiva"</li><li>Aggiorna la pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Fai clic sull\'icona con il globo a sinistra della barra degli indirizzi.</li><li>Trova l\'etichetta "Notifiche"</li><li>Dal menu a tendina a destra seleziona "Sempre attive per questo sito"</li><li>Aggiorna la pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Fai clic sull\'icona con il lucchetto a sinistra della barra degli indirizzi.</li><li>Trova l\'etichetta "Notifiche" sotto l\'intestazione "Permessi del sito Web".</li><li>Attiva o disattiva l\'opzione.</li><li>Aggiorna la pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>A sinistra della barra degli indirizzi, tocca Info ("i" cerchiata).</li><li>Tocca impostazioni del sito > Notifiche.</li><li>Scegli Consenti.</li><li>Aggiorna la pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Nell\'angolo in basso a destra, Tocca il logo Opera, poi Impostazioni.</li><li>Scorri in basso e seleziona Privacy &gt; Impostazioni Localizzazione.</li><li>Tocca Notifiche e poi di nuovo Notifiche.</li><li>Seleziona Consenti.</li><li>Aggiorna la pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Tocca l\'icona del Centro di Controllo (lucchetto), a sinistra della barra degli indirizzi.</li><li>Tocca Modifica Impostazioni del sito.</li><li>Controlla Notifiche.</li><li>Aggiorna la pagina.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Tocca il Menù dalla barra in basso.</li><li>Tocca l\'icona Impostazioni, dopo seleziona Impostazioni Notifiche e dopo Notifiche del sito.</li><li>Trova l\'URL di questo sito e tocca Cancella.</li><li>aggiorna la pagina e attiva le notifiche ancora una volta.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>A destra della barra degli indirizzi, Tocca Menù (tre punti).</li><li>Tocca Impostazioni, dopo selezione Avanzate, dopo selezione Notifiche Web.</li><li>Trova l\'URL di questo sito e attiva o disattiva l\'opzione.</li><li>Aggiorna la pagina.</li></ol>',

	'BROWSER_NOTIFICATIONS_POPUP_TITLE'	=> 'Browser notifications',
	'BROWSER_NOTIFICATIONS_POPUP_TEXT'	=> 'This board allows you to receive notifications directly to your browser - even when it is closed. You will never miss anything important and you can always choose what type of notifications you receive or turn them all off. Do you want to opt-in now?<br><br><span style="display: block; text-align: center;"><a class="button1 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Yes, please</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button2 alert_close" style="cursor: pointer; float: none; margin-right: 0;">No</a></span>',
));
