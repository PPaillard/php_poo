<?php
class PhysicalProduct extends Product implements DeliveryInterface
{

    public function getDeliveryMethod(): string
    {
        return "Expedition par colis";
    }

    public function getDeliveryDetails(): string
    {
        return "Colissimo sous 3 jours";
    }
}
