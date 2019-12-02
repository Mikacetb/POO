<?php

require_once 'Vehicule.php';
class Truck extends Vehicule
{
    const ALLOWED_ENERGIES = [
        ‘fuel’,
        'electric',
    ]

    private $energy;
    private $loadLevel;
    private $stockCapacity;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $loadLevel = 0;
    $this->stockCapacity = $stockCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setLoadLevel(int $loadLevel): void
    {
        $this->loadLevel = $loadLevel;
    }
    public function getLoadLevel(): string
    {
        return $this->loadlevel;
    }

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }    
    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }
    public function isFilled(): string
    {
        $sentence = "";
        if ($loadLevel===$stockCapacity){
            $sentence = "full";
        }
        else{
            $sentence = "in filling";
        } 
        return $sentence;
    }
}
?>