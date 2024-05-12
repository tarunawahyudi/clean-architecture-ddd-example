<?php

namespace App\Application\usecase\products;

use App\Application\usecase\products\core\ProductUseCaseCore;
use App\Domain\product\ProductRepository;

class ShowProductUseCase extends ProductUseCaseCore
{
    public function __construct(
        private readonly ProductRepository $productRepository
    ) {}

    public function execute(?string $id)
    {
        return $id ? $this->findById($id) : $this->findAll();
    }

    private function findById($id)
    {
        return $this->productRepository->findById($id);
    }

    private function findAll() {
        return $this->productRepository->findAll();
    }
}
