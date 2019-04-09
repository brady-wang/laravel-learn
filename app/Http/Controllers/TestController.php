<?php

namespace App\Http\Controllers;

use App\Brady\DemoInterface;
use App\Events\Register;
use App\Events\User;
use App\Facades\Foo;
use App\Lib\Tools\FooBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index(DemoInterface $demo )
    {
//        event(new User(new \App\Models\User(),8));
//        return "注册成功";
        dd($demo->demo1());
    }

    public function test()
    {
        echo (Foo::get());
    }


}
