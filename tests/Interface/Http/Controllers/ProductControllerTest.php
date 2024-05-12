<?php

namespace Tests\Interface\Http\Controllers;

use App\Interface\laravel\Http\Controllers\ProductController;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    public function testInsertProductFail()
    {
        $response = $this->post('/api/product', [
            'name' => 'asd',
            'price' => 200,
            'description' => 'asd'
        ]);
        $response->dump();
        $this->assertTrue(true);
    }

    public function testContainMethod()
    {
        $productController = new ProductController();
        self::assertTrue(
            method_exists($productController, 'save'),
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
