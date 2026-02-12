<?php
include "init.php";



$kosik = new Kosik();

$produkt = new Produkt("lavica", 100);
$produkt = new Produkt("okno", 500);
$produkt = new Produkt("dvere", 400);

$kosik->vypisKosik();
