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

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	protected $language;
	protected $request;
	protected $config;
	protected $db;
	protected $template;
	protected $push_subscriptions_table;
	protected $users_table;
	public function __construct()
	{
		global $phpbb_container;

		$this->language = $phpbb_container->get('language');
		$this->request = $phpbb_container->get('request');
		$this->config = $phpbb_container->get('config');
		$this->db = $phpbb_container->get('dbal.conn');
		$this->template = $phpbb_container->get('template');
		$this->push_subscriptions_table = $phpbb_container->getParameter('core.table_prefix') . 'push_subscriptions';
		$this->users_table = $phpbb_container->getParameter('tables.users');
	}

	public function main($id, $mode)
	{
		$this->tpl_name = 'settings';
		$this->page_title = $this->language->lang('ACP_SENKY_PUSHNOTIFICATIONS_TITLE');

		add_form_key('senky/pushnotifications');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('senky/pushnotifications'))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$this->config->set('senky_pushnotifications_popup', $this->request->variable('senky_pushnotifications_popup', 0));
			$this->config->set('senky_pushnotifications_popup_method', $this->request->variable('senky_pushnotifications_popup_method', ''));

			trigger_error($this->language->lang('SETTINGS_SAVED') . adm_back_link($this->u_action));
		}

		$sql = 'SELECT COUNT(user_id) as enabled_users
			FROM ' . $this->push_subscriptions_table . '
			GROUP BY user_id';
		$result = $this->db->sql_query($sql);
		$enabled_users = $this->db->sql_fetchfield('enabled_users');
		$this->db->sql_freeresult($result);

		$sql = 'SELECT COUNT(user_id) as total_users
			FROM ' . $this->users_table;
		$result = $this->db->sql_query($sql);
		$total_users = $this->db->sql_fetchfield('total_users');
		$this->db->sql_freeresult($result);

		$this->template->assign_vars([
			'U_ACTION'								=> $this->u_action,
			'SENKY_PUSHNOTIFICATIONS_POPUP'			=> $this->config['senky_pushnotifications_popup'],
			'SENKY_PUSHNOTIFICATIONS_POPUP_METHOD'	=> $this->config['senky_pushnotifications_popup_method'],
			'ENABLED_USERS'							=> (int) $enabled_users,
			'TOTAL_USERS'							=> $total_users,
			'ENABLED_PERCENTAGE'					=> round((100 / $total_users) * $enabled_users, 2),
		]);
	}
}
