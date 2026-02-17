<?php
include "init.php";



$kosik = new Kosik();

$kosik->pridajPolozku(new Produkt("lavica", 100));
$kosik->pridajPolozku(new Produkt("okno", 100));
$kosik->pridajPolozku(new Produkt("dvere", 100));
$kosik->pridajPolozku(new Elektronika("lampa", 250, 8));
$kosik->pridajPolozku(new Potravina("paradajky", 50, "14. 02. 2026"));

//Visa, ApplePay, Dobierka
//$metoda = new Dobierka();

//$kosik->zaplatit($metoda);

//$kosik->vypisKosik();
//echo $kosik->celkovaSuma();

$conn = new Database();
$db = $conn->nadviazSpojenie();

if($db){

////////////////////////////////////////////////////////////////
    /*echo "Databaza je pripojena <br>";
    $novyProdukt = new Produkt("rohz", 1200);

    if($novyProdukt->uloz($db)){
        echo "Produkt bol ulozeny do databazy.";
    }else{
        echo "Pri ukladani zaznamu doslo ku chybe.";
    }*/

/////////////////////////////////////////////////////////////////
    /*$zoznamProduktov = Produkt::nacitajVsetky($db);

    foreach($zoznamProduktov as $produkt){
        echo $produkt->getInfo()."<br>";
    }*/
        
/////////////////////////////////////////////////////////////////

    /*$hladany = "vesiak";
    $hladanyProdukt = Produkt::najdiPodlaNazvu($db, $hladany);
   
    if($hladanyProdukt){
        echo $hladanyProdukt->getInfo();
   }else{
        echo "Hladany produkt nemame na sklade";
   }*/
/////////////////////////////////////////////////////////////////

$hladany = "rohz";
$rohoz = Produkt::najdipodlaNazvu($db, $hladany);

if($rohoz){
    $rohoz->aktualizovatCenu($db, 888);
    echo "Cena rohoze bola aktualizovana na 888 euro.";
}

if(Produkt::vymazat($db, "stolička")){
    echo "Produkt stolička bol vymazany";
}



  
}