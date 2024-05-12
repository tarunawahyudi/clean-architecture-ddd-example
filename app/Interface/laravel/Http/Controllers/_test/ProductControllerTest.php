<?php

namespace App\Interface\laravel\Http\Controllers\_test;

use App\Infrastructure\database\Postgres;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    protected \PDO $pdo;
    private function cleanTable(): void
    {
        $this->pdo = Postgres::get()->connect();
        $this->pdo->exec('TRUNCATE TABLE products');
    }

    private function insertDummy(): void
    {
        $this->pdo = Postgres::get()->connect();
        $this->pdo->exec("INSERT INTO products(id, name, price, description)
                    VALUES ('1', 'product 1', 2000, 'description')");
    }

    public function testFindByIdSuccess()
    {
        $this->cleanTable();
        $this->insertDummy();

        $this->get('/api/product/1')
            ->assertStatus(200)
            ->assertJson([
                'status' => 'success',
                'data' => [
                    'id' => '1',
                    'name' => 'product 1',
                    'price' => '2000',
                    'description' => 'description'
                ],
            ]);
    }

    public function testInsertProductFail()
    {
        $this->cleanTable();

        $this->post('/api/product', [
            'price' => 20,
            'description' => 'asd',
        ])->assertJson([
            'status' => 'fail',
            'message' => 'Data product yang anda kirim terdapat kesalahan. Mohon periksa kembali'
        ])->setStatusCode(400);
    }

    public function testInsertProductSuccess()
    {
        $this->cleanTable();

        $this->post('/api/product', [
            'name' => 'asd',
            'price' => 20,
            'description' => 'asd',
        ])->assertJson([
            'status' => 'success',
        ])->assertStatus(201);
    }

    public function testDeleteFail()
    {
        $this->delete('/api/product/xxx')
            ->assertStatus(404)
            ->assertJson([
                'status' => 'fail',
                'message' => __('exception.DELETE_PRODUCT_USE_CASE.PRODUCT_NOT_FOUND')
            ]);
    }
}
