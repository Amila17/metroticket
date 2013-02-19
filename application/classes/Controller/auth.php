<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Twig
{
	private $session;
	
	public function before()
	{
		parent::before();
		Session::$default = 'database';
		$this->session = Session::instance();
	}
	
	public function action_index()
	{
		$this->context->pageTitle = 'Login';
	}
	
	public function action_userLogin()
	{
		
	}
	
	public function action_userLogout()
	{
		
	}
	
}
