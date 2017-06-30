<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Shopdetail;


use Gregwar\Captcha\CaptchaBuilder;


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

       
	}
	//加载验证码
	 public function getCode()
   {
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session()->put('mycode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();

   }
   
   public function region($upid=0)
   {
	   $list = \DB::table("shop_region")->where("upid",$upid)->get();
       return response()->json($list);
   }

}
