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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Navegador',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Activado</strong>. No te perderás ninguna noticia de este foro. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">¿Desactivar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Activado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">¿Desactivar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Desactivado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Haz click aquí para activar las notificaciones en el navegador</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Desactivado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">¿Activar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Desactivadas forzadamente</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">¿Cómo activarlas?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Desactivado</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">¿Cómo activarlas?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Notificaciones para este navegador',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Notificaciones en el navegador',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Ha ocurrido un error (probablemente un error de conexión mientras se estaba contactando con el servidor) durante la suscripción a las Notificaciones Web. Han sido desactivadas en este navegador. Por favor, comprueba tu conexión a internet y prueba de nuevo. Contacta con el administrador del foro si el problema persiste.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Ha ocurrido un error (probablemente un error de conexión mientras se estaba contactando con el servidor) durante la baja de las Notificaciones Web. Por favor, comprueba tu conexión a internet y prueba de nuevo. Contacta con el administrador del foro si el problema persiste.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Cómo activar las notificaciones en el navegador',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Haz click en la "i" con un círculo en la barra de direcciones.</li><li>Encuentra la la etiqueta "Notificaciones"</li><li>Haz click en la caja de selección donde pone "Bloquear"</li><li>En el desplegable selecciona "Permitir"</li><li>Actualiza la página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Haz click en el icono del mundo a la izquierda de la barra de direcciones.</li><li>Encuentra la etiqueta "Notificaciones"</li><li>En la lista desplegable a la derecha de la etiqueta selecciona "Siempre permitir para este sitio"</li><li>Actualiza la página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Haz click en el icono del candado a la izquierda de la barra de direcciones.</li><li>Encuentra la etiqueta "Notificaciones" bajo la cabecera "Permisos del sitio web".</li><li>Pulsa el interruptor.</li><li>Actualiza la página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>A la izquierda de la barra de direcciones, pulsa Info (la "i" con un círculo).</li><li>Pulsa sobre Preferencias > Notificaciones.</li><li>Selecciona Permitir.</li><li>Actualiza esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>En la esquina inferior derecha, pulsa sobre el logo de Opera, después en Preferencias.</li><li>Haz scroll hasta Preferencias de Privacidad y Localización.</li><li>Pulsa sobre notificaciones, y después sobre Notificaciones de nuevo.</li><li>Selecciona Permitir.</li><li>Actualiza esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Pulsa sobre el icono del Panel de Control (candado) a la izquierda de la barra de direcciones.</li><li>Pulsa sobre Editar Preferencias del Sitio.</li><li>Activa Notificaciones.</li><li>Actualiza esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Pulsa Menú en el menú inferior.</li><li>Pulsa preferencias, después en Preferencias de Notificaciones y finalmente en Notificaciones del Sitio.</li><li>Busca la URL de este sitio y pulsa sobre Eliminar.</li><li>Actualiza esta página y activa las notificaciones una vez más.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>A la derecha de la barra de direcciones, pulsa el Menú (tres puntos).</li><li>Pulsa en Preferencias, después en Avanzado, finalmente en Notificaciones Web.</li><li>Busca la URL de este sitio y pulsa el interruptor.</li><li>Actualiza esta página.</li></ol>',
));
