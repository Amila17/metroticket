<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ticket extends Controller_Kotwig
{
	public function action_index()
	{
		$session = Session::instance();
		$user = $session->get('username');
		if(!isset($user))
		{
			$this->template->set_filename('index/index');
		}
		else
		{
		
		$modelZone = new Model_Zone();
		$zones = $modelZone->getZones();
		
		$this->template->zones = $zones;
		$this->template->ticketTypes = $this->action_getTicketData();
		
		$this->template->set_filename('ticket/index');
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
		
	}
}