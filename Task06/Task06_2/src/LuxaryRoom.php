<?php

namespace App;

class LuxaryRoom extends Room
{
    public function getTotalPrice(): float
    {
        return 3000;
    }
    public function getDescription(): string
    {
        return "Люкс";
    }
}
