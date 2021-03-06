<?php

class Model_MetroUser extends Redbean
{
	public function addUser($name, $email, $password, $role)
	{
        $modelCart = new Model_CartInfo();
        $cart = $modelCart->createCart();

		$customer = R::dispense('customer');
		$customer->name = $name;
		$customer->email = $email;
		$customer->password = $password;
        $customer->role = $role;
        $customer->cartid = $cart->id;
		R::store($customer);
	}
	
	public function removeUser($id)
	{
		
	}
	
	public function getUser($userEmail)
	{
		$customer = R::findOne('customer',' email = ? ', array( $userEmail ));
		return $customer;
	}
	
	public function checkUserNameExists($userEmail)
	{
		$userName = R::find('customer', ' email = ? ', array( $userEmail ));
		if(count($userName) == 0)
			return false;
		else
			return true;
	}

    public function getUserCartId($userEmail)
    {
        $customer = $this->getUser($userEmail);

        return $customer->cardid;
    }
}