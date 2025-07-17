<?php

interface DeliveryInterface
{
    public function getDeliveryMethod(): string;

    public function getDeliveryDetails(): string;
}
