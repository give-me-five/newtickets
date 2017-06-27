<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UsersController extends Controller
{
    //加载主页
    public function index()
    {
        return view("admin.users.index");
    }

    //模板继承
    public function child()
    {
        $list = Users::all();
        return view("admin.users.child",["list"=>$list]);
    }
}
