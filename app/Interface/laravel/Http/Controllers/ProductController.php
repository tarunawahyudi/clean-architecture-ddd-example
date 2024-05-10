<?php

namespace App\Interface\laravel\Http\Controllers;

use App\Application\usecase\AddProductUseCase;
use App\Domain\product\entities\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private AddProductUseCase $addProductUseCase;

    public function __construct(AddProductUseCase $addProductUseCase)
    {
        $this->addProductUseCase = $addProductUseCase;
    }
    public function store(Request $request)
    {
        $product = new Product(
          $request->name,
          $request->price,
          $request->description
        );

        $this->addProductUseCase->execute($product);
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function get()
    {

    }

    public function getAll()
    {

    }

    public function delete()
    {

    }
}
