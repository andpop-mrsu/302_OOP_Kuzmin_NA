<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Room;
use App\EconomyRoom;
use App\StandartRoom;
use App\LuxaryRoom;
use App\Services;
use App\Dinner;
use App\DiliveryFood;
use App\DedicatedInternet;
use App\Breakfast;
use App\AdditionalSofa;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $standartRoom = new StandartRoom();

        $this->assertEquals(2000, $standartRoom->getTotalPrice());
        $this->assertEquals('Стандарт', $standartRoom->getDescription());

        $standartRoom = new AdditionalSofa($standartRoom);

        $this->assertEquals(2500, $standartRoom->getTotalPrice());
        $this->assertEquals('Стандарт + дополнительный диван', $standartRoom->getDescription());

        $standartRoom = new Dinner($standartRoom);

        $this->assertEquals(2800, $standartRoom->getTotalPrice());
        $this->assertEquals('Стандарт + дополнительный диван + ужин', $standartRoom->getDescription());
    }
}
