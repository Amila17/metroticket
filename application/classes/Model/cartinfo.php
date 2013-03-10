<?php

class Model_CartInfo extends RedBean
{
    public function createCart()
    {
        $cartObj = R::dispense('cart');
        $cartObj->cartuid = rand();
       // $cart->createtime = new DateTime();

        $id = R::store($cartObj);

        return $this->getCart($id);
    }

     public function addCartItem($cartItemInfo, $user)
     {
         $cartarray = $user->cart;

         $cart = R::load('cart',$cartarray[0]->id);

         if($cart->cartitem == null)
         {
            $cart->cartitem = array($cartItemInfo);
            $cart->purchased = false;
         }
         else
         {
             $cart->cartitem[] = $cartItemInfo;
         }

     }

    public function getCart($id)
    {
        return $cart = R::load('cart',$id);
    }



}