<?php

namespace App\Services;

use App\Contracts\ProductPriceRepositoryInterface;
use App\Models\ProductPrice;
use InvalidArgumentException;

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
        $data = $this->preparePriceData($data);

        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        $data = $this->preparePriceData($data, false);

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
        $this->validateType($type);

        return $this->repository->getByType($type);
    }

    public function getSinglePrices()
    {
        return $this->getByType(ProductPrice::TYPE_SINGLE);
    }

    public function getBundlePrices()
    {
        return $this->getByType(ProductPrice::TYPE_BUNDLE);
    }

    public function getLowestPriceByProduct(int $productId)
    {
        return $this->repository->getLowestPriceByProduct($productId);
    }

    public function getHighestPriceByProduct(int $productId)
    {
        return $this->repository->getHighestPriceByProduct($productId);
    }

    public function calculateSubtotal(int|float|string $price, int $quantity): float
    {
        if ($quantity < 1) {
            throw new InvalidArgumentException('Quantity must be at least 1.');
        }

        return $this->normalizePrice($price) * $quantity;
    }

    public function calculateTotal(array $items): float
    {
        $total = 0;

        foreach ($items as $item) {
            $price = $item['price'] ?? 0;
            $quantity = $item['quantity'] ?? 1;

            $total += $this->calculateSubtotal($price, (int) $quantity);
        }

        return $total;
    }

    public function formatPrice(int|float|string $price): string
    {
        return 'Rp ' . number_format($this->normalizePrice($price), 0, ',', '.');
    }

    private function preparePriceData(array $data, bool $requireAllFields = true): array
    {
        if (isset($data['type'])) {
            $this->validateType($data['type']);
        }

        if (isset($data['price'])) {
            $data['price'] = $this->normalizePrice($data['price']);
        } elseif ($requireAllFields) {
            throw new InvalidArgumentException('Price is required.');
        }

        return $data;
    }

    private function validateType(string $type): void
    {
        if (! in_array($type, [ProductPrice::TYPE_SINGLE, ProductPrice::TYPE_BUNDLE], true)) {
            throw new InvalidArgumentException('Invalid product price type.');
        }
    }

    private function normalizePrice(int|float|string $price): float
    {
        return (float) str_replace(['.', ','], ['', '.'], (string) $price);
    }
}