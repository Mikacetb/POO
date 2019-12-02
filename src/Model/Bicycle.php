<?php

namespace App;

class Bicycle extends Vehicule implements LightableInterface
{
    protected $color;
    protected $nbSeats;

    public function switchON() :bool {
        if ($this->currentSpeed>10){
            return $this->true;
        }
        else{ 
            return $this->false;
        }
    }
    public function switchOff() :bool {
        return $this->false;
    }

}
?>