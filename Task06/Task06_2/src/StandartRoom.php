<?php

namespace App;

class StandartRoom extends Room
{
    public function getTotalPrice(): float
    {
        return 2000;
    }
    public function getDescription(): string
    {
        return "Стандарт";
    }
}
