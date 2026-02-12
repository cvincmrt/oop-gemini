<?php

class Kosik{
    private array $polozky = [];

    public function pridajPolozku(Produkt $produkt){
        $this->polozky[] = $produkt;
    }

    public function vypisKosik(){
        foreach($this->polozky as $produkt){
            echo "{$produkt->getInfo()}\n";
        }
    }
}