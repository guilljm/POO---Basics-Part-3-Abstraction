<?php

require_once('Vehicle.php');

abstract class HighWay
{
    private array $currentVehicles = [];
    private int $nbLane;
    private int $maxSpeed;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(Vehicle $currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function SetNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function SetMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
