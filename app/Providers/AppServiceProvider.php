<?php

namespace App\Providers;

use App\Models\Admin;
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
        $this->app['config']->set('auth.providers.staff', [
            'driver' => 'eloquent',
            'model'  => Admin::class,
        ]);

        $this->app['config']->set('auth.guards.staff', [
            'driver'   => 'session',
            'provider' => 'staff',
        ]);
    }
}
