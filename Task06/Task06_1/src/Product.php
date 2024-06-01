<?php

namespace App;

class Product
{
    public $name;
    public $manufacturer;
    public $price;
    public $discount = null;

    private function __construct()
    {
    }

    public static function create(): Product
    {
        return new Product();
    }

    public function equals(self $other): bool
    {
        return $this->name === $other->name &&
            $this->manufacturer === $other->manufacturer &&
            $this->price === $other->price &&
            $this->discount === $other->discount;
    }
}
