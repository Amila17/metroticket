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
		//$this->template->content = View::factory('auth/index');
	}
	
	public function action_userLogin()
	{
		//$this->template->content = View::factory('auth/userLogin')
		//->bind('message', $message);
		
		if(HTTP_Request::POST == $this->request->method())
		{
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember'):FALSE;
			
			$user = Auth::instance()->login($this->request->post('username'), $this->request-post('password'), $remember);
			
			
			if($user)
			{
				Request::current()->redirect('index/index');
			}
			else
			{
				$message = 'Login Failed!';
			}
		}
	}
	
	public function action_userLogout()
	{
		Auth::instance()->logout();
		
		Request::current()->redirect('index/index');
	}	
}
