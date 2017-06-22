<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Schema;
use App\Task;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(800);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }
}
