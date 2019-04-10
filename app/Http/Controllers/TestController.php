<?php

namespace App\Http\Controllers;

use App\Brady\DemoInterface;
use App\Events\Register;
use App\Events\User;
use App\Facades\Foo;
use App\Facades\Area;
use App\Lib\Tools\FooBar;
use App\Providers\FooServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        //echo $foo->get();

        echo (Foo::get());
        //$foo = app()->make("foo");
        //dd($foo->get());
    }

    //测试area服务提供者
    public function test2(Area $area)
    {
	    dd($area->get());
    }

    public function test3()
    {
		$res = Area::get();
		dd($res);
    }


}
