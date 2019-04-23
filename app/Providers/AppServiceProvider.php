<?php

namespace App\Providers;

use App\About;
use App\Catagory;
use App\City;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('dashboard.layouts.scripts' , function ($view){
            $view->with('location' , About::lngLat());
        });
        view()->composer('users.layouts.scripts' , function ($view){
            $view->with('location' , About::lngLat());
        });
        view()->composer('users.layouts.catagories' , function ($view){
            $view->with('catagories' , Catagory::catagories());
        });
        view()->composer('users.layouts.footer' , function ($view){
            $view->with('about' , About::footerData());
        });

        view()->composer('users.layouts.slider' , function ($view){
            $view->with('catagories' , Catagory::catagories());
        });
        view()->composer('users.layouts.slider' , function ($view){
            $view->with('cities' , City::cities());
        });
    }
}
