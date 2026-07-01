<?php

namespace App\Repositories;

use App\Contracts\SalesRepositoryInterface;
use App\Models\Sale;

class SalesRepository implements SalesRepositoryInterface
{
    public function all()
    {
        return Sale::with(['items', 'creator'])->latest('sale_date')->get();
    }

    public function paginate(int $perPage = 10)
    {
        return Sale::with(['items', 'creator'])
            ->latest('sale_date')
            ->paginate($perPage);
    }

    public function find(int $id)
    {
        return Sale::with(['items.product', 'creator'])->findOrFail($id);
    }

    public function create(array $data)
    {
        return Sale::create($data);
    }

    public function update(int $id, array $data)
    {
        $sale = $this->find($id);
        $sale->update($data);

        return $sale->fresh(['items.product', 'creator']);
    }

    public function delete(int $id)
    {
        $sale = $this->find($id);

        return $sale->delete();
    }

    public function getByDateRange(?string $startDate = null, ?string $endDate = null)
    {
        return Sale::with(['items.product', 'creator'])
            ->when($startDate, fn ($query) => $query->whereDate('sale_date', '>=', $startDate))
            ->when($endDate, fn ($query) => $query->whereDate('sale_date', '<=', $endDate))
            ->latest('sale_date')
            ->get();
    }

    public function getTotalRevenue(?string $startDate = null, ?string $endDate = null)
    {
        return Sale::query()
            ->when($startDate, fn ($query) => $query->whereDate('sale_date', '>=', $startDate))
            ->when($endDate, fn ($query) => $query->whereDate('sale_date', '<=', $endDate))
            ->sum('total_amount');
    }

    public function getSalesCount(?string $startDate = null, ?string $endDate = null)
    {
        return Sale::query()
            ->when($startDate, fn ($query) => $query->whereDate('sale_date', '>=', $startDate))
            ->when($endDate, fn ($query) => $query->whereDate('sale_date', '<=', $endDate))
            ->count();
    }
    public function getAverageOrderValue(?string $startDate = null, ?string $endDate = null)
    {
    return Sale::query()
        ->when($startDate, fn ($query) => $query->whereDate('sale_date', '>=', $startDate))
        ->when($endDate, fn ($query) => $query->whereDate('sale_date', '<=', $endDate))
        ->avg('total_amount') ?? 0;
    }

    public function getTotalItemsSold(?string $startDate = null, ?string $endDate = null)
    {
    return SalesItem::query()
        ->whereHas('sale', function ($query) use ($startDate, $endDate) {
            $query
                ->when($startDate, fn ($query) => $query->whereDate('sale_date', '>=', $startDate))
                ->when($endDate, fn ($query) => $query->whereDate('sale_date', '<=', $endDate));
        })
        ->sum('qty');
    }

        public function getProductRanking(?string $startDate = null, ?string $endDate = null, int $limit = 10)
    {
    return SalesItem::query()
        ->selectRaw('
            product_id,
            product_name,
            SUM(qty) as total_qty,
            SUM(subtotal) as total_revenue
        ')
        ->whereHas('sale', function ($query) use ($startDate, $endDate) {
            $query
                ->when($startDate, fn ($query) => $query->whereDate('sale_date', '>=', $startDate))
                ->when($endDate, fn ($query) => $query->whereDate('sale_date', '<=', $endDate));
        })
        ->groupBy('product_id', 'product_name')
        ->orderByDesc('total_revenue')
        ->limit($limit)
        ->get();
    }
}