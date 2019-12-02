<?php

namespace App;
abstract class HighWay
{
    protected $currentVehicule = [];
    protected $nbLane;
    protected $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed= $maxSpeed;
    }
// fonction abstarite addVehicule

    abstract function addVehicule($vehiculeSentByUser);

// getter et setter currentVehicule
    public function getCurrentVehicule()
    {
        return $this->currentVehicule;
    }

    public function setCurrentVehicule(array $currentVehiculeSetByUser)
    {
            $this->currentVehicule = $currentVehiculeSetByUser;
    }

// getter et setter nbLane
    public function getNbLane(): int
    {
        return $this->nblane;
    }

    public function setNbLane(int $nbLaneSetByUser): void
    {
        $this->nbLane = $nbLaneSetByUser;
    }

// getter et setter maxSpeed
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeedSetByUser): void
    {
        $this->maxSpeed = $maxSpeedSetByUser;
    }
}