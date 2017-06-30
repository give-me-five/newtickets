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
		$myname=$request->input('myname');
		$name=Shopdetail::where('name',"=",$myname);
		if(!empty($name)){
			//用户名存在
			return 1;
		}
		//执行注册判断
		$name=preg_match("/^[0-9,a-z,A-Z]{5,20}$/",$myname);
		if($name){
			//用户名不存在
			return 2;
		}else{
			//用户名可用
			echo 3;
		}
		
		//判断密码开始
        //获取用户输入密码
        $mypassword = $request->input("mypassword");
        $password = preg_match("//^[0-9,a-z,A-Z]{6,16}$/",$mypassword);
        if($password){
            //密码不合法
            return 4;
        }else{
            // 密码可用
            echo 5;
        }
        //密码验证结束

        //密码二次验证
        $twopassword = $request->input("twopassword");
        $password = $request->input("mypassword");
        if($password != $twopassword){
            //密码不一致
            return 6;
        }else{
            //密码一致
            echo 7;
        }
        //二次密码验证结束
		
		//判断手机号
		$myphone=$request->input("myphone");
		$phone=preg_match("//^[1]{1}[3,4,5,6,7,8,9]{1}[0-9]{9}$/",$myphone);
		if($phone){
			//手机号正确
			return 8;
		}else{
			//手机号不可用
			return 9;
		}
		//判断验证码
        $mycode = $request->input("mycode");
        $yanzhengma = $request->session()->get('phrase');
        if($mycode != $yangzhengma){
            return back()->with("msg","验证码错误");
        }
        $password = md5($password);
        $id  = \DB::table(shop_detail)->insertGetId(['name'=>$name,'phone'=>$phone,'password'=>$password]);
       
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
