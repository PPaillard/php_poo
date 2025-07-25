<?php

namespace App\Model;

use App\Interface\AdoptableInterface;
use App\Interface\IdentifiableInterface;

class Dog extends Animal implements IdentifiableInterface, AdoptableInterface
{
    private const TOO_OLD_2_BE_ADOPTED = 15;
    protected string $tatoo;

    public function __construct(string $name, int $weight, int $age, string $tatoo, bool $isAdopted = false)
    {
        parent::__construct($name, $weight, $age, $isAdopted);
        $this->tatoo = $tatoo;
    }
    public function makeSound(): string
    {
        return "waf";
    }

    public function getIdentifier(): string
    {
        return $this->tatoo;
    }

    public function canBeAdopted(): bool
    {
        return $this->getAge() < self::TOO_OLD_2_BE_ADOPTED;
    }
}
