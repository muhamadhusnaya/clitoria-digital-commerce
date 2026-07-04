<?php

namespace App\Services;

use Carbon\Carbon;

class ReportService extends BaseService
{
    public function __construct(
        protected AnalyticsService $analyticsService,
        protected SalesService $salesService
    ) {
    }

    public function getDailyReport(?string $date = null): array
    {
        $reportDate = $date ? Carbon::parse($date) : now();

        $startDate = $reportDate->toDateString();
        $endDate = $reportDate->toDateString();

        return [
            'period_type' => 'daily',
            'date' => $startDate,
            'revenue' => $this->analyticsService->getRevenueMetrics($startDate, $endDate),
            'sales' => $this->analyticsService->getSalesMetrics($startDate, $endDate),
            'top_products' => $this->analyticsService->getProductRanking($startDate, $endDate),
            'transactions' => $this->salesService->getByDateRange($startDate, $endDate),
        ];
    }

    public function getMonthlyReport(?int $month = null, ?int $year = null): array
    {
        $month = $month ?? now()->month;
        $year = $year ?? now()->year;

        $date = Carbon::create($year, $month, 1);

        $startDate = $date->copy()->startOfMonth()->toDateString();
        $endDate = $date->copy()->endOfMonth()->toDateString();

        return [
            'period_type' => 'monthly',
            'month' => $month,
            'year' => $year,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'revenue' => $this->analyticsService->getRevenueMetrics($startDate, $endDate),
            'sales' => $this->analyticsService->getSalesMetrics($startDate, $endDate),
            'top_products' => $this->analyticsService->getProductRanking($startDate, $endDate),
            'transactions' => $this->salesService->getByDateRange($startDate, $endDate),
        ];
    }

    public function getRevenueSummary(?string $startDate = null, ?string $endDate = null): array
    {
        return [
            'period_type' => 'custom',
            'start_date' => $startDate,
            'end_date' => $endDate,
            'revenue' => $this->analyticsService->getRevenueMetrics($startDate, $endDate),
            'sales' => $this->analyticsService->getSalesMetrics($startDate, $endDate),
        ];
    }

    public function getProductPerformance(?string $startDate = null, ?string $endDate = null, int $limit = 10): array
    {
        return [
            'period_type' => 'custom',
            'start_date' => $startDate,
            'end_date' => $endDate,
            'limit' => $limit,
            'products' => $this->analyticsService->getProductRanking($startDate, $endDate, $limit),
        ];
    }

    public function getFullReport(?string $startDate = null, ?string $endDate = null): array
    {
        return [
            'period_type' => 'custom',
            'start_date' => $startDate,
            'end_date' => $endDate,
            'summary' => $this->analyticsService->getDashboardSummary($startDate, $endDate),
            'transactions' => $this->salesService->getByDateRange($startDate, $endDate),
        ];
    }
}