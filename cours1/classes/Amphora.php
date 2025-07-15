<?php
class Amphora {
    private int $capacity;
    private int $filling = 0;

    public function __construct(int $capacity){
        $this->capacity = $capacity;
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