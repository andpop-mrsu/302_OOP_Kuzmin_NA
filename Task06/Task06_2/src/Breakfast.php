<?php

namespace App;

class Breakfast extends Services
{
    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 500;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + завтрак "шведский стол"';
    }
}
