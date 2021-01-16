<?php

namespace IvaoBrasil;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class IvaoBrasilDatabaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadMigrations();
        $this->loadFactories();
    }

    private function loadMigrations()
    {
        $mainPath = __DIR__ . '/../migrations/';
        $directories = glob($mainPath . '/*', GLOB_ONLYDIR);
        $paths = array_merge([$mainPath], $directories);
        $this->loadMigrationsFrom($paths);
    }

    private function loadFactories()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            return str_replace('IvaoBrasil\\Models\\', 'IvaoBrasil\\Factories\\', $modelName) . 'Factory';
        });
    }
}
