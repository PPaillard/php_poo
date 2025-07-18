<?php
require_once "./classes/Book.php";
require_once "./classes/Amphora.php";
require_once "./classes/Boat.php";

$gargantua = new Book("Gargantua", "François Rabelais", 688);
echo $gargantua->getSummary();
echo PHP_EOL;

$vin = new Amphora(120);
$eau = new Amphora(10);

try {
    $vin->setLabel("Saint Emilion");
    $vin->fill(110);
} catch (ValidationException $validationException) {
    // Je traite l'erreur qui fait que le label est trop grand
    // J'affiche l'erreur à l'utilisateur.
    echo "Opération impossible. Message : " . $validationException->getMessage();
} catch (AmphoraException $amphoraException) {
    // Je dois traiter l'erreur qui fait que la personne n'a pas pu remplir la quantité qu'elle voulait dans l'Amphore.
    echo "Opération impossible. Message : " . $amphoraException->getMessage();
} finally {
    echo "Peut importe que ça se soit bien ou mal passé.";
}

$ptoleme = new Boat("Le Ptolémé");
$ptoleme->listCargo();
$ptoleme->load($vin);
$ptoleme->listCargo();
$ptoleme->load($eau);
$ptoleme->listCargo();
//$ptoleme->load("Toto");