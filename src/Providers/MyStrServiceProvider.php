<?php

namespace Yhy\Str\Providers;

use Illuminate\Support\ServiceProvider;
use Yhy\Str\MyStr;

class MyStrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MyStr',function ($app){
            return new MyStr();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
