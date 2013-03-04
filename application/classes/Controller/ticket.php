<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ticket extends Controller_Kotwig
{
	public function action_index()
	{
        $session = Session::instance();
        $user = $session->get('userObject');
        if(!isset($user))
        {
            //$this->template->set_filename('auth/index');
            $this->redirect('auth/index');
        }
        else
        {

            $modelZone = new Model_Zone();
            $zones = $modelZone->getZones();

            $this->template->zones = $zones;
            $this->template->ticketTypes = $this->action_getTicketData();

            $this->template->set_filename('ticket/index');
            //$this->redirect('ticket/index');
        }
	}
	
	public function action_getTicketData()
	{
		$modelTicket = new Model_Ticket();
		$tickets = $modelTicket->getTickets();
		
		return $tickets;
	}
	
	public function action_printTicket()
	{
		
	}
	
	public function action_purchaseTicket()
	{
		
	}
	
	public function action_ticketMaintenance()
	{
	    $ticketName = $this->request->post('txtTicketType');
        $ticketCmbName = $this->request->post('cmbTicketType');
        $ticketPrice = $this->request->post('txtTicketPrice');
        $ticketOperation = $this->request->post('txtAction');
        $modelTicket = new Model_TicketInfo();
        if($ticketOperation == 'A')
        {
            $modelTicket->addTicket($ticketName,$ticketPrice);
        }
        elseif($ticketOperation == 'R')
        {
            $modelTicket->removeTicket($ticketCmbName);
        }
        elseif($ticketOperation == 'E')
        {
            $modelTicket->editTicket($ticketCmbName,$ticketPrice);
        }

        $this->redirect('ticket/admin');
	}

    public function action_admin()
    {
        $modelTicket = new Model_TicketInfo();
        $tickets = $modelTicket->getTickets();

        $this->template->tickets = $tickets;
    }
}