<?php

namespace App\Http\Controllers;
//导入验证码命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
//会员登录/注册控制器
class LoginController extends Controller
{

    //加载登录模板
    public function index()
    {
        return view("login.index");
    }
    //加载注册模板
    public function register()
    {
        return view("login.register");
    }
    //执行登录
    public function doLogin(Request $request)
    {
       
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
}
