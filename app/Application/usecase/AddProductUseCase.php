<?php

namespace App\Application\usecase;

use App\Domain\product\entities\Product;
use App\Domain\product\ProductRepository;

class AddProductUseCase
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute(Product $payload): void
    {
        $this->productRepository->save($payload);
    }
}
