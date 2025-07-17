<?php
require_once "./autoload.php";

// use App\Model; // Importe toutes les classes situées dans le namespace Model
use App\Model\Dog;
use App\Model\Cat;
use App\Model\Refuge;
use App\Model\Animal;
use App\Utils\AnimalFormatter;

$medor = new Dog("Médor", 90, 10);
$uricane = new Cat("Uricane", 3, 2);

$refuge = new Refuge();
$refuge->addAnimal($uricane);
$refuge->addAnimal($medor);
$refuge->makeAllSounds();

echo "<br>";
echo "Nombre d'animaux ayant été créés : " . Animal::getCount();
echo "<br>";
AnimalFormatter::describe($uricane);
