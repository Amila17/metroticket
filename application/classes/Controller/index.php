<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Kotwig
{
	private $session;
	
	public function before()
	{
		parent::before();
		Session::$default = 'database';
		$this->session = Session::instance();
	}
	
	public function action_index()
	{/* 
		$modelvar = new Model_Index();
		$modelvar->addIndex(); Java . == Php ->*/
	}
	
	public function action_contact()
	{
	}
	
	public function action_aboutUs()
	{
		
	}

} // End Welcome
