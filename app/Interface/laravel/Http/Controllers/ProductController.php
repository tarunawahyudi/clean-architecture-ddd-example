<?php

namespace App\Interface\laravel\Http\Controllers;

use App\Application\usecase\users\AddProductUseCase;
use App\Application\usecase\users\ShowProductUseCase;
use App\Domain\product\entities\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use function Psy\debug;

class ProductController extends Controller
{
    public function __construct(
        private readonly AddProductUseCase $addProductUseCase,
        private readonly ShowProductUseCase $showProductUseCase
    ) {}

    public function save(Request $request): JsonResponse
    {
        $product = new Product(
          $request->name,
          $request->price,
          $request->description
        );

        $this->addProductUseCase->execute($product);
        return response()->json([
            'status' => 'success',
        ], 201);
    }

    public function get()
    {

    }

    public function getAll(): JsonResponse
    {
        $result = $this->showProductUseCase->execute();
        return response()->json([
            'status' => 'success',
            'data' => $result
        ]);
    }

    public function delete()
    {

    }
}
