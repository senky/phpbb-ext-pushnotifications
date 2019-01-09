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

namespace senky\pushnotifications\migrations;

class m3_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . $this->table_prefix . "modules
			WHERE module_class = 'acp'
				AND module_langname = 'ACP_SENKY_PUSHNOTIFICATIONS_CAT'";
		$result = $this->db->sql_query($sql);
		$module_id = (int) $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id;
	}

	static public function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v320\v320',
			'\senky\pushnotifications\migrations\m1_schema',
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['senky_pushnotifications_popup', 0]],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SENKY_PUSHNOTIFICATIONS_CAT'
			]],
			['module.add', [
				'acp',
				'ACP_SENKY_PUSHNOTIFICATIONS_CAT',
				[
					'module_basename'	=> '\senky\pushnotifications\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
