<?php

class Kosik{
    private array $polozky = [];

    public function pridajPolozku(Produkt $produkt){
        $this->polozky[] = $produkt;
    }

    public function vypisKosik(){
        foreach($this->polozky as $produkt){
            echo "{$produkt->getInfo()}<br>";
        }
    }

    public function celkovaSuma(): float{
        $suma = 0;
        foreach($this->polozky as $produkt){
            $suma += $produkt->getPrice();
        }
        return $suma;
    }

    public function zaplatit(SposobPlatby $metoda){
        $suma = $this->celkovaSuma(); 
        $metoda->zaplat($suma);
    }
}