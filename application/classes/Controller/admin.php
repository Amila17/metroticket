<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Kotwig
{
    public function action_index()
    {

    }

    public function action_ticket()
    {
        $this->redirect('ticket/admin');
    }

    public function action_zone()
    {
        $this->redirect('zone/index');
    }

}
