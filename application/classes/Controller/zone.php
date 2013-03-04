<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Zone extends Controller_Kotwig
{
    public function action_index()
    {
    }

	public function action_zoneMaintenance()
	{
        $zoneTxtType = $this->request->post('txtZoneType');
        $zoneCmbType = $this->request->post('cmbZoneType');
        $zonePrice = $this->request->post('txtZonePrice');
        $zoneOp = $this->request->post('txtAction');
        $modelTicket = new Model_TicketInfo();
        if($zoneOp == 'A')
        {
            $modelTicket->addTicket($zoneTxtType,$zonePrice);
        }
        elseif($zoneOp == 'R')
        {
            $modelTicket->removeTicket($zoneCmbType);
        }
        elseif($zoneOp == 'E')
        {
            $modelTicket->editTicket($zoneCmbType,$zonePrice);
        }

        $this->redirect('ticket/admin');
	}
}
