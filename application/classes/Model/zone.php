<?php

class Model_Zone extends Redbean
{
	public function addZone($type, $price)
	{	
		$zone = R::dispense('zone');
		$zone->type = $name;
		$zone->price = $price;
		
		$id = R::store($zone);
	}
	
	public function removeZone($id)
	{
		
	}
	
	public function getZones()
	{
		$zones = R::getAll('select * from zone');
		return $zones;
	}
	
	/* public function checkUserNameExists($userEmail)
	{
		$userName = R::find('customer', ' email = ? ', array( $userEmail ));
		if(count($userName) == 0)
			return false;
		else
			return true;
	} */
}