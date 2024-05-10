<?php

namespace Tests\Domain\product\entities;

use App\Domain\product\entities\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testContainFailProperty()
    {
        self::expectException(\TypeError::class);
        $payload = [
            'name' => null,
            'price' => 200,
            'description' => 'this is description'
        ];

        $product = new Product(
            $payload['name'],
            $payload['price'],
            $payload['description']
        );

        self::assertEquals(null, $product->getName());
        self::assertEquals(200, $product->getPrice());
        self::assertEquals('this is description', $product->getDescription());
    }

    public function testContainSuccessProperty()
    {
        $payload = [
            'name' => 'product 1',
            'price' => 200,
            'description' => 'this is description'
        ];

        $product = new Product(
            $payload['name'],
            $payload['price'],
            $payload['description']
        );

        self::assertEquals('product 1', $product->getName());
        self::assertEquals(200, $product->getPrice());
        self::assertEquals('this is description', $product->getDescription());
    }
}
