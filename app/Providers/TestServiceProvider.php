<?php

namespace App\Providers;

use App\Brady\DemoInterface;
use App\Brady\DemoProvider;
use App\Brady\DemoProvider2;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
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
        //$this->app->bind(DemoInterface::class, DemoProvider2::class);
        $this->app->bind(DemoInterface::class, DemoProvider::class);
    }
}
