<?php

namespace App;

class Car extends Vehicule implements LightableInterface
{
    private $color;
    private $nbWheels;
    private $nbSeats;
    private $currentSpeed;
    private $gasType;
    private $gasLevel;


    public function __construct(string $color, $nbWheels, $nbSeats, $currentSpeed, $gasType, $gasLevel)
    {
        $this->setColor($color);
        $this->nbWheels=4;
        $this->nbSeats=2;
        $this->currentSpeed=0;
        $this->gasType='gasoline';
        $this->$gasLevel=100;
    }

    public function getGasType(): string
    {
        return $this->gasType;
    }

    public function setGasType (string $gasType)
    {
        $this->color = $gasType;
        return $this;
    }

    public function getGasLevel(): int
    {
        return $this->gasLevel;
    }

    public function setGasLevel (int $gasLevel)
    {
        $this->color = $gasLevel;
        return $this;
    }

    public function switchON() :bool {
        return $this->true;
    }
    public function switchOff() :bool {
        return $this->false;
    }

}

?>