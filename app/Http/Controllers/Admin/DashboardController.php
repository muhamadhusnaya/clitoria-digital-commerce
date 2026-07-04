<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AnalyticsService;
use App\Services\SalesService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected AnalyticsService $analyticsService;
    protected SalesService $salesService;

    public function __construct(AnalyticsService $analyticsService, SalesService $salesService)
    {
        $this->analyticsService = $analyticsService;
        $this->salesService = $salesService;
    }

    public function index(Request $request)
    {
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        $summary = $this->analyticsService->getDashboardSummary($startDate, $endDate);
        
        $recentSales = $this->salesService->getPaginated(5);
        $totalProducts = \App\Models\Product::count();
        $totalPartners = \App\Models\Partner::count();

        return view('dashboard', [
            'summary' => $summary,
            'recentSales' => $recentSales,
            'totalProducts' => $totalProducts,
            'totalPartners' => $totalPartners,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }
}
