<?php

namespace App;
use PDO;

interface SposobPlatby{
    public function zaplat(float $suma): void;
}

class Visa implements SposobPlatby{

    public function zaplat(float $suma): void
    {
       echo "Platba Visa kartou bola uspesna. Stiahli sme $suma euro";
    } 
}

class ApplePay implements SposobPlatby{

    public function zaplat(float $suma): void
    {
        echo "Platba ApplePay bola uspesna. Stiahli sme $suma euro";
    } 
}

class Dobierka implements SposobPlatby{

    public function zaplat(float $suma): void
    {
        echo "Pripravte si prosim $suma euro pre kuriera.";
    } 
}