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

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Activado</strong>. No se perderá ninguna noticia de este foro. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">¿Desactivar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Activado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">¿Desactivar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Desactivado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Haga click aquí para activar las notificaciones en el navegador</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Desactivado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">¿Activar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Desactivadas forzadamente</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">¿Cómo activarlas?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Desactivado</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">¿Cómo activarlas?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Notificaciones para este navegador',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Notificaciones en el navegador',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Ha ocurrido un error (probablemente un error de conexión mientras se estaba contactando con el servidor) durante la suscripción a las Notificaciones Web. Han sido desactivadas en este navegador. Por favor, compruebe su conexión a internet y pruebe de nuevo. Contacte con el administrador del foro si el problema persiste.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Ha ocurrido un error (probablemente un error de conexión mientras se estaba contactando con el servidor) durante la baja de las Notificaciones Web. Por favor, compruebe su conexión a internet y pruebe de nuevo. Contacte con el administrador del foro si el problema persiste.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Cómo activar las notificaciones en el navegador',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Haga click en la "i" con un círculo en la barra de direcciones.</li><li>Encuentre la la etiqueta "Notificaciones"</li><li>Haga click en la caja de selección donde pone "Bloquear"</li><li>En el desplegable seleccione "Permitir"</li><li>Actualice la página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Haga click en el icono del mundo a la izquierda de la barra de direcciones.</li><li>Encuentre la etiqueta "Notificaciones"</li><li>En la lista desplegable a la derecha de la etiqueta seleccione "Siempre permitir para este sitio"</li><li>Actualice la página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Haga click en el icono del candado a la izquierda de la barra de direcciones.</li><li>Encuentre la etiqueta "Notificaciones" bajo la cabecera "Permisos del sitio web".</li><li>Pulse el interruptor.</li><li>Actualice la página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>A la izquierda de la barra de direcciones, pulse Info (la "i" con un círculo).</li><li>Pulse sobre Preferencias > Notificaciones.</li><li>Seleccione Permitir.</li><li>Actualice esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>En la esquina inferior derecha, pulse sobre el logo de Opera, después en Preferencias.</li><li>Haga scroll hasta Preferencias de Privacidad y Localización.</li><li>Pulse sobre notificaciones, y después sobre Notificaciones de nuevo.</li><li>Seleccione Permitir.</li><li>Actualice esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Pulse sobre el icono del Panel de Control (candado) a la izquierda de la barra de direcciones.</li><li>Pulse sobre Editar Preferencias del Sitio.</li><li>Active Notificaciones.</li><li>Actualice esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Pulse Menú en el menú inferior.</li><li>Pulse preferencias, después en Preferencias de Notificaciones y finalmente en Notificaciones del Sitio.</li><li>Busque la URL de este sitio y pulse sobre Eliminar.</li><li>Actualice esta página y active las notificaciones una vez más.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>A la derecha de la barra de direcciones, pulse el Menú (tres puntos).</li><li>Pulse en Preferencias, después en Avanzado, finalmente en Notificaciones Web.</li><li>Busque la URL de este sitio y pulse el interruptor.</li><li>Actualice esta página.</li></ol>',

	'BROWSER_NOTIFICATIONS_POPUP_TITLE'	=> 'Browser notifications',
	'BROWSER_NOTIFICATIONS_POPUP_TEXT'	=> 'This board allows you to receive notifications directly to your browser - even when it is closed. You will never miss anything important and you can always choose what type of notifications you receive or turn them all off. Do you want to opt-in now?<br><br><span style="display: block; text-align: center;"><a class="button1 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Yes, please</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button2 alert_close" style="cursor: pointer; float: none; margin-right: 0;">No</a></span>',
));
