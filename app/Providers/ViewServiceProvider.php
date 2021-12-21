<?php

namespace App\Providers;
use App\Models\Category;
use Spatie\Permission\Models\Role;
use App\Models\State;
use App\Models\Country;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['products.fields', 'products.table', 'products.show_fields'], function ($view) {
            $categoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['users.fields'], function ($view) {
            $roleItems = Role::pluck('name','name')->toArray();
            $view->with('roleItems', $roleItems);
        });
        //
    }
}