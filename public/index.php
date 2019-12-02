<?php

use App\Speedometer;

require_once '../vendor/autoload.php';

echo Speedometer::convertKmToMiles(10);
echo Speedometer::convertKmToKm(10);

$A10 = new App\MotorWay(4,130);
$Boulevard = new App\ResidentialWay(2,50);
$rueDeBordeaux = new App\PedestrianWay(1,10);

$ferrari= new App\Car('red',4,2,40,'gasoline',80);
$btween= new App\Bicycle('blue',1);
$element= new App\Skate('wood',1);

var_dump($Boulevard);
$Boulevard->addVehicule($ferrari);
var_dump($Boulevard);
$Boulevard->addVehicule($element);

?>