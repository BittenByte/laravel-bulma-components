<?php

namespace BittenByte\LaravelBulmaComponents;

use Illuminate\Support\ServiceProvider;

class LaravelBulmaComponentsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'bulma');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/bulma'),
        ], 'views');
    }

    /**
     * Register any package services.
     */
    public function register()
    {
    }
}
