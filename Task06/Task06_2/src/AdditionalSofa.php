<?php

namespace App;

class AdditionalSofa extends Services
{
    public function getTotalPrice(): float
    {
        return $this->room->getTotalPrice() + 500;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription() . ' + дополнительный диван';
    }
}
