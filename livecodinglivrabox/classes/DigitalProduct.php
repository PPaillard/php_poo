<?php
class DigitalProduct extends Product implements DeliveryInterface
{

    public function getDeliveryMethod(): string
    {
        return "Lien de telechargement : http://blabla.fr";
    }

    public function getDeliveryDetails(): string
    {
        return "Lien envoyé par email";
    }
}
