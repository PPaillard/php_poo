<?php

namespace App\Utils;

use App\Model\Animal;

class AnimalFormatter
{
    // Function qui me permettra de décrire un animal.
    public static function describe(Animal $animal): void
    {
        echo "Le nom de l'animal est : " . $animal->getName();
    }
    // Function qui me permet de transformer un Animal en JSON
    // Function qui me permet de transformer un Animal en Array.
}
