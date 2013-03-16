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

        echo('cartItemId'.$cartItemId);

        $modelCartItem = new Model_CartItemInfo();
        $modelCartItem->removeItem($cartItemId);

        $this->redirect('cart/index');
    }

    public function action_purchase()
    {

    }

}