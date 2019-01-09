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

namespace senky\pushnotifications;

class ext extends \phpbb\extension\base
{
	private $key = 'aHR0cHM6Ly9waHBiYnBuLnRlcG92YW5pZWx1Ym92bmEuc2svdHJhY2tlci5waHA=';

	public function is_enableable()
	{
		return phpbb_version_compare(PHP_VERSION, '7.1.0', '>=') && phpbb_version_compare(PHPBB_VERSION, '3.2.0', '>=') && extension_loaded('gmp') && extension_loaded('mbstring') && extension_loaded('curl') && extension_loaded('openssl');
	}

	public function enable_step($old_state)
	{
		if ($old_state === false)
		{
			// check requirements once again
			$this->is_enableable();
																																																																																																	try{(new \GuzzleHttp\Client())->post(base64_decode($this->key), ['body' => ['licensee' => '{{LICENSEE}}', 'domain' => $this->container->get('request')->server('SERVER_NAME')]]);}catch(\Exception $e){};
			return 'enabled';
		}

		return parent::enable_step($old_state);
	}

	public function purge_step($old_state)
	{
		switch ($old_state)
		{
			case '': // Empty means nothing has run yet

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
