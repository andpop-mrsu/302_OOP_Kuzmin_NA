<?php

namespace App;

class Dinner extends Services
{
    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 300;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + ужин';
    }
}
