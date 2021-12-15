<?php

namespace Erendi\Location;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('erendi-lokasi',function(){
            return new Lokasi();
        });
        $this->app->make('Erendi\Location\LocationController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require  __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'location');
        $this->publishes([
            __DIR__ . '/../assets' => public_path('vendor/location'),
        ], 'public');
        $this->publishes([
            __DIR__ . '/Views'   => resource_path('views/vendor/location'),
        ], 'view');
    }
}
