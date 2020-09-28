<?php

namespace IvaoBrasil;

use Illuminate\Support\ServiceProvider;

class IvaoBrasilDatabaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}