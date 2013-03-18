<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
    public function action_index()
    {
        /* 		$this->template->content = View::factory('user/info')
                ->bind('user', $user); */

        /* 		$user = Auth::instance()->get_user();

                if(!$user)
                {
                    Request::current()->redirect('auth/index');
                } */
    }

    public function action_removeCartItem()
    {
        $cartItemId = $this->request->post('cartItemId');

        //echo('cartItemId'.$cartItemId);

        $modelCartItem = new Model_CartItemInfo();
        $modelCartItem->removeItem($cartItemId);

        $this->redirect('cart/index');
    }

    public function action_purchaseCartItems()
    {
        $cartItems = $this->request->post('itemList');
        print_r($cartItems);
        $cartIds = explode("_", $cartItems);
        $modelCartItems = new Model_CartItemInfo();

        for($i = 0; $i<count($cartIds)-1; $i++)
            $modelCartItems->purchaseItem($cartIds[$i]);

        //Need to redirect to print ticket page
        $authManager = new Manager_AuthManager();
        $authManager->addValueToSession('cartItemIds',$cartIds);
        $this->redirect('ticket/print');
    }

}