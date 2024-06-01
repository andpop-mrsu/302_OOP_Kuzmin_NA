<?php

namespace App;

abstract class Services extends Room
{
    protected Room $room;
    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    abstract public function getTotalPrice(): float;
    abstract public function getDescription(): string;
}
