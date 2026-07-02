<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getPaginated(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        
        // Handle checkbox status which might not be present if unchecked
        $data['status'] = $request->has('status');

        $this->productService->store($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        // 
    }

    public function edit(string $id)
    {
        $product = $this->productService->find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, string $id)
    {
        $data = $request->validated();
        
        // Handle checkbox status
        $data['status'] = $request->has('status');

        $this->productService->update($id, $data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $this->productService->delete($id);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
