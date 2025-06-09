<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Darryldecode\Cart\Facades\CartFacade as Cart; // ✅ Import Cart

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Global Setting
        $data1 = Setting::pluck('value', 'key');
        View::share('setting', $data1);

        // Global Social
        $data2 = Social::whereStatus(1)->oldest('order')->get();
        View::share('socialdata', $data2);

        // Category Menu only for frontend layout
        View::composer('layouts.frontend.*', function ($view) {
            $categories = Category::whereNull('parent_id')
                ->with('children.children')
                ->get();
            $view->with('categories', $categories);
        });

        // ✅ Cart Items for All Views
        View::composer('*', function ($view) {
            $view->with('cartItems', Cart::getContent());
        });

        // ✅ Bootstrap Pagination
        Paginator::useBootstrap();
    }
}
