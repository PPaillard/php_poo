<?php
// require_once "./src/Model/Dog.php";
// require_once "./src/Model/Cat.php";
// require_once "./src/Model/Refuge.php";
// require_once "./src/Model/Animal.php";

spl_autoload_register(function ($classname) {
    // App\Model\Dog
    // src/Model/Dog.php
    // On remplace le App par src
    $path = str_replace("App", "src", $classname);
    // On convertit les antislash en slash
    $path = str_replace("\\", "/", $path);
    // On rajoute l'extension
    require_once $path . ".php";
});

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
