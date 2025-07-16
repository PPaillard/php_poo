<?php
class PhysicalProduct extends Product {

    public function getDeliveryMethod():string {
        return "Expedition par colis";
    }

    public function getDeliveryDetails(): string
    {
        return "Colissimo sous 3 jours";
    }
}