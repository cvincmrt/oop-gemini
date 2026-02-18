<?php

namespace App;
use PDO; 

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


    public static function nacitajVsetky($db){
        $produkty = [];

        $sql = "SELECT nazov, cena FROM produkty";

        $stmt = $db->query($sql);
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            $objekt = new Produkt($row["nazov"], $row["cena"]);
        
            $produkty[] = $objekt;
        }    
        
        return $produkty;
    }


    public static function najdiPodlaNazvu($db, $hladany){
        $sql = "SELECT nazov, cena FROM produkty WHERE nazov = :nazov";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(":nazov", $hladany);

        $stmt->execute();

        if($row = $stmt->FETCH(PDO::FETCH_ASSOC)){
           
            $objekt = new Produkt($row["nazov"], $row["cena"]);
            return $objekt;
        }else{
            return null;
        }
    }

    public function aktualizovatCenu($db, float $novaCena){
        $this->cena = $novaCena;

        $sql = "UPDATE produkty SET cena = :cena WHERE nazov = :nazov";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(":cena", $this->cena);
        $stmt->bindParam(":nazov", $this->nazov);

        return $stmt->execute();
    } 

    public static function vymazat($db, string $nazov){
        $sql = "DELETE FROM produkty WHERE nazov = :nazov";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(":nazov", $nazov);

         return $stmt->execute();
    }


}