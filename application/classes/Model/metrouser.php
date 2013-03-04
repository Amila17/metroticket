<?php

class Model_MetroUser extends Redbean
{
	public function addUser($name, $email, $password, $role)
	{	
		$customer = R::dispense('customer');
		$customer->name = $name;
		$customer->email = $email;
		$customer->password = $password;
        $customer->role = $role;
		
		$id = R::store($customer);
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
}