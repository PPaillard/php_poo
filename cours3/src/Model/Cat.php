<?php

namespace App\Model;

use App\Interface\AdoptableInterface;
use App\Interface\IdentifiableInterface;

class Cat extends Animal implements IdentifiableInterface, AdoptableInterface
{
    private const TOO_OLD_2_BE_ADOPTED = 10;
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

    public function canBeAdopted(): bool
    {
        return $this->getAge() < self::TOO_OLD_2_BE_ADOPTED;
    }
}
