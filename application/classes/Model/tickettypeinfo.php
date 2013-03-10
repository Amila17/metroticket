<?php

class Model_TicketTypeInfo extends Redbean
{
	public function addTicketType($name, $price)
	{	
		$ticketType = R::dispense('tickettype');
		$ticketType->name = $name;
		$ticketType->price = $price;
		
		R::store($ticketType);
	}

    public function editTicketType($ticketName, $ticketPrice)
    {
        $ticketType = $this->findTicketType($ticketName);
        $amndTicket = R::load('tickettype', $ticketType->id);
        $amndTicket->price = $ticketPrice;

        R::store($amndTicket);
    }

	public function removeTicketType($ticketName)
	{
        $ticketType = $this->findTicketType($ticketName);
        $delTicket = R::load('tickettype', $ticketType->id);
        R::trash($delTicket);
	}

    public function findTicketType($ticketName)
    {
        $ticketType = R::findOne('tickettype', ' name = ? ',array($ticketName));
        return $ticketType;
    }

	public function getTicketTypes()
	{
		$ticketType = R::getAll('select * from tickettype');
		return $ticketType;
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