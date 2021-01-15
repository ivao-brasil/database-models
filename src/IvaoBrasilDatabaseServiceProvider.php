<?php

namespace IvaoBrasil;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class IvaoBrasilDatabaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadMigrations();
    }

    private function loadMigrations()
    {
        $mainPath = __DIR__ . '/../migrations/';
        $directories = glob($mainPath . '/*', GLOB_ONLYDIR);
        $paths = array_merge([$mainPath], $directories);
        $this->loadMigrationsFrom($paths);
    }
}
