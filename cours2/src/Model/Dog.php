<?php

namespace App\Model;

//require_once "Animal.php";

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "waf";
    }
}
