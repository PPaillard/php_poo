<?php

namespace App\Model;

final class Adopter
{
    private string $name;
    private array $adoptedAnimals = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function adoptAnimal(Animal $animal): void
    {
        // S'il a déjà été adopté, on sort
        if ($animal->getIsAdopted()) {
            return;
        }
        // Sinon, on l'ajoute.
        $this->adoptedAnimals[] = $animal;
        $animal->setIsAdopted(true);
    }
}
