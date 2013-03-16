<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Kotwig
{
    public function after()
    {
        $session = Session::instance();
        $this->template->userEmail = $session->get('user_email');

        parent::after();
    }
}
