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

namespace senky\pushnotifications\acp;

class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\senky\pushnotifications\acp\main_module',
			'title'		=> 'ACP_SENKY_PUSHNOTIFICATIONS_CAT',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS',
					'auth'	=> 'ext_senky/pushnotifications && acl_a_board',
					'cat'	=> array('ACP_SENKY_PUSHNOTIFICATIONS_CAT')
				),
			),
		);
	}
}
