<?php

namespace App\Http\Controllers;
//导入验证码命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Session;
use Request as ip;
//会员登录/注册控制器
class LoginController extends Controller
{

    //加载登录模板
    public function index()
    {
        return view("login.index");
    }
    //加载手机登录模板
    public function phone()
    {
        return view("login.phone");
    }
    //执行登录
    public function doLogin(Request $request)
    {
        //获取验证码
        $mycode = $request->input('mycode');
        $code = session()->get('code');
        //判断验证码是否正确
        if($mycode != $code){
            return back()->with('msg',"验证码错误");
        }
        //获取密码
        $password = $request->input('password');
        //获取用户名
        $name = $request->input('name');
        //判断用户名是否存在
        $users = Users::where('phone',$name)->first();
        if($users){
            //判断密码是否正确
            if (\Hash::check($users->password, $password)) {
                $status = User::where('id',$users->uid)->value('status');
                //如果是1,有权限
                if($status == 1 ){
                    //存储用户信息
                    session()->put('users',$users);
                }else{
                    //如果状态不是1,被禁用
                    echo "<script>alert('您违反相关规定,账号已被禁用')</script>";
                    return back()->with();
                }
            }else{
                return back()->with('msg','账号或密码错误');
            }
        }else{
            return back()->with('msg','账号或密码错误');
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
