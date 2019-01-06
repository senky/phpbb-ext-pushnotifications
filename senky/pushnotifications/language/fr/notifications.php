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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Navigateur',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>On</strong>. Vous ne manquerez aucune notification de ce forum. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Désactivez ?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>On</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Désactiver ?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Off</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Cliquez ici pour activer les notifications du navigateur</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Off</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Enable?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Désactivation forcée</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Comment les activer ?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Désactivées</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Comment les activer ?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Notification du navigateur',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Notifications',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Il y a eu une erreur (probablement une erreur de connexion au serveur) durant l\'activation des notifications web, ces dernières n\'ont pas été activé. Merci de vérifier votre connexion internet et réessayer. Si le problème persiste, veuillez contacter l\'administrateur du forum.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Il y a eu une erreur (probablement une erreur de connexion au serveur) durant la désactivation des notifcations web. Merci de vérifier votre connexion internet et réessayer.  Si le problème persiste, veuillez contacter l\'administrateur du forum.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Comment activer les notifications web ?',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Cliquez sur le "i" encerclé sur la gauche de votre barre d\'adresse.</li><li>Trouvez le paramètre "Notifications"</li><li>Cliquez sur "Bloquer"</li><li>Dans la liste déroulante, sélectionnez "Autoriser".</li><li>Rafraîchissez cette page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Cliquez sur l\'icone de globe sur la gauche de votre barre d\'adresse.</li><li>Trouvez le paramètre "Notifications"</li><li>Dans la liste déroulante sélectionnez l\'option "Toujours activer pour ce site".</li><li>Rafraîchissez cette page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Cliquez sur l\'icone de cadenas sur la gauche de votre barre d\'adresse.</li><li>Trouvez le paramètre "Notifications" dans la section "Permission du site internet".</li><li>Activez le sélecteur.</li><li>Rafraîchissez cette page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Sur la gauche de votre barre d\'adresse, cliquez sur Info (le "i" encerclé).</li><li>Cliquez sur Options du site > Notifications.</li><li>Sélectionnez "Autoriser".</li><li>Rafraîchissez cette page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Sur le coin supérieur droit, cliquez sur le logo Opera puis sur Options.</li><li>Défilez jusqu\'à Confidentialité &gt; géolocalisation.</li><li>Cliquez sur Notifications puis de nouveau sur Notifications.</li><li>Sélectionnez "Autoriser".</li><li>Rafraîchissez cette page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Sur la gauche de votre barre d\'adresse, cliquez sur l\'icone du Centre de Control (le cadena).</li><li>Cliquez sur Éditer les options du site.</li><li>Cochez Notifications.</li><li>Rafraîchissez cette page.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Cliquez sur Menu de la barre du bas.</li><li>Cliquez sur l\'icone Options, puis sur Options de Notification et enfin Notifications du site.</li><li>Trouvez l\'URL de ce site et cliquez sur Supprimer.</li><li>Rafraîchissez cette page et autoriser les notifications encore une fois.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Sur la droite de votre barre d\'adresse, cliquez sur Menu (les trois points).</li><li>Cliquez sur Options, puis Avancées, puis Notifications Web.</li><li>Trouver l\'URL de ce site et activer le sélecteur.</li><li>Rafraîchissez cette page.</li></ol>',
));
