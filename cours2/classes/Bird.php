<?php
require_once "Animal.php";
class Bird extends Animal
{
    public function makeSound(): string
    {
        return "piou";
    }
}
