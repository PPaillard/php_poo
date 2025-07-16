<?php
class Animal
{
    protected string $name;
    protected int $weight;
    protected int $age;

    public function __construct(string $name, int $weight, int $age)
    {
        $this->name     = $name;
        $this->weight   = $weight;
        $this->age      = $age;
    }

    public function makeSound(): string
    {
        return "Son inconnu";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
