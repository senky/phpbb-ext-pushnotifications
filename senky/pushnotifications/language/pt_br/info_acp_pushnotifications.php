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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Notificações do Navegador e Celular',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Configurações',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Configurações das Notificações do Navegador e Celular',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Seu fórum tem <strong>%d</strong> usuário com notificações do navegador ativadas em %d (%0.2f%%).',
		2	=> 'Seu fórum tem <strong>%d</strong> usuários com notificações do navegador ativadas em %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Exibir pop-up',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Defina como sim para exibir o pop-up para seus usuários depois que eles fizerem login, solicitando que eles ativem as notificações do navegador. Eles poderão rejeitar e ocultar pop-ups, mas é provável que você receba mais conversões do que qualquer outra. Por outro lado, esse método pode parecer invasivo demais para os usuários e eles podem rejeitar notificações de medo momentâneo. Assim, este método deve ser usado com cautela.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Veja diferentes abordagens</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Como incentivar os usuários a ativar as notificações do navegador',
	'POP_UP_ALTENRATIVES_P1'			=> 'Fazer com que os usuários cliquem nesse pop-up de navegador estranho não é uma tarefa fácil. Muitos usabilidade
											testes que lidam com este cenário resultaram na mesma recomendação: nunca perguntar aos usuários
											permissão antes que eles possam ver claramente vantagem disso. Por isso esta extensão
											oferece notificação do navegador em locais onde o usuário lida com notificações do fórum.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Mas é claramente compreensível que você queira que os usuários aproveitem esse recurso fantástico. Então, aqui estão algumas maneiras recomendadas de fazer isso de maneira não agressiva:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Postar um anúncio',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Se você souber que seus usuários estão lendo regularmente os anúncios, basta postar
											um novo informando o que são as notificações de navegador, qual é a vantagem
											e como ativa-las.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Envie MP para todos',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Nada é mais pessoal no phpBB do que uma mensagem privada. Não passará despercebido da
											visão do usuário por causa desse número de contagem de MP não lida no cabeçalho. E seus
											usuários merecem uma mensagem positiva do administrador de vez em quando, não é?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Use a extensão Anúncios do Fórum',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Anúncios
											do Fórum</a> é uma ótima extensão oficial que permite exibir uma mensagem
											em todas as páginas do fórum. Esta extensão e algumas palavras encorajadoras são suficientes para impulsionar
											o contador de uso.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Enviar Notificação em massa',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Nunca ouvi falar de tal opção? Minha nova extensão
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Notificação
											em massa</a> permite que você envie uma notificação única da diretoria. Então, enquanto seus usuários
											estão lendo a notificação, eles podem apenas clicar no botão Ativar logo abaixo.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Ainda não está confiante? Se as sugestões acima não ajudaram, você pode considerar o uso de pop-up
											opção para caçar os usuários restantes. O pop-up não será exibido para usuários que já tem as
											notificações ativadas ou desativadas, por isso não se preocupe com usuários já decididos.',
	'CLOSE'								=> 'Fechar',

	'POPUP_METHOD'					=> 'Método pop-up',
	'POPUP_METHOD_EXPLAIN'			=> 'Como você decidiu exibir um pop-up para incentivar os usuários a permitir notificações do navegador, você tem duas opções para exibi-lo. A primeira opção é menos invasiva e também dá ao usuário a chance de entender quais são as vantagens de ativar as notificações do navegador. A segunda opção é menos intrusiva, mas pode levar a muitas negações.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Exibir diretamente prompt.</strong>Seus usuários verão o prompt do navegador diretamente em todas as páginas visitadas até que confirmem ou neguem.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Peça uma vez após cada login.</strong> Seus usuários serão solicitados toda vez que fizerem login, caso desejem receber notificações do navegador. Confirmando, eles verão um prompt do navegador. Negando, eles nunca verão o pop-up novamente.',

	'SETTINGS_SAVED'	=> 'As configurações de notificações do navegador e celular foram salvas.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Método de notificação',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Você pode optar por enviar uma notificação por meio do navegador e da extensão de notificações móveis, em vez do método tradicional de notificação da diretoria.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Use as notificações do fórum',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Use notificações do navegador',
));
