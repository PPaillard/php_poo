<?php
require_once "./classes/Book.php";
require_once "./classes/Amphora.php";
require_once "./classes/Boat.php";

$gargantua = new Book("Gargantua", "François Rabelais", 688);
echo $gargantua->getSummary();
echo PHP_EOL;

$vin = new Amphora(120);
$eau = new Amphora(10);

$ptoleme = new Boat("Le Ptolémé");
$ptoleme->listCargo();
$ptoleme->load($vin);
$ptoleme->listCargo();
$ptoleme->load($eau);
$ptoleme->listCargo();