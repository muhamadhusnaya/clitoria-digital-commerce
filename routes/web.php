<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::name('public.')->group(function () {
    Route::get('/', function () {
        return view('public.home');
    })->name('home');

    Route::get('/dummy-public', function () {
        return view('dummy-public');
    })->name('dummy-public');

    Route::get('/products', function () {
        return view('public.products.index');
    })->name('products.index');
    
    Route::get('/products/{slug}', function ($slug) {
        return view('public.products.show', compact('slug'));
    })->name('products.show');

    // Cart endpoints
    Route::get('/cart', function () {
        return view('public.cart.index');
    })->name('cart.index');

    // Checkout & Buy Now endpoints
    Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/buy-now', [\App\Http\Controllers\BuyNowController::class, 'store'])->name('buy-now.store');
});


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // Hero Management
        Route::resource('heroes', \App\Http\Controllers\Admin\HeroController::class)->except(['show']);
        
        // Benefit Management
        Route::post('benefits/reorder', [\App\Http\Controllers\Admin\BenefitController::class, 'reorder'])->name('benefits.reorder');
        Route::resource('benefits', \App\Http\Controllers\Admin\BenefitController::class)->except(['show']);

        // Gallery Management
        Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['show']);

        // Testimonial Management
        Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->except(['show']);

        // Team Management
        Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class)->except(['show']);

        // Partner Management
        Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class)->except(['show']);
        // Product Management
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::resource('product-prices', \App\Http\Controllers\Admin\ProductPriceController::class);

        // Sales Management
        Route::resource('sales', \App\Http\Controllers\Admin\SaleController::class);

        // Reports
        Route::get('/reports', [\App\Http\Controllers\Admin\ReportController::class, 'index'])->name('reports.index');
        Route::get('/reports/export', [\App\Http\Controllers\Admin\ExportController::class, 'exportCsv'])->name('reports.export');

        // Business Settings
        Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
        Route::put('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

        // SEO Settings
        Route::put('/settings/seo', [\App\Http\Controllers\Admin\SettingController::class, 'updateSeo'])->name('settings.seo.update');
    });

    require __DIR__.'/auth.php';
});

Route::get('/dummy-public', function () { return view('dummy-public'); });
