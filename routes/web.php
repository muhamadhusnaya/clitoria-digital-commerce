<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::name('public.')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
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
        Route::resource('benefits', \App\Http\Controllers\Admin\BenefitController::class)->except(['show']);

        // Gallery Management
        Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['show']);

        // Testimonial Management
        Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class)->except(['show']);

        // Team Management
        Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class)->except(['show']);

        // Partner Management
        Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class)->except(['show']);
        
        // Sales Management
        Route::resource('sales', \App\Http\Controllers\Admin\SaleController::class);

        // Reports
        Route::get('/reports', [\App\Http\Controllers\Admin\ReportController::class, 'index'])->name('reports.index');
        Route::get('/reports/export', [\App\Http\Controllers\Admin\ExportController::class, 'exportCsv'])->name('reports.export');
    });

    require __DIR__.'/auth.php';
});
