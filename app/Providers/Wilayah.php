<?php

namespace App\Providers;
use App\Kabupaten;
use Illuminate\Support\ServiceProvider;

class Wilayah extends ServiceProvider
{
    // /**
    //  * Register services.
    //  *
    //  * @return void
    //  */
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
            $view->with('kab_array', Kabupaten::all());

        });
    }
}
