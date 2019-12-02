<?php 
namespace App;
final class ResidentialWay extends HighWay 
{
    private $nbLane=2;
    private $maxSpeed=50;

    public function addVehicule($vehiculeSentByUser)
    {
        if ($vehiculeSentByUser instanceof Car OR $vehiculeSentByUser instanceof Bicycle OR $vehiculeSentByUser instanceof Skate) {
        $this->currentVehicule[] = $vehiculeSentByUser;
        }
    }
}