<?php

namespace IvaoBrasil;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class IvaoBrasilDatabaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
