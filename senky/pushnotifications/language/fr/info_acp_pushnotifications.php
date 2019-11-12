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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Notifications du navigateur et mobile',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Options',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Options des notifications du navigateur et mobile',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> '<strong>%d</strong> utilisateur de votre forum a activé les notifications du navigateur sur un total de %d (%0.2f%%).',
		2	=> '<strong>%d</strong> utilisateurs de votre forum ont activé les notifications du navigateur sur un total de %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Affichage des fenêtres contextuelles',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Définissez sur Oui pour afficher la fenêtre contextuelle à vos utilisateurs après leur connexion, leur demandant d\'activer les notifications du navigateur. Ils pourront refuser et masquer les fenêtres contextuelles, mais il est probable que vous obtiendrez plus de conversions de cette façon que d’autres. Néanmoins, cette méthode peut sembler trop envahissante pour les utilisateurs et ceux-ci peuvent rejeter les notifications par crainte momentanée. Cette méthode doit donc être utilisée avec prudence.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Découvrir d\'autres méthodes</a>',


	'POP_UP_ALTERNATIVES_HEADER'		=> 'Comment encourager les utilisateurs à activer les notifications du navigateur',
	'POP_UP_ALTENRATIVES_P1'			=> 'Faire en sorte que les utilisateurs cliquent sur cette étrange fenêtre contextuelle 
											du navigateur n’est pas une tâche facile. De nombreux tests d\'utilisabilité portant 
											sur ce scénario ont abouti à la même recommandation: ne jamais demander la permission 
											aux utilisateurs avant de pouvoir en voir clairement les avantages. 
											C’est pourquoi cette extension offre une notification du navigateur dans les endroits 
											où l’utilisateur traite les notifications du forum.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Mais il est clairement compréhensible que vous souhaitiez que les utilisateurs profitent de cette fonctionnalité fantastique. 
											Donc, voici quelques façons recommandées de le faire de manière non agressive:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Publier une annonce',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Si vous savez que vos utilisateurs lisent régulièrement les annonces, il vous suffit 
											d\'en poster une nouvelle pour les informer de ce que sont les notifications du navigateur, 
											quels en sont les avantages et comment les activer.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Envoyer un message privé à tout le monde',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Dans phpBB, rien n’est plus personnel qu’un message privé. Il sera vite remarqué grâce à l\'îcone 
											dans l\'en-tête. Et vos utilisateurs méritent de temps en temps un message positif de la part de l’administrateur, non ?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Utiliser l\'extension Board Announcements',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board
											Announcements</a> est une excellente extension officielle vous permettant d\'afficher un message sur chaque page du forum. 
											Cette extension et quelques mots d\'encouragement suffisent à booster le compteur d\'utilisation.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Envoyer une notification de masse',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Vous n\'avez jamais entendu parlé de cette option ? Ma nouvelle extension
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass
											notification</a> vous permet d\'envoyer une notification à votre forum. Quand vos utilisateurs
											vont lire la notification, ils seront succeptible de cliquer sur le bouton "Activer" juste en-dessous.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Toujours pas confiant ? Si les suggestions ci-dessus ne vous ont pas aidé, vous pouvez envisager d’utiliser 
											une option contextuelle pour rechercher les utilisateurs restants. Les fenêtres contextuelles ne seront pas 
											affichées pour les utilisateurs qui ont déjà activé ou désactivé les notifications. 
											Ne vous inquiétez donc pas des utilisateurs déjà décidés.',
	'CLOSE'								=> 'Fermer',

	'POPUP_METHOD'					=> 'Pop-up method',
	'POPUP_METHOD_EXPLAIN'			=> 'Since you have decided to display a pop-up to encourage users to allow browser notifications, here you have two options on how to display it. The first option is less invasive and also gives user a chance to understand what are the advantages of enabling browser notifications. The second option is less intrusive, but may lead to many denials.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Display directly prompt.</strong> Your users will see the browser prompt directly on all pages they visit until they confirm or deny it.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Ask once after every login.</strong> Your users will be asked once every time they log in whether they wish to receive browser notifications. Confirming, they will see a browser prompt. Denying, they will never see that pop-up again.',

	'SETTINGS_SAVED'	=> 'Les paramètres de notification du navigateur et du mobile ont été enregistrés.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Méthode de notification',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Vous pouvez choisir d’envoyer une notification via le navigateur et l’extension de notifications mobiles au lieu de la méthode classique de notification par le forum.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Utiliser les notifications du forum',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Utiliser les notifications du navigateur',
));
