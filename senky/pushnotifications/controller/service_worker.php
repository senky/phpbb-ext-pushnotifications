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

namespace senky\pushnotifications\controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class service_worker
{
	protected $config;
	protected $helper;
	protected $user;
	protected $language;
	protected $auth;
	protected $root_path;
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\user $user, \phpbb\language\language $language, \phpbb\auth\auth $auth, $root_path)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->user = $user;
		$this->language = $language;
		$this->auth = $auth;
		$this->root_path = $root_path;
	}

	public function handle()
	{
		if (!$this->auth->acl_get('u_senky_pushnotifications'))
		{
			throw new \phpbb\exception\http_exception(403);
		}

		$content = file_get_contents($this->root_path . 'ext/senky/pushnotifications/styles/all/template/js/service_worker.min.js');
		$content = str_replace([
			'{{ SERVER_KEY }}',
			'{{ U_SUBSCRIBE }}',
			'{{ U_UNSUBSCRIBE }}',
			'{{ U_TEST }}',
		], [
			$this->config['senky_pushnotifications_public_key'],
			$this->helper->route('senky_pushnotifications_subscribe'),
			$this->helper->route('senky_pushnotifications_unsubscribe'),
			$this->helper->route('senky_pushnotifications_test'),
		], $content);

		$response = new Response($content);
		$response->headers->set('Content-Type', 'application/javascript');
		$response->setCharset('UTF-8');
		return $response;
	}

	public function test()
	{
		if (!$this->auth->acl_get('u_senky_pushnotifications'))
		{
			throw new \phpbb\exception\http_exception(403);
		}

		return new JsonResponse([
			'user_id'		=> $this->user->data['user_id'],
			'public_key'	=> $this->config['senky_pushnotifications_public_key'],
			'dir'			=> $this->language->lang('DIRECTION'),
			'lang'			=> $this->language->lang('USER_LANG'),
		]);
	}
}
