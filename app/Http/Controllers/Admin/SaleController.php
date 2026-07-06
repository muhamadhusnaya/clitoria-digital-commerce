<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSaleRequest;
use App\Services\ProductService;
use App\Services\SalesService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    protected SalesService $salesService;
    protected ProductService $productService;

    public function __construct(SalesService $salesService, ProductService $productService)
    {
        $this->salesService = $salesService;
        $this->productService = $productService;
    }

    /**
     * Display a listing of the sales.
     */
    public function index()
    {
        $sales = $this->salesService->getPaginated(15);
        $monthlyRevenue = $this->salesService->getMonthlyRevenue(date('Y'));
        $topProducts = $this->salesService->getProductRanking(null, null, 3);
        
        return view('admin.sales.index', compact('sales', 'monthlyRevenue', 'topProducts'));
    }

    /**
     * Show the form for creating a new sale.
     */
    public function create()
    {
        // Load products with their base prices for the dropdown.
        // We format them to include the first price (if bundle pricing is used)
        // or a default value, to make it easier for the frontend.
        $products = $this->productService->getAll(true)->map(function ($product) {
            $basePrice = $product->prices->firstWhere('type', 'single')?->price 
                         ?? $product->prices->first()?->price 
                         ?? 0;
            return [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $basePrice,
            ];
        });

        return view('admin.sales.create', compact('products'));
    }

    /**
     * Store a newly created sale in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $this->salesService->store($request->validated());

        return redirect()->route('admin.sales.create')
            ->with('success', 'Sale transaction recorded successfully.');
    }

    /**
     * Display the specified sale.
     */
    public function show(int $id)
    {
        $sale = $this->salesService->find($id);

        return view('admin.sales.show', compact('sale'));
    }
}
