<?php
require_once "./classes/Dog.php";
require_once "./classes/Cat.php";
require_once "./classes/Refuge.php";

$medor = new Dog("Médor", 90, 10);
$uricane = new Cat("Uricane", 3, 2);

$refuge = new Refuge();
$refuge->addAnimal($uricane);
$refuge->addAnimal($medor);
$refuge->makeAllSounds();
