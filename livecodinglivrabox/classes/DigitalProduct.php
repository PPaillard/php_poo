<?php
class DigitalProduct extends Product{
    
    public function getDeliveryMethod():string {
        return "Lien de telechargement : http://blabla.fr";
    }

    public function getDeliveryDetails(): string
    {
        return "Lien envoyé par email";
    }
}