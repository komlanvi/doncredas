<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Gestion\ImageGestionInterface', 'App\Gestion\ImageGestion');
        $this->app->bind('App\Repositories\EmailRepositoryInterface', 'App\Repositories\EmailRepository');
    }
}
