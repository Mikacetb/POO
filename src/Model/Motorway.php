<?php 

namespace App;
final class MotorWay extends HighWay 
{
    private $nbLane=4;
    private $maxSpeed=130;

    public function addVehicule($vehiculeSentByUser)
    {
        if ($vehiculeSentByUser instanceof Car) {
        $this->currentVehicule[] = $vehiculeSentByUser;
        }
    }
}