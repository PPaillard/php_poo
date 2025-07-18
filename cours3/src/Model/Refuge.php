<?php

namespace App\Model;

use App\Exception\AlreadyAdoptedException;
use App\Exception\CannotBeAdoptedException;
use App\Exception\UnavailableAnimalException;
use App\Interface\AdoptableInterface;
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
            $className = $animal::class;
            echo $className . " fait le bruit : " . $animal->makeSound() . "<br>";
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

    public function adopt(Adopter $adopter, Animal $animal): void
    {
        // Si l'animal est déjà adopté, erreur
        if ($animal->getIsAdopted()) {
            throw new AlreadyAdoptedException("L'animal est déjà adopté.");
        }
        // on verifie que l'animal est dans le refuge
        if (!$this->isAnimalAvailable($animal)) {
            throw new UnavailableAnimalException("L'animal n'est pas dispo dans ce refuge.");
        }
        // Si l'animal n'est pas une instance de la class Adoptable
        // OU Si l'animal EST de la class Adoptable MAIS qu'il n'est pas possible de l'adopter.
        if (!($animal instanceof AdoptableInterface) || !$animal->canBeAdopted()) {
            throw new CannotBeAdoptedException("Les conditions de l'animal " . $animal->getName() . " ne permettent pas de l'adopter.");
        }
        // Sinon on adopte
        $adopter->adoptAnimal($animal);
        $animal->setIsAdopted(true);
    }

    // Comportement metier supplémentaire
    // Renvoit si un animal est dispo dans le refuge
    private function isAnimalAvailable(Animal $animal): bool
    {
        return in_array($animal, $this->animals);
    }
}
