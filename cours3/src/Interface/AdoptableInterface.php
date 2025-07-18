<?php

namespace App\Interface;

interface AdoptableInterface
{
    public function canBeAdopted(): bool;
}
