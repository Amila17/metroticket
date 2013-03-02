<?php

class Model_Ticket extends Redbean
{
	public function addTicket($name, $price)
	{	
		$ticket = R::dispense('ticket');
		$ticket->name = $name;
		$ticket->price = $price;
		
		$id = R::store($ticket);
	}
	
	public function removeTicket($id)
	{
		
	}
	
	public function getTickets()
	{
		$ticket = R::getAll('select * from ticket');
		return $ticket;
	}
	
	/* public function checkUserNameExists($userEmail)
	{
		$userName = R::find('customer', ' email = ? ', array( $userEmail ));
		if(count($userName) == 0)
			return false;
		else
			return true;
	} */
}