<?php
abstract class Product
{
    protected string $name;

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
