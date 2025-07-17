<?php
class Letter implements DeliveryInterface
{
    private string $adress;

    public function __construct($adress)
    {
        $this->adress = $adress;
    }

    public function getDeliveryDetails(): string
    {
        return "Lettre suivie sous 24H";
    }

    public function getDeliveryMethod(): string
    {
        return "Lettre à la main par le facteur.";
    }
}
