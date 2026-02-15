<?php

interface SposobPlatby{
    public function zaplat(float $suma): void;
}

class Visa implements SposobPlatby{

    public function zaplat(float $suma): void
    {
       
    } 
}

class ApplePay implements SposobPlatby{

    public function zaplat(float $suma): void
    {
       
    } 
}

class Dobierka implements SposobPlatby{

    public function zaplat(float $suma): void
    {
       
    } 
}