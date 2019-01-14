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

namespace senky\pushnotifications\notification;

class user_loader
{
	protected $db;
	protected $users_table;
	protected $queue = [];
	protected $users = [];
	public function __construct(\phpbb\db\driver\driver_interface $db, $users_table)
	{
		$this->db = $db;
		$this->users_table = $users_table;
	}

	public function add_user($user_id)
	{
		$user_id = (int) $user_id;

		if (!empty($this->users[$user_id]) || in_array($user_id, $this->queue))
		{
			return;
		}

		$this->queue[] = $user_id;
	}

	public function get_user_auth($user_id)
	{
		$this->add_user($user_id);
		$this->process_queue();

		$auth = new \phpbb\auth\auth;
		$auth->acl($this->users[$user_id]);
		return $auth;
	}

	protected function process_queue()
	{
		if (!empty($this->queue))
		{
			$sql = 'SELECT user_id, user_type, user_permissions
				FROM ' . $this->users_table . '
				WHERE ' . $this->db->sql_in_set('user_id', $this->queue);
			$result = $this->db->sql_query($sql);
			while ($row = $this->db->sql_fetchrow($result))
			{
				$row['user_id'] = (int) $row['user_id'];

				$this->users[$row['user_id']] = [
					'user_id'			=> $row['user_id'],
					'user_type'			=> $row['user_type'],
					'user_permissions'	=> $row['user_permissions'],
				];
				unset($this->queue[$row['user_id']]);
			}
		}
	}
}
