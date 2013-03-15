<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ticket extends Controller_Kotwig
{
	public function action_index()
	{
        $session = Session::instance();
        $user = $session->get('user_name');
        $role = $session->get('user_role');
        if(!isset($user))
        {
            $this->redirect('auth/index');
        }
        else
        {
            $modelZone = new Model_ZoneInfo();
            $zones = $modelZone->getZones();

            $modelTicket = new Model_TicketTypeInfo();
            $tickets = $modelTicket->getTicketTypes();

            $this->template->ticketTypes = $tickets;
            $this->template->zoneTypes = $zones;

            if($role == 'admin')
                $this->template->set_filename('admin/index');
            elseif ($role == 'user')
                $this->template->set_filename('ticket/index');
        }
	}
	
	public function action_printTicket()
	{
		
	}
/*
	public function action_purchaseTicket()
	{
        $_SESSION = $_POST;
		$this->redirect('cart/addToCart');
	}*/
	
	public function action_ticketMaintenance()
	{
	    $ticketName = $this->request->post('txtTicketType');
        $ticketCmbName = $this->request->post('cmbTicketType');
        $ticketPrice = $this->request->post('txtTicketPrice');
        $ticketOperation = $this->request->post('txtAction');
        $modelTicket = new Model_TicketTypeInfo();
        if($ticketOperation == 'A')
        {
            $modelTicket->addTicketType($ticketName,$ticketPrice);
        }
        elseif($ticketOperation == 'R')
        {
            $modelTicket->removeTicketType($ticketCmbName);
        }
        elseif($ticketOperation == 'E')
        {
            $modelTicket->editTicketType($ticketCmbName,$ticketPrice);
        }

        $this->redirect('ticket/admin');
	}

    public function action_admin()
    {
        $modelTicket = new Model_TicketTypeInfo();
        $tickets = $modelTicket->getTicketTypes();

        $this->template->tickets = $tickets;
    }
}