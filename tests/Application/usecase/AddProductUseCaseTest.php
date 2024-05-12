<?php

namespace Tests\Application\usecase;

use App\Application\usecase\users\AddProductUseCase;
use App\Domain\product\ProductRepository;
use PHPUnit\Framework\TestCase;

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