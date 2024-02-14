<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
        Blade::if('env', function($value){ //@env('local)
            //Tra ve gia tri boolen
            if(config('app.env')== $value){
                return true;
            }
            return false;
        });
    }
}
