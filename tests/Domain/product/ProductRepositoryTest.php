<?php

namespace Tests\Domain\product;

use App\Domain\product\entities\Product;
use App\Domain\product\ProductRepository;
use PHPUnit\Framework\TestCase;

class ProductRepositoryTest extends TestCase
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

    public function testMockMethod()
    {
        // Prepare
        $product = new Product(
            "product 1",
            2000,
            "this is description"
        );

        $this->productRepository->expects($this->once())
            ->method('findById')
            ->willReturn($product);

        $this->productRepository->findById("1");
    }
}
