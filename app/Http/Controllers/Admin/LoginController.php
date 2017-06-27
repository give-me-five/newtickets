<?php

namespace App\Http\Controllers\Admin;

use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;

class LoginController extends Controller
{
    //后台登录页面
    public function login()
    {
        return view("admin.login");
    }
    //执行登录
    public function doLogin()
    {
       // return view("admin.users.index");
        return redirect('admin/users/child');
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
