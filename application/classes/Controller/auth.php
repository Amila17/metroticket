<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base
{
	public function action_index()
	{
        $authManager = new Manager_AuthManager();

        if(!$authManager->isLoggedIn())
            $this->template->set_filename('auth/index');
        else
            $this->redirect('ticket/index');
	}
	
	public function action_userLogin()
	{
        $authManager = new Manager_AuthManager();

		$userEmail = $this->request->post('inputEmail');
		$userPassword = $this->request->post('inputPassword');
		
		$modelvar = new Model_MetroUser();
		$customer = $modelvar->getUser($userEmail);

		if($customer != null)
		{
			$storedPassword = $customer->password;			
			if($authManager->authenticateUser($userPassword, $storedPassword))
			{
                $authManager->setUserSession($customer->name,$customer->role,$customer->email);
				$this->template->loginError = '';

                if($customer->role == 'user')
				    $this->redirect('ticket/index');
                else
                    $this->redirect('admin/index');
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


    public function action_userRegister()
    {
        $this->redirect('user/index');
    }
	public function action_userLogout()
	{
		$authManager = new Manager_AuthManager();
        $authManager->destroyUserSession();
		$this->redirect('/');
	}	
}
