<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::name('public.')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/dummy-public', function () {
        return view('dummy-public');
    })->name('dummy-public');
    Route::get('/products', [\App\Http\Controllers\Public\ProductListingController::class, 'index'])->name('product.list');
    Route::get('/search', [\App\Http\Controllers\Public\ProductSearchController::class, 'index'])->name('product.search');

    // Cart endpoints
    Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove', [\App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
    Route::put('/cart/update', [\App\Http\Controllers\CartController::class, 'updateQuantity'])->name('cart.update');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::resource('product-prices', \App\Http\Controllers\Admin\ProductPriceController::class);
    });

    require __DIR__.'/auth.php';
});
