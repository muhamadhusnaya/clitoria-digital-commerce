<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SalesRepositoryInterface;
use App\Models\Sale;
use App\Models\SalesItem;
use App\Repositories\BaseRepository;

class SalesRepository extends BaseRepository implements SalesRepositoryInterface
{
    public function __construct(Sale $model)
    {
        parent::__construct($model);
    }

    public function all()
    {
        return $this->model->with(['items', 'creator'])->latest('sale_date')->get();
    }

    public function paginate(int $perPage = 10)
    {
        return $this->model->with(['items', 'creator'])
            ->latest('sale_date')
            ->paginate($perPage);
    }

    public function find(int $id)
    {
        return $this->model->with(['items.product', 'creator'])->findOrFail($id);
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