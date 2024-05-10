<?php

namespace App\Infrastructure\repository;

use App\Domain\product\ProductRepository;
use App\Domain\product\entities\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductRepositoryPostgres implements ProductRepository
{
    function findById(string $id)
    {
        return DB::table('warehouse')
            ->where('id', '==', $id)->first();
    }

    function findAll()
    {
        return DB::table('warehouse')->get();
    }

    function save(Product $product): bool
    {
        return DB::table('product')->insert([
            'id' => Str::uuid(),
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'description' => $product->getDescription(),
        ]);
    }

    function delete(string $id): int
    {
        return DB::table('warehouse')->delete($id);
    }
}
