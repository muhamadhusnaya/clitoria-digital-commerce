<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ProductPriceRepositoryInterface;
use App\Models\ProductPrice;
use App\Repositories\BaseRepository;

class ProductPriceRepository extends BaseRepository implements ProductPriceRepositoryInterface
{
    public function __construct(ProductPrice $model)
    {
        parent::__construct($model);
    }

    public function getByProduct(int $productId)
    {
        return $this->model->where('product_id', $productId)
            ->latest()
            ->get();
    }

    public function getByType(string $type)
    {
        return $this->model->with('product')
            ->where('type', $type)
            ->latest()
            ->get();
    }

    public function getLowestPriceByProduct(int $productId)
    {
        return $this->model->where('product_id', $productId)
            ->orderBy('price')
            ->first();
    }

    public function getHighestPriceByProduct(int $productId)
    {
        return $this->model->where('product_id', $productId)
            ->orderByDesc('price')
            ->first();
    }
}