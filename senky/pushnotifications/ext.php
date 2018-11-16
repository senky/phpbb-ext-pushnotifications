<?php
/**
 *
 * Push Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace senky\pushnotifications;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		return phpbb_version_compare(PHP_VERSION, '5.6.0', '>=') && phpbb_version_compare(PHPBB_VERSION, '3.2.0', '>=') && extension_loaded('gmp') && extension_loaded('mbstring') && extension_loaded('curl') && extension_loaded('openssl');
	}

	function purge_step($old_state)
	{
		switch ($old_state)
		{
			case '': // Empty means nothing has run yet

				/** @var \phpbb\db\driver\driver_interface $db */
				$db = $this->container->get('dbal.conn');
				$sql = 'DELETE FROM ' . $this->container->getParameter('tables.user_notifications') . "
						WHERE method = 'senky.pushnotifications.notification.method.browser'";
				$db->sql_query($sql);

				return 'notifications';

			break;

			default:
				// Run parent purge step method
				return parent::purge_step($old_state);
			break;
		}
	}
}
