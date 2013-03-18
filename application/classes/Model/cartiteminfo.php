<?php

class Model_CartItemInfo extends Redbean
{
    public function addItem($ticket, $quantity, $amount, $ticketDesc, $user)
    {
        $cartItem = R::dispense('cartitem');
        $timeStamp = new DateTime();
        $cartItem->CartItemID = $timeStamp->getTimestamp();
        $cartItem->Ticket = $ticket;
        $cartItem->Quantity = $quantity;
        $cartItem->Amount = $amount;
        $cartItem->TicketDesc = $ticketDesc;
        $cartItem->purchased = false;

        $id = R::store($cartItem);
        $storedCartItem = R::load('cartitem',$id);

        $cart = new Model_CartInfo();
        $cart->addCartItem($storedCartItem, $user);
    }

    public function removeItem($cartItemID)
    {
        $cartItem = R::findOne('cartitem', ' CartItemID = :cartItemID ', array( ':cartItemID'=>$cartItemID ));

        R::trash($cartItem);
    }

    public function purchaseItem($CartItemID)
    {
        $cartItem = R::findOne('cartitem', ' CartItemID = :cartItemID ', array( ':cartItemID'=>$CartItemID ));

        $cartItem->purchased = true;

        R::store($cartItem);
    }

    public function getItems($CartItemID)
    {
        $cartItem = R::findOne('cartitem', ' CartItemID = :cartItemID ', array( ':cartItemID'=>$CartItemID ));

        return $cartItem;
    }





}