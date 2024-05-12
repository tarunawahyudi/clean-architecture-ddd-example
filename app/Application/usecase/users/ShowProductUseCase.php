<?php

namespace App\Application\usecase\users;

use App\Application\usecase\users\core\ProductUseCaseCore;
use App\Domain\product\ProductRepository;

class ShowProductUseCase extends ProductUseCaseCore
{
    public function __construct(
        private readonly ProductRepository $productRepository
    ) {}

    public function execute()
    {
        return $this->productRepository->findAll();
    }
}
