<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller_Kotwig
{
	public function action_addToCart()
	{
        $zoneType = $this->request->post('cmbxZoneType');
        $ticketType = $this->request->post('cmbxTicketType');
        $noOfTickets = $this->request->post('noOfTickets');
        $travelDate = $this->request->post('travelDate');
        $ticketPrice = $this->request->post('travelFare');
        $ticketDesc = 'Ticket Zone: '.$zoneType.' Ticket Type: '.$ticketType.' Travel Date: '.$travelDate;

        $modelTicket = new Model_TicketInfo();
        $ticket = $modelTicket->createTicket($zoneType,$ticketType,$travelDate,rand());

        $session = Session::instance();
        $userMail = $session->get('user_name');

        $modelUser = new Model_MetroUser();
        $user = $modelUser->getUser($userMail);

        $modelCartItem = new Model_CartItemInfo();
        $modelCartItem->addItem($ticket,$noOfTickets,$ticketPrice,$ticketDesc,$user);

	}
	
	public function action_removeFromCart()
	{
		
	}
	
	public function action_getCartItems()
	{
		
	}
}
