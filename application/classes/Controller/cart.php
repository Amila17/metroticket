<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller_Base
{
    //This class is used to handle user cart items.
    public function action_index()
    {
        $cartItems = $this->action_getCartItems();

        $this->template->cartItems =  $cartItems;

        if(!isset($cartItems))
        {
            $this->template->itemError = "Please log in to view your shopping cart!";
        }
    }

    //This method adds items to a cart.
    public function action_addToCart()
    {
        $validated = TRUE;
        $zoneType = $this->request->post('cmbxZoneType');
        $ticketType = $this->request->post('cmbxTicketType');
        $noOfTickets = $this->request->post('noOfTickets');
        $travelDate = $this->request->post('travelDate');
        $ticketPrice = $this->request->post('travelFare');

        if(is_null($zoneType))
            $validated = FALSE;

        if(is_null($ticketType))
            $validated = FALSE;

        if(is_null($noOfTickets))
            $validated = FALSE;

        if(is_null($travelDate))
            $validated = FALSE;

        if(is_null($ticketPrice))
            $validated = FALSE;

        if($validated == TRUE)
        {
            $zoneType = explode(",",$zoneType);
            $ticketType = explode(",",$ticketType);
            $ticketDesc = 'Ticket Zone: '.$zoneType[0].' Ticket Type: '.$ticketType[0].' Travel Date: '.$travelDate;
            $ticketCode = new DateTime();

            try
            {
                $modelTicket = new Model_TicketInfo();
                $ticket = $modelTicket->createTicket($zoneType[0],$ticketType[0],$travelDate,$ticketCode->getTimestamp());

                $authManager = new Manager_AuthManager();
                $userMail = $authManager->getSessionUserEmail();

                $modelUser = new Model_MetroUser();
                $user = $modelUser->getUser($userMail);

                $modelCartItem = new Model_CartItemInfo();
                $modelCartItem->addItem($ticket,$noOfTickets,$ticketPrice,$ticketDesc,$user);
            }
            catch(Exception $e)
            {
                $this->request->status   = 400;
                $this->request->response = View::factory('errors/400');
            }
        }
        else
        {
            $this->request->status   = 406;
            $this->request->response = View::factory('errors/406');
        }

        $this->redirect('ticket/index');
    }

    //This method get items belonging to a class.
    public function action_getCartItems()
    {
        $modelUser = new Model_MetroUser();
        $authManager = new Manager_AuthManager();
        $userMail = $authManager->getSessionUserEmail();

        $cartItems = null;
        $cartItemsFiltered = array();

        if(!is_null($userMail))
        {
            try
            {
                $user = $modelUser->getUser($userMail);
                $modelCart = new Model_CartInfo();

                $cartItems = $modelCart->getCartItems($user->cartid);


                if(!is_null($cartItems))
                {
                    foreach($cartItems as $cartItem)
                    {
                        if($cartItem->purchased == '0')
                            array_push($cartItemsFiltered, $cartItem);
                    }
                }
            }
            catch (Exception $e)
            {
                $this->request->status   = 400;
                $this->request->response = View::factory('errors/400');
            }
        }
        return $cartItemsFiltered;
    }
}
