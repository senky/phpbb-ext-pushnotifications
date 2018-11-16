<?php
/**
 *
 * Browser and Mobile Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Jakub Senko
 * @license Proprietary/All rights reserved
 *
 */

namespace senky\pushnotifications\migrations;

use Minishlink\WebPush\VAPID;

class m1_schema extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_schema()
	{
		return [
			'add_tables' => [
				$this->table_prefix . 'push_subscriptions' => [
					'COLUMNS'     => [
						'subscription_id' => ['UINT', null, 'auto_increment'],
						'endpoint'        => ['TEXT', ''],
						'push_key_auth'   => ['VCHAR', ''],
						'push_key_p256dh' => ['VCHAR', ''],
						'user_id'         => ['UINT', 0],
					],
					'PRIMARY_KEY' => 'subscription_id',
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_tables' => [
				$this->table_prefix . 'push_subscriptions',
			],
		];
	}

	public function update_data()
	{
		if (empty($this->config['senky_pushnotifications_public_key']) || empty($this->config['senky_pushnotifications_private_key']))
		{
			include_once($this->phpbb_root_path . 'ext/senky/pushnotifications/vendor/autoload.' . $this->php_ext);

			$VAPID_keys = $this->get_VAPID_keys();
			return [
				['config.add', ['senky_pushnotifications_private_key', $VAPID_keys['privateKey']]],
				['config.add', ['senky_pushnotifications_public_key', $VAPID_keys['publicKey']]],
			];
		}

		return [];
	}

	public function revert_data()
	{
		return [
			['config.remove', ['senky_pushnotifications_public_key']],
			['config.remove', ['senky_pushnotifications_private_key']],
		];
	}

	private function get_VAPID_keys()
	{
		static $VAPID_keys = null;

		if (is_null($VAPID_keys))
		{
			include_once($this->phpbb_root_path . 'ext/senky/pushnotifications/vendor/autoload.' . $this->php_ext);
			$VAPID_keys = VAPID::createVapidKeys(); // Should be created only once for the web app.
		}

		return $VAPID_keys;
	}
}
