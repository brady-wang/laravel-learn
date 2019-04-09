<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2019/4/9
 * Time: 20:59
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Area extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'area';
	}

}