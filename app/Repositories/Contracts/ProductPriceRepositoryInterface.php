<?php

namespace App\Repositories\Contracts;

interface ProductPriceRepositoryInterface extends BaseRepositoryInterface
{
    public function getByProduct(int $productId);

    public function getByType(string $type);

    public function getLowestPriceByProduct(int $productId);

    public function getHighestPriceByProduct(int $productId);
}