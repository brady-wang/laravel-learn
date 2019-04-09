<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/9
 * Time: 16:49
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "t_users";
    protected $primaryKey = "user_id";
}