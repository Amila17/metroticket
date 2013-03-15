<?php

class Model_CartInfo extends RedBean
{
    public function createCart()
    {
        $cartObj = R::dispense('cart');
        $date = new DateTime();
        $cartObj->createtime = $date->getTimestamp();

        $id = R::store($cartObj);

        $storedCart = $this->getCart($id);
        return  $storedCart;
    }

     public function addCartItem($cartItemInfo, $user)
     {
         $cart = R::load('cart',$user->cartid);

         if(is_null($cart->ownCartItem))
         {
            $cart->ownCartItem = array($cartItemInfo);
         }
         else
         {
             $cart->ownCartItem[] = $cartItemInfo;
         }
         R::store($cart);
     }

    public function getCart($id)
    {
        $cart = R::load('cart',$id);
        return $cart;
    }

    public function getCartItems($cartId)
    {
        $cart = $this->getCart($cartId);

        $cartItems = $cart->ownCartItem;

        return $cartItems;
    }





}