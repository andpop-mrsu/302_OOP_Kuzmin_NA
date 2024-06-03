<?php

namespace App\Tests;
use \PHPUnit\Framework\TestCase;
use App\ManufacturerFilter;
use App\MaxPriceFilter;
use App\Product;
use App\ProductCollection;

final class MaxPriceFilterTest extends TestCase
{
    public function testFilter(): void
    {
        $p1 = Product::create();
        $p1->name = 'Шоколад';
        $p1->price = 100;
        $p1->manufacturer = 'Красный Октябрь';

        $p2 = Product::create();
        $p2->name = 'Мармелад';
        $p2->price = 50;
        $p2->manufacturer = 'Ламзурь';

        $collection = ProductCollection::create(...[$p1, $p2]);
        $resultCollection = $collection->filter(MaxPriceFilter::create(80));
        $resultCollectionArr = $resultCollection->getProductsArray();
        $this->assertSame(1, count($resultCollectionArr));
        $this->assertObjectEquals($p2, $resultCollectionArr[0]);
    }

    public function testFilterWithDiscount(): void
    {

        $p1 = Product::create();
        $p1->name = 'Шоколад';
        $p1->price = 100;
        $p1->discount = 80;
        $p1->manufacturer = 'Красный Октябрь';

        $p2 = Product::create();
        $p2->name = 'Мармелад';
        $p2->price = 50;
        $p2->manufacturer = 'Ламзурь';

        $collection = ProductCollection::create(...[$p1, $p2]);
        $resultCollection = $collection->filter(MaxPriceFilter::create(30));
        $resultCollectionArr = $resultCollection->getProductsArray();
        $this->assertSame(1, count($resultCollectionArr));
        $this->assertObjectEquals($p1, $resultCollectionArr[0]);
    }
}
