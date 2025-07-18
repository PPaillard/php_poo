<?php
require_once "./autoload.php";

// use App\Model; // Importe toutes les classes situées dans le namespace Model
use App\Model\Dog;
use App\Model\Cat;
use App\Model\Bird;
use App\Model\Refuge;
use App\Exception\AlreadyAdoptedException;
use App\Exception\CannotBeAdoptedException;
use App\Exception\UnavailableAnimalException;
use App\Model\Adopter;

$medor = new Dog("Médor", 90, 10, "MED-699999999999");
$uricane = new Cat("Uricane", 3, 2, "URI-42-2023");
$nolan = new Cat("Nolan", 8, 11, "NOL-42-2017");
$piou = new Bird("PIOU", 3, 2);
$felix = new Bird("Felix", 7, 3);

$refuge = new Refuge();
$refuge->addAnimal($uricane);
$refuge->addAnimal($medor);
$refuge->addAnimal($piou);
$refuge->addAnimal($nolan);
$refuge->makeAllSounds();

$ethan = new Adopter("Ethan");
$clara = new Adopter("Clara");

try {
    $refuge->adopt($ethan, $uricane);
    // traitement, je félicite l'utilisateur, l'adoption s'est bien passée.
    // Toast pour prévenir l'utilisateur
    echo "Félicitation " . $ethan->getName() . PHP_EOL;
    $refuge->adopt($clara, $nolan);
    $refuge->adopt($clara, $uricane);
    // $refuge->adopt($ethan, $felix);
} catch (AlreadyAdoptedException $alreadyAdoptedException) {
    echo $alreadyAdoptedException->getMessage() . PHP_EOL;
} catch (UnavailableAnimalException $unavailableAnimalException) {
    // On affiche à l'utilisateur dans une div, ou un toast que l'animal n'est pas dispo dans le refuge.
    echo $unavailableAnimalException->getMessage() . PHP_EOL;
} catch (CannotBeAdoptedException $cannotBeAdoptedException) {
    echo $cannotBeAdoptedException->getMessage() . PHP_EOL;
}
