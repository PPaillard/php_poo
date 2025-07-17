<?php

namespace App\Model;

use App\Interface\IdentifiableInterface;

class Dog extends Animal implements IdentifiableInterface
{
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
}
