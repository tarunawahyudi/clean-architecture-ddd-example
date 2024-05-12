<?php

namespace App\Interface\laravel\Http\Controllers\_test;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{

    public function testGetAll() {
        $response = $this->get('/api/product');
        $response->assertStatus(200);
    }

    public function testGet()
    {
        $response = $this->post('/api/product', [
           'name' => 'product 1',
           'price' => 2000,
           'description' => 'this is description'
        ]);

        $response->assertStatus(201);
        $response->assertJson([
            'status' => 'success',
        ]);
    }
}
