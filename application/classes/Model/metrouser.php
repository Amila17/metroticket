<?php

class Model_MetroUser extends Redbean
{
	public function addUser($name, $email, $password)
	{
		$customer = R::dispense('customer');
		$customer->name = $name;
		$customer->email = $email;
		$customer->password = $password;
		
		$id = R::store($customer);
	}
	
	public function removeUser($id)
	{
		
	}
}