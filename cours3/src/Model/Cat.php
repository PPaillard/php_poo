<?php

namespace App\Model;

//require_once "Animal.php";

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Miaw";
    }
}
