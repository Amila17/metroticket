<?php

class Model_ZoneInfo extends Redbean
{
	public function addZone($type, $price)
	{	
		$zone = R::dispense('zone');
		$zone->type = $type;
		$zone->price = $price;
		
		$id = R::store($zone);
	}
	
	public function removeZone($type)
	{
		$zone = $this->findZoneByType($type);

        R::trash($zone);
	}

    public function editZone($type)
    {
       //TODO: Put logic
    }

    public function findZoneByType($type)
    {
        $zone = R::findOne('zone', ' type = ? ', array($type));

        return $zone;
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