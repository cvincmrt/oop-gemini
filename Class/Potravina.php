<?php

class Potravina extends Produkt{
    private string $datumSpotreby;

    public function __construct(string $nazov, float $cena, string $datumSpotreby){
        parent::__construct($nazov, $cena);
        $this->datumSpotreby = $datumSpotreby;
    }

    public function getInfo(): string{
        return parent::getInfo()."Datum spotreby: do {$this->datumSpotreby}";
    }

}