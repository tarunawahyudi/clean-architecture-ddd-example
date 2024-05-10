<?php

namespace Tests\Interface\Http\Controllers;

use App\Interface\laravel\Http\Controllers\ProductController;
use PHPUnit\Framework\TestCase;

class ProductControllerTest extends TestCase
{
    public function testContainMethod()
    {
        $productController = new ProductController();
        self::assertTrue(
            method_exists($productController, 'store'),
            'method not exist'
        );

        self::assertTrue(
            method_exists($productController, 'get'),
            'method not exist'
        );

        self::assertTrue(
            method_exists($productController, 'getAll'),
            'method not exist'
        );

        self::assertTrue(
            method_exists($productController, 'delete'),
            'method not exist'
        );
    }
}
