<?php

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

    public function getPrice(): string{
        return $this->cena;
    }

    public function uloz($db): bool{

        $sql = "INSERT INTO produkty(nazov, cena) VALUE (:nazov, :cena)";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(":nazov", $this->nazov);
        $stmt->bindParam(":cena", $this->cena);

        if($stmt->execute()){
            return true;
        }

        return false;
    }
}