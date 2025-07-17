<?php

namespace App\Model;

use App\Interface\IdentifiableInterface;

class Cat extends Animal implements IdentifiableInterface
{
    protected string $shipNumber;

    public function __construct(string $name, int $weight, int $age, string $shipNumber, bool $isAdopted = false)
    {
        parent::__construct($name, $weight, $age, $isAdopted);
        $this->shipNumber = $shipNumber;
    }

    public function makeSound(): string
    {
        return "Miaw";
    }

    public function getIdentifier(): string
    {
        return $this->shipNumber;
    }

    public function setShipNumber(string $shipNumber): void
    {
        $this->shipNumber = $shipNumber;
    }
}
