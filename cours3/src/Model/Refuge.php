<?php

namespace App\Model;

//require_once "Animal.php";

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
}
