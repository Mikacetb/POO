<?php

namespace App;

class Vehicule
{
    protected $color;
    protected $currentSpeed;
    protected $nbSeats;
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
}