<?php

namespace App\Http\Controllers;

use App\Events\Register;
use App\Events\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        event(new User(new \App\Models\User(),8));
        return "注册成功";
    }


}
