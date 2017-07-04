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
		$name = $request->input("name");
		$password = $request->input("password");
		$shop = \DB::table("shop_detail")->where("name",$name)->first();
		if(!empty($shop)){
			//判断密码
			if($password==$shop->password){
				//存储session跳转页面
				$list=session()->put("adminuser",$shop);
				
				return redirect("shop");
				//echo "测试成功!";
			}
		}
		return back()->with("msg","账号或密码错误！");
	}

	public function Logout(Request $request)
	{
		$request->session()->pull('adminuser');
		//$request->session()->forget('adminuser');
		return redirect("/shop");
	}
}
