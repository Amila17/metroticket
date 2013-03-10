<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Zone extends Controller_Kotwig
{
    public function action_index()
    {
        $modelZone = new Model_ZoneInfo();
        $zones = $modelZone->getZones();
        $this->template->zones = $zones;
    }

	public function action_zoneMaintenance()
	{
        $zoneTxtType = $this->request->post('txtZoneType');
        $zoneCmbType = $this->request->post('cmbZoneType');
        $zonePrice = $this->request->post('txtZonePrice');
        $zoneOp = $this->request->post('txtAction');
        $modelZone= new Model_ZoneInfo();
        if($zoneOp == "A")
        {
            $modelZone->addZone($zoneTxtType, $zonePrice);//addTicket($zoneTxtType,$zonePrice);
        }
        elseif($zoneOp == 'R')
        {
            $modelZone->removeZone($zoneCmbType);//removeTicket($zoneCmbType);
        }
        elseif($zoneOp == 'E')
        {
            $modelZone->editZone($zoneCmbType, $zonePrice);//editTicket($zoneCmbType,$zonePrice);
        }

        $this->redirect('zone/index');
	}
}
