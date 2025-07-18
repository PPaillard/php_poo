<?php

namespace App\Model;

use App\Interface\IdentifiableInterface;

final class Refuge
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function makeAllSounds(): void
    {
        foreach ($this->animals as $animal) {
            echo "<br>" . $animal->makeSound();
        }
    }

    public function listIdentifiable(): void
    {
        foreach ($this->animals as $animal) {
            // On verifie que $animal est de la class (interface) IdentifiableInterface
            if ($animal instanceof IdentifiableInterface) {
                echo $animal->getName() . " est identifiable. Numéro : " . $animal->getIdentifier() . PHP_EOL;
            }
        }
    }
}
