<?php
include "init.php";



$kosik = new Kosik();

$kosik->pridajPolozku(new Produkt("lavica", 100));
$kosik->pridajPolozku(new Produkt("okno", 100));
$kosik->pridajPolozku(new Produkt("dvere", 100));
$kosik->pridajPolozku(new Elektronika("lampa", 250, 8));
$kosik->pridajPolozku(new Potravina("paradajky", 50, "14. 02. 2026"));

$platba = new Dobierka();
$kosik->zaplatit($platba);

//$kosik->vypisKosik();
//echo $kosik->celkovaSuma();
