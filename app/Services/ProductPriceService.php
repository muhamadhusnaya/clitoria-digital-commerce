<?php

namespace App\Services;

use App\Contracts\ProductPriceRepositoryInterface;

class ProductPriceService extends BaseService
{
    protected ProductPriceRepositoryInterface $repository;

    public function __construct(ProductPriceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->all();
    }

    public function getPaginated(int $perPage = 10)
    {
        return $this->repository->paginate($perPage);
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function store(array $data)
    {
        $data['price'] = $this->normalizePrice($data['price']);

        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        if (isset($data['price'])) {
            $data['price'] = $this->normalizePrice($data['price']);
        }

        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }

    public function getByProduct(int $productId)
    {
        return $this->repository->getByProduct($productId);
    }

    public function getByType(string $type)
    {
        return $this->repository->getByType($type);
    }

    public function calculateTotal(int|float|string $price, int $quantity): float
    {
        return (float) $this->normalizePrice($price) * $quantity;
    }

    private function normalizePrice(int|float|string $price): float
    {
        return (float) str_replace(['.', ','], ['', '.'], (string) $price);
    }
}