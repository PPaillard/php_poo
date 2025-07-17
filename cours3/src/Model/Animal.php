<?php

namespace App\Model;

abstract class Animal
{
    private static int $count = 0;

    protected string $name;
    private int $weight;
    protected int $age;
    protected bool $isAdopted;

    public function __construct(string $name, int $weight, int $age, bool $isAdopted = false)
    {
        self::$count++;
        $this->name     = $name;
        $this->weight   = $weight;
        $this->age      = $age;
        $this->isAdopted = $isAdopted;
    }

    abstract public function makeSound(): string;

    public static function getCount(): int
    {
        return self::$count;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setWeight(int $weight): void
    {
        if ($weight > 0) {
            $this->weight = $weight;
        }
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getIsAdopted(): bool
    {
        return $this->isAdopted;
    }

    public function setIsAdopted(bool $isAdopted): void
    {
        $this->isAdopted = $isAdopted;
    }
}
