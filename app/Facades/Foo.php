<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Foo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'foo';
    }
}