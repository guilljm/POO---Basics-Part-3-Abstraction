<?php

require_once("Vehicle.php");

class Car extends Vehicle
{
    private string $energy;
    private int $energylevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        parent::setNbWheels(4);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energylevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
