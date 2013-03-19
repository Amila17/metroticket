<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base
{
    //This class handles user requests
	public function action_index()
	{
	}

    //This method adds a user to the system.
	public function action_addUser()
	{
		$userName = $this->request->post('inputName');
		$userEmail = $this->request->post('inputEmail');
		$userPassword = $this->request->post('inputPassword');
        $role = 'user';
		
		$modelvar = new Model_MetroUser();
		$userExists = $modelvar->checkUserNameExists($userEmail);
		
		if($userExists == FALSE)
		{
			$modelvar->addUser($userName, $userEmail, crypt($userPassword), $role);
            $this->redirect('auth/index');
		}
		else
		{
            $this->redirect('user/index');
			$this->template->createError = 'Username Exists!';
		}
	}

    //This method adds a admin to the system.
    public function action_addAdmin()
    {
        $modelvar = new Model_MetroUser();
        $modelvar->addUser('Admin','Admin@Admin.com',crypt('Admin'), 'admin');

        $this->redirect('index/index');
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
