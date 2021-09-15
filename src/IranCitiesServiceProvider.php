<?php

namespace HKaghazi\IranCities;

use Illuminate\Support\ServiceProvider;

class IranCitiesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Cities', function ($app) {
            return new \HKaghazi\IranCities\IranCities();
        });
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->publishes([
            __DIR__ . '/../database/seeders' => base_path('database/seeders')
        ], 'iran-cities-seeders');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
