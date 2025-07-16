<?php
class Animal
{
    protected string $name;
    private int $weight;
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

    public function setWeight(int $weight):void {
        if($weight > 0){
            $this->weight = $weight;
        }
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}
