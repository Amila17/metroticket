<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Kotwig
{
	public function action_index()
	{
/* 		$this->template->content = View::factory('user/info')
		->bind('user', $user); */
		
/* 		$user = Auth::instance()->get_user();
		
		if(!$user)
		{
			Request::current()->redirect('auth/index');
		} */
	}
	public function action_addUser()
	{
		$userName = $this->request->post('inputName');
		$userEmail = $this->request->post('inputEmail');
		$userPassword = $this->request->post('inputPassword');
		
		$modelvar = new Model_MetroUser();
		$modelvar->addUser($userName, $userEmail, $userPassword);
		
		$this->template->set_filename('auth/index'); 
	}
	
	public function action_removeUser()
	{
		
	}
	
	public function action_editUser()
	{
		
	}
	
	public function action_getUserHistory()
	{
	
	}
}
