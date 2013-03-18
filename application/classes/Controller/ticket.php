<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ticket extends Controller_Base
{
    public function action_index()
    {
        $authManager = new Manager_AuthManager();
        if(!$authManager->isLoggedIn())
            $this->redirect('auth/index');
        else
        {
            $modelZone = new Model_ZoneInfo();
            $zones = $modelZone->getZones();

            $modelTicket = new Model_TicketTypeInfo();
            $tickets = $modelTicket->getTicketTypes();

            $this->template->ticketTypes = $tickets;
            $this->template->zoneTypes = $zones;

            if($authManager->getSessionUserRole() == 'admin')
                $this->template->set_filename('admin/index');
            elseif ($authManager->getSessionUserRole() == 'user')
                $this->template->set_filename('ticket/index');
        }
    }

    public function action_print()
    {
        $authManager = new Manager_AuthManager();
        $cartItemIds = $authManager->getValueFromSession('cartItemIds');

        $cartItems = array();
        $modelCartItems = new Model_CartItemInfo();

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
        $this->template->cartItems = $purchasedItems;
    }


    public function action_ticketMaintenance()
    {
        $ticketName = $this->request->post('txtTicketType');
        $ticketCmbName = $this->request->post('cmbTicketType');
        $ticketPrice = $this->request->post('txtTicketPrice');
        $ticketOperation = $this->request->post('txtAction');
        $modelTicket = new Model_TicketTypeInfo();

        if($ticketOperation == 'A')
            $modelTicket->addTicketType($ticketName,$ticketPrice);
        elseif($ticketOperation == 'R')
            $modelTicket->removeTicketType($ticketCmbName);
        elseif($ticketOperation == 'E')
            $modelTicket->editTicketType($ticketCmbName,$ticketPrice);

        $this->redirect('ticket/admin');
    }

    public function action_admin()
    {
        $modelTicket = new Model_TicketTypeInfo();
        $tickets = $modelTicket->getTicketTypes();

        $this->template->tickets = $tickets;
    }
}