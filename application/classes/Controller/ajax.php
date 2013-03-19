<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
    /*This controller is used for processing ajax requests*/

    public function action_index()
    {
    }

    //Method to remove cart items
    public function action_removeCartItem()
    {
        $cartItemId = $this->request->post('cartItemId');

        if(!is_null($cartItemId))
        {
            try
            {
                $modelCartItem = new Model_CartItemInfo();
                $modelCartItem->removeItem($cartItemId);

                $this->redirect('cart/index');
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
    }

    //Method to purchase cart items.
    public function action_purchaseCartItems()
    {
        $cartItems = $this->request->post('itemList');

        if(!is_null($cartItems))
        {
            $cartIds = explode("_", $cartItems);
            $modelCartItems = new Model_CartItemInfo();
            try
            {
                for($i = 0; $i<count($cartIds)-1; $i++)
                    $modelCartItems->purchaseItem($cartIds[$i]);
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

        //Need to redirect to print ticket page
        $authManager = new Manager_AuthManager();
        $authManager->addValueToSession('cartItemIds',$cartIds);
        $this->redirect('ticket/print');
    }
}