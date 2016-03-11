<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Acumatica\AcumaticaClient;

class AcumaticaClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App/Acumatica/AcumaticaClient', function($app) {
            return new AcumaticaClient();
        });
    }
}
