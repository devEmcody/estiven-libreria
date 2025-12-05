<?php

namespace Devemcody\EstivenLibreria;

use Illuminate\Support\ServiceProvider;

class LaravelServicesProvider extends ServiceProvider
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
