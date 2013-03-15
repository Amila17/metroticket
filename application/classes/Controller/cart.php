<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller_Kotwig
{
    public function action_index()
    {
        $this->template->cartItems =  $this->action_getCartItems();
    }


	public function action_addToCart()
	{
        $zoneType = $this->request->post('cmbxZoneType');
        $zoneType = explode(",",$zoneType);
        $ticketType = $this->request->post('cmbxTicketType');
        $ticketType = explode(",",$ticketType);
        $noOfTickets = $this->request->post('noOfTickets');
        $travelDate = $this->request->post('travelDate');
        $ticketPrice = $this->request->post('travelFare');
        $ticketDesc = 'Ticket Zone: '.$zoneType[0].' Ticket Type: '.$ticketType[0].' Travel Date: '.$travelDate;
        $ticketCode = new DateTime();

        $modelTicket = new Model_TicketInfo();
        $ticket = $modelTicket->createTicket($zoneType[0],$ticketType[0],$travelDate,$ticketCode->getTimestamp());

        $session = Session::instance();
        $userMail = $session->get('user_email');
        $modelUser = new Model_MetroUser();
        $user = $modelUser->getUser($userMail);
        $modelCartItem = new Model_CartItemInfo();
        $modelCartItem->addItem($ticket,$noOfTickets,$ticketPrice,$ticketDesc,$user);

        $this->redirect('ticket/index');
	}
	
	public function action_removeFromCart()
	{
		
	}
	
	public function action_getCartItems()
	{
		$modelUser = new Model_MetroUser();

        $session = Session::instance();
        $userMail = $session->get('user_email');

        $user = $modelUser->getUser($userMail);

        $modelCart = new Model_CartInfo();

        $cartItems = $modelCart->getCartItems($user->cartid);

        return $cartItems;
	}
}
