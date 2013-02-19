<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Kotwig
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
		//$this->template->set_filename('auth/index');
		//$this->template->pageTitle = 'Login';
	}
	
	public function action_userLogin()
	{
		
	}
	
	public function action_userLogout()
	{
		
	}
	
}
