<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->headerMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Menu for users
     */
    public function headerMenu()
    {
        View::composer('layouts.header', function ($view) {
            $view->with('categories', Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }
}
