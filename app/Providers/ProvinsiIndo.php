<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Provinsi;
class ProvinsiIndo extends ServiceProvider
{
    /**
     * Register services.
     *
    //  * @return void
     */
    // public function register()
    // {
    //     //
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with('prov_array', Provinsi::all());
        });
    }
}
