<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //设置表名
    protected $table = "users";

    //设置主键
    protected $primaryKey = "id";

}
