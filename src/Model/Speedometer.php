<?php

namespace App;

class Speedometer
{
    const CONVERT_KM = 0.621371;
    const CONVERT_MILES = 1.60934;

    public static function convertKmToMiles(int $distKm){
        $valeur = self::CONVERT_KM;
        $nbMiles = $distKm * $valeur;
        return $nbMiles;
    }

    public static function convertKmToKm(int $distMiles){
        $nbKm = $distMiles*(self::CONVERT_MILES);
        return $nbKm;
    }
}