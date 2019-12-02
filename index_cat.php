<?php
//nouveaux cats et collier
require 'Cat.php';
require 'Collar.php';
use Animals\Cat;
use Animals\Collar;
$collar = new Collar(35, 'black');
$stevens = new Cat('Stevens', 'brown');
$aracte = new Cat('Aracte', 'white', $collar);

$stevens->setImage('https://www.photos-de-chat.fr/wp-content/uploads/2019/03/le-chat-source-de-bienfaits-pour-votre-sante-1.jpg');
$aracte->setImage('https://static.wamiz.fr/images/articles/facebook/article/eduquer-un-chat-fb-59ad52663bd71.jpg');

$stevens->setTiredness(0);
$aracte->setTiredness(0);

while ($stevens->isTired()===false)
{
$stevens->walk();
}
while ($aracte->isTired()===false)
{
$aracte->walk();
}

if ($stevens->isTired===true)
{
    $stevens->rest();
}
if ($aracte->isTired===true)
{
    $aracte->rest();
}

if ($tiredness<= self ::TIREDNESS_MAX)
{
    $this->tiredness=$tiredness; 
}
return $this;
?>