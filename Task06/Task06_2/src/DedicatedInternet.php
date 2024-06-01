<?php

namespace App;

class DedicatedInternet extends Services
{
    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 100;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + выделеный Интернет';
    }
}
