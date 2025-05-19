<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Share settings globally
        $data1 = Setting::pluck('value', 'key');
        View::share('setting', $data1);

        // Share social data globally
        $data2 = Social::whereStatus(1)->oldest('order')->get();
        View::share('socialdata', $data2);

        // Share categories ONLY for views that need it
        View::composer(['frontend.home.index', 'frontend.category.products'], function ($view) {
            $categories = Category::whereNull('parent_id')
                ->with('children.children')
                ->get();
            $view->with('categories', $categories);
        });

        // Use Bootstrap for pagination
        Paginator::useBootstrap();
    }
}
