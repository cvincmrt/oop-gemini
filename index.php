<?php
include "init.php";



$kosik = new Kosik();

$kosik->pridajPolozku(new Produkt("lavica", 100));
$kosik->pridajPolozku(new Produkt("okno", 100));
$kosik->pridajPolozku(new Produkt("dvere", 100));


$kosik->vypisKosik();
echo $kosik->celkovaSuma();
