<?php

class Model_TicketInfo extends Redbean
{
	public function addTicket($name, $price)
	{	
		$ticket = R::dispense('ticket');
		$ticket->name = $name;
		$ticket->price = $price;
		
		$id = R::store($ticket);
	}

    public function editTicket($ticketName, $ticketPrice)
    {
        $ticket = $this->findTicket($ticketName);
        $amndTicket = R::load('ticket', $ticket->id);
        $amndTicket->price = $ticketPrice;

        R::store($amndTicket);
    }

	public function removeTicket($ticketName)
	{
        $ticket = $this->findTicket($ticketName);
        $delTicket = R::load('ticket', $ticket->id);
        R::trash($delTicket);
	}

    public function findTicket($ticketName)
    {
        $ticket = R::findOne('ticket', ' name = ? ',array($ticketName));
        return $ticket;
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