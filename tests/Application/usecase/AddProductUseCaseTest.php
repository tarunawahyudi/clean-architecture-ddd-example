<?php

namespace Tests\Application\usecase;

use App\Application\usecase\AddProductUseCase;
use App\Domain\product\ProductRepository;
use PHPUnit\Framework\TestCase;
use Tests\Domain\product\ProductRepositoryTest;

class AddProductUseCaseTest extends TestCase
{

    private ProductRepository $productRepository;

    protected function setUp(): void
    {
        $this->productRepository = $this->createMock(ProductRepository::class);
    }

    public function testContainMethod()
    {
        $productUseCase = new AddProductUseCase($this->productRepository);
        self::assertTrue(
            method_exists($productUseCase, 'execute'),
            'method not exist');
    }
}
