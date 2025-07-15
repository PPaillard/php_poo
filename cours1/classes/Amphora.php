<?php
class Amphora {
    public const MAX_LABEL_LENGTH = 50;
    private int $capacity;
    private int $filling = 0;
    private string $label;

    public function __construct(int $capacity){
        $this->capacity = $capacity;
    }

    public function setLabel(string $label):void {
        if(strlen($label) <= self::MAX_LABEL_LENGTH){
            $this->label = $label;
        }
    }

    public function getLabel():string{
        return $this->label;
    }

    public function getCapacity():int {
        return $this->capacity;
    }

    public function fill(int $amount):void{
        // if($this->getRemainingCapacity() >= $amount){
        if($this->filling + $amount <= $this->capacity){
            $this->filling += $amount;
        }
    }

    public function empty(int $amount):void{
        if($amount > 0 && $this->filling >= $amount){
            $this->filling -= $amount;
        }
    }
    
    public function getRemainingCapacity():int{
        return $this->capacity - $this->filling;
    }
}