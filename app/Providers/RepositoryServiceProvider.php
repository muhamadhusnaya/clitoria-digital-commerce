<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\Contracts\HeroRepositoryInterface::class,
            \App\Repositories\Eloquent\HeroRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\BenefitRepositoryInterface::class,
            \App\Repositories\Eloquent\BenefitRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\GalleryRepositoryInterface::class,
            \App\Repositories\Eloquent\GalleryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\TestimonialRepositoryInterface::class,
            \App\Repositories\Eloquent\TestimonialRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\TeamRepositoryInterface::class,
            \App\Repositories\Eloquent\TeamRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\PartnerRepositoryInterface::class,
            \App\Repositories\Eloquent\PartnerRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ProductRepositoryInterface::class,
            \App\Repositories\Eloquent\ProductRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ProductPriceRepositoryInterface::class,
            \App\Repositories\Eloquent\ProductPriceRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\SalesRepositoryInterface::class,
            \App\Repositories\Eloquent\SalesRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\SettingRepositoryInterface::class,
            \App\Repositories\Eloquent\SettingRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
