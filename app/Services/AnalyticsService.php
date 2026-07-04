<?php

namespace App\Services;

use App\Contracts\SalesRepositoryInterface;

class AnalyticsService extends BaseService
{
    protected SalesRepositoryInterface $salesRepository;

    public function __construct(SalesRepositoryInterface $salesRepository)
    {
        $this->salesRepository = $salesRepository;
    }

    public function getRevenueMetrics(?string $startDate = null, ?string $endDate = null): array
    {
        $totalRevenue = $this->salesRepository->getTotalRevenue($startDate, $endDate);
        $averageOrderValue = $this->salesRepository->getAverageOrderValue($startDate, $endDate);

        return [
            'total_revenue' => (float) $totalRevenue,
            'formatted_total_revenue' => $this->formatCurrency($totalRevenue),
            'average_order_value' => (float) $averageOrderValue,
            'formatted_average_order_value' => $this->formatCurrency($averageOrderValue),
        ];
    }

    public function getSalesMetrics(?string $startDate = null, ?string $endDate = null): array
    {
        $salesCount = $this->salesRepository->getSalesCount($startDate, $endDate);
        $totalItemsSold = $this->salesRepository->getTotalItemsSold($startDate, $endDate);

        return [
            'sales_count' => (int) $salesCount,
            'total_items_sold' => (int) $totalItemsSold,
        ];
    }

    public function getProductRanking(?string $startDate = null, ?string $endDate = null, int $limit = 10)
    {
        return $this->salesRepository->getProductRanking($startDate, $endDate, $limit);
    }

    public function getDashboardSummary(?string $startDate = null, ?string $endDate = null): array
    {
        return [
            'revenue' => $this->getRevenueMetrics($startDate, $endDate),
            'sales' => $this->getSalesMetrics($startDate, $endDate),
            'top_products' => $this->getProductRanking($startDate, $endDate),
        ];
    }

    private function formatCurrency(int|float|string $amount): string
    {
        return 'Rp ' . number_format((float) $amount, 0, ',', '.');
    }
}