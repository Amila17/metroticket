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
	{
		$this->template->pageTitle = 'Home';
/* 
		$modelvar = new Model_Index();
		$modelvar->addIndex(); */
	}

} // End Welcome
