<?php
class Elektronika extends Produkt{
    private int $zaruka;

    public function __construct(string $nazov, float $cena, int $zaruka){
        parent::__construct($nazov, $cena);
        $this->zaruka = $zaruka;
    }

    public function getInfo(): string{
        return parent::getInfo().", Zaruka: {$this->zaruka} mesiacov";
    }
  
}