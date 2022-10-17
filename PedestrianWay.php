<?php

require_once 'Bike.php';
require_once 'HighWay.php';
require_once 'Skateboard.php';


final class PedestrianWay extends HighWay
{

    public function __construct()
    {
        parent::SetNbLane(1);
        parent::SetMaxSpeed(10);
    }

    public function addVehicle(Vehicle $vehicle)
    {


        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
