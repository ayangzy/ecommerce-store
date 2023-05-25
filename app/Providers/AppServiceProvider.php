<?php

namespace App\Providers;

use App\Services\EventUnlockingService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\EventUnlockingInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(EventUnlockingInterface::class, EventUnlockingService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
