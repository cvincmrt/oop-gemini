<?php
interface SposobPlatby{
    public function zaplat(float $suma): void;
}



class Produkt{
    private string $nazov;
    private float $cena;

    public function __construct($nazov, $cena){
        $this->nazov = $nazov;
        $this->cena = $cena;
    }

    public function getInfo(): string{
        return "Produkt: {$this->nazov}, Cena: {$this->cena} Euro.";
    }

    public function getPrice(): float{
        return "$this->cena";
    }
}