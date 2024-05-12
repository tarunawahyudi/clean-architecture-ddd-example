<?php

namespace App\Application\usecase\users\core;

use App\Domain\product\entities\Product;

abstract class ProductUseCaseCore
{

    public function validate(Product $product): void
    {
        if (!$product->getName() || !$product->getPrice() || !$product->getDescription()) {
            throw new \Exception('PRODUCT.NOT_CONTAIN_NEEDED_PROPERTY');
        }

        if (empty($product->getName())) {
            throw new \Exception('PRODUCT.NOT_CONTAIN_NEEDED_PROPERTY');
        }
    }
}
