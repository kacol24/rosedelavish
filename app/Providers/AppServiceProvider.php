<?php

namespace App\Providers;

use App\Models\Staff;
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
        Paginator::useBootstrapFive();

        $this->app['config']->set('auth.providers.staff', [
            'driver' => 'eloquent',
            'model'  => Staff::class,
        ]);

        $this->app['config']->set('auth.guards.staff', [
            'driver'   => 'session',
            'provider' => 'staff',
        ]);
    }
}
