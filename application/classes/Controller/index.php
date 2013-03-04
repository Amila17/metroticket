<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Kotwig
{
/* 	public function before()
	{
		parent::before();
		Session::$default = 'database';
		$this->session = Session::instance();
	} */
	
	public function action_index()
	{/* 
		$modelvar = new Model_Index();
		$modelvar->addIndex(); Java . == Php ->*/
		
		//$this->template->set_filename('./index/index');
        //$this->redirect('index/index');
	}
	
	public function action_contact()
	{
		//$this->template->set_filename('./index/contact');
        //$this->redirect('/index/contact');
	}
	
	public function action_aboutUs()
	{
		//$this->template->set_filename('./index/aboutUs');
	}

} // End Welcome
