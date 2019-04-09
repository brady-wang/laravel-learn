<?php

namespace App\Providers;

use App\Lib\Tools\FooBar;
use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('foo',function(){
            return new FooBar();
        });
    }
}
