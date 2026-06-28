<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::group(['as' => 'public.'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Admin routes will be defined here
});
