<?php

namespace App;

class EconomyRoom extends Room
{
    public function getTotalPrice(): float
    {
        return 1000;
    }
    public function getDescription(): string
    {
        return "Эконом";
    }
}
