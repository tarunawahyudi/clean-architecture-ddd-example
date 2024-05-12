<?php

namespace App\Application\usecase\users;

use App\Domain\product\entities\Product;
use App\Domain\product\ProductRepository;
use App\Application\usecase\users\core\ProductUseCaseCore;

class AddProductUseCase extends ProductUseCaseCore
{
    public function __construct(
        private readonly ProductRepository $productRepository
    ) {}

    public function execute(Product $product): void
    {
        parent::validate($product);
        $this->productRepository->save($product);
    }
}
