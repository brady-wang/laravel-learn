<?php

namespace App\Providers;

use App\Lib\Tools\Area;
use Illuminate\Support\ServiceProvider;

class AreaServiceProvider extends ServiceProvider
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
        $this->app->bind("area",function(){
        	return new Area();
        });
    }
}
