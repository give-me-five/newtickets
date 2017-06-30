<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Shopdetail;

class SigupController extends Controller
{
    //加载注册页面
	public function index()
	{
		return view("shop.login.sigup");
	}

	//执行注册判断
	public function registered(Request $request)
	{
		$myname=$request->input('myname');
		$name=Shopdetail::where('name',"=",$myname);
		if(!empty($name)){
			return 1;
		}
		//执行注册判断
		$name=preg_match("/[0-9,a-z,A-Z]{16,18}/",$myname);
		if($name){
			return 2;
		}else{
			return 3;
		}
		
		
		
	}

}
