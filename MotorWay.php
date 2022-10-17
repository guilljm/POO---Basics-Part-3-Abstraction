<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';


final class MotorWay extends HighWay
{

    public function __construct()
    {
        parent::SetNbLane(4);
        parent::SetMaxSpeed(130);
    }

    public function addVehicle(Vehicle $vehicle)
    {

        if ($vehicle instanceof Car) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
