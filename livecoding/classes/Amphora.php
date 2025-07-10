<?php
class Amphora {
    private int $capacity;
    private int $filling = 0;
    private string $label = "";

    public function __construct(int $_capacity)
    {
       $this->capacity =  $_capacity;
    }

    public function setLabel(string $_label):void {
        if(strlen($_label) <= 100) {
            $this->label = $_label;
        }
    }
    public function getLabel():string {
        return $this->label;
    }

    public function setCapacity(int $_capacity):void{
        $this->capacity = $_capacity;
    }

    public function getCapacity():int {
        return $this->capacity;
    }

    public function getFilling():int {
        return $this->filling;
    }

    // Je remplis l'amphore
    public function fill(int $volume):void {
        // je dois verifier que le volume ne va pas faire dépasser la capacité de l'amphore
        if($this->filling + $volume <= $this->capacity){
            $this->filling = $this->filling + $volume;
        }
    }

    // je vide l'amphore
    // Gestion d'erreur : je verifie que ce que je retire est bien disponible
    public function empty(int $volume):void {
        if($volume <= $this->filling){
            $this->filling = $this->filling - $volume;
        }
    }
}