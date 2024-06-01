<?php

namespace App;

interface ProductFilteringStrategy
{
    public function filter(Product ...$products): array;
}