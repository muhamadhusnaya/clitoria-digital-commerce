<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductListingController extends Controller
{
    public function index()
    {
        $products = Product::with('prices')->where('status', true)->latest()->paginate(12);
        return view('public.products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::with('prices')->where('slug', $slug)->where('status', true)->firstOrFail();
        
        // Get related products (optional feature, maybe same category or just random)
        $relatedProducts = Product::with('prices')->where('status', true)->where('id', '!=', $product->id)->inRandomOrder()->take(4)->get();
        
        return view('public.products.show', compact('product', 'relatedProducts'));
    }
}
