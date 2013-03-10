<?php

class Model_CartItemInfo extends Redbean
{
    public function addItem($ticket, $quantity, $amount, $ticketDesc, $user)
    {
        $cartItem = R::dispense('cartitem');
        $cartItem->CartItemID = rand();
        $cartItem->Ticket = $ticket;
        $cartItem->Quantity = $quantity;
        $cartItem->Amount = $amount;
        $cartItem->TicketDesc = $ticketDesc;
        $cartItem->purhcased = false;

        R::store($cartItem);

        $cart = new Model_CartInfo();
        $cart->addCartItem($cartItem, $user);
    }
}