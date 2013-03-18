<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Kotwig
{
    public function after()
    {
        $authManager = new Manager_AuthManager();
        $this->template->userEmail = $authManager->getSessionUserEmail();

        parent::after();
    }
}
