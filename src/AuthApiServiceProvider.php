<?php

namespace ElMag\AuthAPI;

use Illuminate\Support\ServiceProvider;

class AuthApiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    public function register()
    {
        //
    }
}
