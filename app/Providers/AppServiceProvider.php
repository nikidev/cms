<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Category;
use App\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('*', function ($view) {
            $view->with('categoriesnav', Category::where('parent_id','=','0')->get());
        });

        view()->composer('*', function ($view) {
            $view->with('articles', Article::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
