<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ticket extends Controller_Base
{
    //This class is used to handle ticket purchase requests and fill up the ticket purchase screen for the user.
    public function action_index()
    {
        $authManager = new Manager_AuthManager();
        if(!$authManager->isLoggedIn())
            $this->redirect('auth/index');
        else
        {
            try
            {
                $modelZone = new Model_ZoneInfo();
                $zones = $modelZone->getZones();

                $modelTicket = new Model_TicketTypeInfo();
                $tickets = $modelTicket->getTicketTypes();
            }
            catch(Exception $e)
            {
                $this->request->status   = 400;
                $this->request->response = View::factory('errors/400');
            }

            $this->template->ticketTypes = $tickets;
            $this->template->zoneTypes = $zones;

            if($authManager->getSessionUserRole() == 'admin')
                $this->template->set_filename('admin/index');
            elseif ($authManager->getSessionUserRole() == 'user')
                $this->template->set_filename('ticket/index');
        }
    }

    //This method is used to print the ticket for the user.
    public function action_print()
    {
        $authManager = new Manager_AuthManager();
        $cartItemIds = $authManager->getValueFromSession('cartItemIds');

        $cartItems = array();
        $modelCartItems = new Model_CartItemInfo();

        try
        {
            for($i = 0; $i<count($cartItemIds)-1; $i++)
                array_push($cartItems,$modelCartItems->getItems($cartItemIds[$i]));

            $purchasedItems = array();
            foreach($cartItems as $key => $cartItem)
            {
                $purchasedItems[$key]['traveldate'] = $cartItem->Ticket->traveldate;
                $purchasedItems[$key]['zone'] = $cartItem->Ticket->zone;
                $purchasedItems[$key]['tickettype'] = $cartItem->Ticket->tickettype;
                $purchasedItems[$key]['Amount'] = $cartItem->Amount;
            }
        }
        catch (Exception $e)
        {
            $this->request->status   = 400;
            $this->request->response = View::factory('errors/400');
        }
        $this->template->cartItems = $purchasedItems;
    }

    //This method is for the administrator to perform ticket maintenance.
    public function action_ticketMaintenance()
    {
        $validated = TRUE;
        $ticketName = $this->request->post('txtTicketType');
        $ticketCmbName = $this->request->post('cmbTicketType');
        $ticketPrice = $this->request->post('txtTicketPrice');
        $ticketOperation = $this->request->post('txtAction');
        $modelTicket = new Model_TicketTypeInfo();

        if(is_null($ticketName))
            $validated = FALSE;

        if(is_null($ticketCmbName))
            $validated = FALSE;

        if(is_null($ticketPrice))
            $validated = FALSE;

        if(is_null($ticketOperation))
            $validated = FALSE;

        if(is_null($modelTicket))
            $validated = FALSE;

        if($validated == TRUE)
        {
            try
            {
                if($ticketOperation == 'A')
                    $modelTicket->addTicketType($ticketName,$ticketPrice);
                elseif($ticketOperation == 'R')
                    $modelTicket->removeTicketType($ticketCmbName);
                elseif($ticketOperation == 'E')
                    $modelTicket->editTicketType($ticketCmbName,$ticketPrice);
            }
            catch (Exception $e)
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
        $this->redirect('ticket/admin');
    }

    //This is for the administrator to perform ticket administration.
    public function action_admin()
    {
        $modelTicket = new Model_TicketTypeInfo();
        $tickets = $modelTicket->getTicketTypes();

        $this->template->tickets = $tickets;
    }
}