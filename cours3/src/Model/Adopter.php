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
        // on l'ajoute.
        $this->adoptedAnimals[] = $animal;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
