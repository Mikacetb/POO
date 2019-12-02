<?php 

namespace App;
final class PedestrianWay extends HighWay
{
    private $nbLane=1;
    private $maxSpeed=10;

    public function addVehicule($vehiculeSentByUser)
    {
        if (
            $vehiculeSentByUser instanceof Bike ||
            $vehiculeSentByUser instanceof Skate
            )
            {
                $this->currentVehicule[] = $vehiculeSentByUser;
            }
    }
}