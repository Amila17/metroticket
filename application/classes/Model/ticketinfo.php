<?php

class Model_TicketInfo extends Redbean
{
    public function createTicket($zoneType, $ticketType, $travelDate, $code)
    {
        $ticket = R::dispense('ticket');
        $ticket->zone = $zoneType;
        $ticket->tickettype = $ticketType;
        $ticket->traveldate = $travelDate;
        $ticket->code = $code;

        R::store($ticket);
        return $ticket;
    }
}