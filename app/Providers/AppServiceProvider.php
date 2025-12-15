<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Disabling the lazy loading
         */
        Model::preventLazyLoading();

        // Paginator::useBootstrapFive();

        /**
         * Disable the fillable mass assignment (not recommended)
         * for security
         */
        // Model::unguard();
    }
}
