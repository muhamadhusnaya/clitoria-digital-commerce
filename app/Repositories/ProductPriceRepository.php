<?php

namespace App\Repositories;

use App\Contracts\ProductPriceRepositoryInterface;
use App\Models\ProductPrice;

class ProductPriceRepository implements ProductPriceRepositoryInterface
{
    public function all()
    {
        return ProductPrice::with('product')->latest()->get();
    }

    public function paginate(int $perPage = 10)
    {
        return ProductPrice::with('product')->latest()->paginate($perPage);
    }

    public function find(int $id)
    {
        return ProductPrice::with('product')->findOrFail($id);
    }

    public function create(array $data)
    {
        return ProductPrice::create($data);
    }

    public function update(int $id, array $data)
    {
        $productPrice = $this->find($id);
        $productPrice->update($data);

        return $productPrice->fresh('product');
    }

    public function delete(int $id)
    {
        $productPrice = $this->find($id);

        return $productPrice->delete();
    }

    public function getByProduct(int $productId)
    {
        return ProductPrice::where('product_id', $productId)
            ->latest()
            ->get();
    }

    public function getByType(string $type)
    {
        return ProductPrice::with('product')
            ->where('type', $type)
            ->latest()
            ->get();
    }
}