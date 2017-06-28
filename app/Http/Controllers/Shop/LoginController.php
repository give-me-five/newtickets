<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //加载后台页面
	public function index()
	{
		return view("shop.login.index");
	}

	//执行登录
	public function doLogin(Request $request)
	{
		//执行登陆判断
		$email = $request->input("email");
		$password = $request->input("password");
		//获取对应用户信息
		$user = \DB::table("users")->where("email",$email)->first();
		if(!empty($user)){
			//判断密码
			if(md5($password)==$user->password){
				//存储session跳转页面
				session()->set("adminuser",$user);
				return redirect("admin");
				//echo "测试成功!";
			}
		}
		return back()->with("msg","账号或密码错误！");
	}

	//注册
	public function sigup()
	{
		return view("shop.login.sigup");
	}
}
