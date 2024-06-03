<?php

namespace App;

class DiliveryFood extends Services
{
    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 300;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + доставка еды в номер';
    }
}
