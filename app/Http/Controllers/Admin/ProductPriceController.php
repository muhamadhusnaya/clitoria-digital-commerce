<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductPriceRequest;
use App\Http\Requests\Admin\UpdateProductPriceRequest;
use App\Services\ProductPriceService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductPriceController extends Controller
{
    protected ProductPriceService $productPriceService;
    protected ProductService $productService;

    public function __construct(ProductPriceService $productPriceService, ProductService $productService)
    {
        $this->productPriceService = $productPriceService;
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_prices = $this->productPriceService->getAll();
        return view('admin.product-prices.index', compact('product_prices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = $this->productService->getAll();
        return view('admin.product-prices.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductPriceRequest $request)
    {
        $this->productPriceService->store($request->validated());

        return redirect()->route('admin.product-prices.index')
            ->with('success', 'Product Price created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product_price = $this->productPriceService->find($id);
        
        if (!$product_price) {
            abort(404);
        }

        $products = $this->productService->getAll();

        return view('admin.product-prices.edit', compact('product_price', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductPriceRequest $request, string $id)
    {
        $this->productPriceService->update($id, $request->validated());

        return redirect()->route('admin.product-prices.index')
            ->with('success', 'Product Price updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->productPriceService->delete($id);

        return redirect()->route('admin.product-prices.index')
            ->with('success', 'Product Price deleted successfully.');
    }
}
