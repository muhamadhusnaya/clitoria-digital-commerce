<?php

namespace App\Services;

use App\Contracts\SalesRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class SalesService extends BaseService
{
    protected SalesRepositoryInterface $repository;

    public function __construct(SalesRepositoryInterface $repository)
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
        return DB::transaction(function () use ($data) {
            $items = $data['items'] ?? [];

            unset($data['items']);

            $data['sale_date'] = $data['sale_date'] ?? now()->toDateString();
            $data['created_by'] = $data['created_by'] ?? Auth::id();

            if (! empty($items)) {
                $data['total_amount'] = $this->calculateTotal($items);
            } else {
                $data['total_amount'] = $this->normalizePrice($data['total_amount'] ?? 0);
            }

            $sale = $this->repository->create($data);

            foreach ($items as $item) {
                $sale->items()->create($this->prepareItemData($item));
            }

            return $sale->fresh(['items.product', 'creator']);
        });
    }

    public function update(int $id, array $data)
    {
        if (isset($data['total_amount'])) {
            $data['total_amount'] = $this->normalizePrice($data['total_amount']);
        }

        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }

    public function getByDateRange(?string $startDate = null, ?string $endDate = null)
    {
        return $this->repository->getByDateRange($startDate, $endDate);
    }

    public function getTotalRevenue(?string $startDate = null, ?string $endDate = null): float
    {
        return (float) $this->repository->getTotalRevenue($startDate, $endDate);
    }

    public function getSalesCount(?string $startDate = null, ?string $endDate = null): int
    {
        return (int) $this->repository->getSalesCount($startDate, $endDate);
    }

    public function calculateTotal(array $items): float
    {
        $total = 0;

        foreach ($items as $item) {
            $total += $this->calculateSubtotal(
                $item['price'] ?? 0,
                (int) ($item['qty'] ?? 1)
            );
        }

        return $total;
    }

    public function calculateSubtotal(int|float|string $price, int $qty): float
    {
        if ($qty < 1) {
            throw new InvalidArgumentException('Quantity must be at least 1.');
        }

        return $this->normalizePrice($price) * $qty;
    }

    public function formatRevenue(int|float|string $amount): string
    {
        return 'Rp ' . number_format($this->normalizePrice($amount), 0, ',', '.');
    }

    private function prepareItemData(array $item): array
    {
        $qty = (int) ($item['qty'] ?? 1);
        $price = $this->normalizePrice($item['price'] ?? 0);

        return [
            'product_id' => $item['product_id'] ?? null,
            'product_name' => $item['product_name'],
            'qty' => $qty,
            'price' => $price,
            'subtotal' => $this->calculateSubtotal($price, $qty),
        ];
    }

    private function normalizePrice(int|float|string $price): float
    {
        return (float) str_replace(['.', ','], ['', '.'], (string) $price);
    }
}