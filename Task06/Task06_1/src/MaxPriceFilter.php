<?php

namespace App;

class MaxPriceFilter implements ProductFilteringStrategy
{
    private $maxPrice;

    private function __construct(float $maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    public static function create(float $maxPrice): MaxPriceFilter
    {
        return new MaxPriceFilter($maxPrice);
    }

    public function filter(Product ...$products): array
    {
        $result = array();
        $price = 0;
        foreach ($products as $product) {
            if (isset($product->discount)) {
                $price = $product->price * (1 - $product->discount / 100);
            } else {
                $price = $product->price;
            }

            if ($price <= $this->maxPrice) {
                $result[] = $product;
            }
        }

        return $result;
    }
}