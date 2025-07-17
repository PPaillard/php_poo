<?php

namespace App\Model;

//require_once "Animal.php";

class Cat extends Animal
{
    protected array $toys = [];

    public function __construct(string $name, int $weight, int $age, bool $isAdopted = false, array $toys = [])
    {
        // J'appelle le constructeur du parent.
        parent::__construct($name, $weight, $age, $isAdopted);
        $this->toys = $toys;
    }

    public function makeSound(): string
    {
        return "Miaw";
    }
}
