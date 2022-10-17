<?php

require_once('Vehicle.php');

class Skateboard extends Vehicle
{
    public function __construct(string $color)
    {
        parent::__construct($color, 1);
        parent::setNbWheels(4);
    }
}
