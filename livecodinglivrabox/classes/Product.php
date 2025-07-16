<?php
class Product {
    protected string $name;

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    public function getDeliveryMethod():string{
        return "Inconnu";
    }

    public function getDeliveryDetails():string {
        return "Aucune information de livraison";
    }

    public function getName():string{
        return $this->name;
    }
}