<?php

namespace Tests\Infrastructure\repository;

use App\Domain\product\ProductRepository;
use App\Infrastructure\repository\ProductRepositoryPostgres;
use PHPUnit\Framework\TestCase;

class ProductRepositoryPostgresTest extends TestCase
{
    private ProductRepository $productRepository;

    protected function setUp(): void
    {
        $this->productRepository = $this->createMock(ProductRepository::class);
    }

    public function testContainMethod()
    {
        self::assertTrue(
            method_exists($this->productRepository, 'findById'),
            'method not exist');

        self::assertTrue(
            method_exists($this->productRepository, 'findAll'),
            'method not exist');

        self::assertTrue(
            method_exists($this->productRepository, 'save'),
            'method not exist');

        self::assertTrue(
            method_exists($this->productRepository, 'delete'),
            'method not exist');
    }
}
