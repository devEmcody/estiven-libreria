<?php

namespace Estiven\LaravelModules;

use Illuminate\Support\ServiceProvider;

class LaravelModulesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../stubs/Modules' => app_path('Modules'),
        ], 'modules-base');
    }

    public function register()
    {
        //
    }
}
