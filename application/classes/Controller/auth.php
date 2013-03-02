<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Kotwig
{	
	public function action_index()
	{
		//$this->template->set_filename('../auth/index');
	}
	
	public function action_userLogin()
	{		
		$userEmail = $this->request->post('inputEmail');
		$userPassword = $this->request->post('inputPassword');
		
		$modelvar = new Model_MetroUser();
		$customer = $modelvar->getUser($userEmail);
		if($customer != null)
		{
			$storedPassword = $customer->password;			
			if(crypt($userPassword, $storedPassword) == $storedPassword)
			{
				$session = Session::instance();
				$session->set('username', $userEmail);
				$this->template->loginError = '';
				$this->template->set_filename('ticket/index');
			}
			else
			{
				$this->template->set_filename('auth/index');
				$this->template->loginError = 'Login Failed!';
			}
		}
		else
		{
			$this->template->set_filename('auth/index');
			$this->template->loginError = 'Username does not exist!';
		}

		
	}
	
	public function action_userLogout()
	{
		$session = Session::instance();
		$session->delete('username');
		$this->template->set_filename('index/index');
	}	
}
