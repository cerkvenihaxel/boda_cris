<?php

namespace App\Providers;

use Aerni\Spotify\Spotify;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $defaultConfig = config('spotify');

        $this->app->singleton('spotify', function () use ($defaultConfig) {
            return new Spotify($defaultConfig);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
