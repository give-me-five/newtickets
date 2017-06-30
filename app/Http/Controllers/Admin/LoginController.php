<?php

namespace App\Http\Controllers\Admin;

use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;
use App\Models\Shop_Detail;

class LoginController extends Controller
{
    //后台登录页面
    public function login()
    {
        return view("admin.login");
    }
    //执行登录
    public function doLogin(Request $request)
    {


        session('adimin','');

       // return view("admin.users.index");
        return redirect('admin/users/child');

        //获取管理员账号
        $account = $request->input('account');
        //判断管理员账号是否存在
        if(!empty($account)){
            //获取密码
            $pass = \Hash::make($request->input('pass'));
            //获取验证码
            $mycode = $request->input('code');
            $code = session()->get('code');
            //判断验证码是否相等
            if($mycode != $code){
                return back()->with('msg',"验证码错误");
            }
            //根据管理员账号获取管理员信息
            $info = Login::where('account',$account)->first();
            if($info && $info->status == 2){
                //判断密码是否相等
                if($info->pass == $pass){
                    session()->put("adminusers",$info);
                    //跳转后台主页
                    //return redirect('admin/index');
                    return redirect('admin/users/child');
                }else{
                    return back()->with('msg',"账号或密码错误");
                }
            }else {
                return back()->with('msg', "账号或密码错误");
            }
        }

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
