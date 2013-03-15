<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Kotwig
{	
	public function action_index()
	{
        $session = Session::instance();
        $user = $session->get('user_name');
        if(!isset($user))
        {
            $this->template->set_filename('auth/index');
            //$this->redirect('auth/index');
        }
        else
        {
            $this->redirect('ticket/index');
        }

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
				$session->set('user_name', $customer->name);
                $session->set('user_email', $customer->email);
                $session->set('user_role', $customer->role);
				$this->template->loginError = '';
                if($customer->role == 'user')
				    $this->redirect('ticket/index');//$this->template->set_filename('ticket/index');
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
		$session = Session::instance();
		$session->delete('user_name');
        $session->delete('user_email');
        $session->delete('user_role');
		$this->redirect('/');
	}	
}
