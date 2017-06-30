<?php

namespace App\Http\Controllers;
//导入验证码命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use App\Models\Reg;
use Illuminate\Support\Facades\Hash;
use Session;

class RegController extends Controller
{
    public function index()
    {
        return view("reg.index");
    }
    //验证码
    public function code()
    {
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session()->put('code', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
    //执行登录
    public function doLogin(Request $request)
    {
        //判断用户名开始
        //获取用户名
        $phone = $request->input("phone");
        $info = \DB::table('users')->where("phone","=",$phone)->first();
        if($info){
            //用户名存在
            return 1;
        }
        //判断是否合法
        $info = preg_match("/^1[34578]\d{9}&/",$phone);
        if($info){
            //用户名不合法
            return 2;
        }else{
            //用户名可用
            echo 3;
        }
        //判断用户名结束

        //判断密码开始
        //获取用户输入密码
        $password = $request->input("password");
        $info = preg_match("/^\w_{6,20}$/",$password);
        if($info){
            //密码不合法
            return 4;
        }else{
            // 密码可用
            echo 5;
        }
        //密码验证结束

        //密码二次验证
        $password2 = $request->input("password2");
        $password = $request->input("password");
        if($password != $password2){
            //密码不一致
            return 6;
        }else{
            //密码一致
            echo 7;
        }
        //二次密码验证结束

        $mycode = $request->input("code");
        $code = Session("code");
        if($mycode != $code){
            return back()->with("msg","验证码错误");
        }

        $password = md5($password);

        $password = \Hash::make($request->input('password'));

        $id  = \DB::table('users')->insertGetId(['phone'=>$phone,'password'=>$password]);
        if($id>0){
            $reg = new Reg();
            $reg->where("id",$id)->update(['uid'=>$id]);
            \DB::table('users_detail')->insert(['id'=>$id]);
            return redirect("reg/success");
        }else{
            return redirect("reg/lose");
        }
    }
    //注册成功
    public function success()
    {
        return view("reg.success");
    }

    //注册失败
    public function lose(){
        return view("/reg/lose");
    }
}
