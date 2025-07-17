<?php
require_once "./autoload.php";

// use App\Model; // Importe toutes les classes situées dans le namespace Model
use App\Model\Dog;
use App\Model\Cat;
use App\Model\Bird;
use App\Model\Refuge;
use App\Model\Animal;
use App\Utils\AnimalFormatter;

// $monAnimal = new Animal("Je suis informe", 1000, 100); // INTERDIT

$medor = new Dog("Médor", 90, 10, "MED-699999999999");
$uricane = new Cat("Uricane", 3, 2, "URI-42-2023");
$piou = new Bird("PIOU", 3, 2);

$refuge = new Refuge();
$refuge->addAnimal($uricane);
$refuge->addAnimal($medor);
$refuge->addAnimal($piou);
$refuge->makeAllSounds();

echo "<br>";
echo "Nombre d'animaux ayant été créés : " . Animal::getCount();
echo "<br>";
AnimalFormatter::describe($uricane);

$refuge->listIdentifiable();
