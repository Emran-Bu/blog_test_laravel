<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\View\Components\OurCompoent;
use Illuminate\Support\ServiceProvider;
use App\view\Components\SinglePost;

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
        //
        Blade::component('xyz', OurCompoent::class);
        // singlePost
        Blade::component('single-post', SinglePost::class);
    }
}
