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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Navegador',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Ligado</strong>. Você não perderá nenhuma novidade deste fórum. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Desativar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Ligado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Desativar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Desligado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Clique aqui para ativar as notificações de navegador</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Desligado</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Ativar?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Desativado forçadamente</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Como ativa-los?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Desativado</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Como ativar?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Notificações de navegador para este navegador',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Notificações de navegador',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Ocorreu um erro (possivelmente erro de conexão ao entrar em contato com o servidor) durante a inscrição das Notificações da Web. Eles foram desativados neste navegador. Por favor verifique sua conexão com a internet e tente novamente. Entre em contato com o administrador do fórum se o problema persistir.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Ocorreu um erro (possivelmente erro de conexão ao entrar em contato com o servidor) durante a remoção da inscrição nas Notificações da Web. Por favor verifique sua conexão com a internet e tente novamente. Entre em contato com o administrador do fórum se o problema persistir.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Como ativar as notificações de navegador',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Clique no ícone "i" circulado à esquerda da barra de endereço.</li><li>Encontre o marcador "Notificações"</li><li>Clique no botão "Bloquear" na caixa de seleção</li><li>Na lista suspensa, selecione "Permitir"</li><li>Atualize esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Clique no ícone do globo à esquerda da barra de endereço.</li><li>Encontre o marcador "Notificações"</li><li>Na lista suspensa à direita do marcador, selecione "Sempre permitir para este site"</li><li>Atualize esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Clique no ícone de cadeado à esquerda da barra de endereço.</li><li>Encontre o marcador "Notificações" no cabeçalho "Permissões do site".</li><li>Alterne o interruptor.</li><li>Atualize esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>À esquerda da barra de endereço, toque em Informações ("i" em círculo).</li><li>Toque em Configurações do site > Notificações.</li><li>Escolha Permitir.</li><li>Atualize esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>No canto inferior direito, toque no logotipo do Opera e depois em Configurações.</li><li>Role para baixo até Privacidade &gt; Configurações de localização.</li><li>Toque em Notificações e Notificações novamente.</li><li>Selecione Permitido.</li><li>Atualize esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Toque no ícone do Controle Central (cadeado), à esquerda da barra de endereço.</li><li>Toque em Editar configurações do site.</li><li>Verificar notificações.</li><li>Atualize esta página.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Toque em Menu na barra inferior.</li><li>Toque no ícone Configurações, depois em Configurações de notificação e, em seguida, em Notificações do site.</li><li>Encontre o URL deste site e toque em Limpar.</li><li>Atualize esta página e ative as notificações mais uma vez.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>À direita da barra de endereço, toque em Menu (três pontos).</li><li>Toque em Configurações, depois em Avançado e, em seguida, em Notificações da Web.</li><li>Encontre o URL deste site e ative a opção.</li><li>Atualize esta página.</li></ol>',
));
