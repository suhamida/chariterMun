<?php

namespace App\Providers;

use App\Models\backend\BlogCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
    public function boot(): void
    {
//        View::share('name','bitm');
//        View::share('name',BlogCategory::first());
        //
        View::composer('frontend.includes.header-bottom',function ($view){
            $view->with('blogCategories', BlogCategory::where('status', 1)->get());
        });
        Schema::defaultStringLength(191);

    }
}
