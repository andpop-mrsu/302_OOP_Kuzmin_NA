<?php

namespace App;

abstract class Room
{
    abstract public function getTotalPrice(): float;
    abstract public function getDescription(): string;
}
