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

class m2_permission extends \phpbb\db\migration\migration
{
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
			['permission.add', ['u_senky_pushnotifications']],
			['permission.permission_set', ['REGISTERED', 'u_senky_pushnotifications', 'group']],
		];
	}
}
