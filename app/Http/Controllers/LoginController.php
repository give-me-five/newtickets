<?php

namespace App\Http\Controllers;
//导入验证码命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Redis as Redis;
//引入阿里大鱼命名空间
use iscms\Alisms\SendsmsPusher as Sms;
use Request as ip;
//会员登录/注册控制器
class LoginController extends Controller
{

    public function __construct(Sms $sms)
    {
        $this->sms = $sms;
    }
    //加载登录模板
    public function index()
    {
        return view("login.index");
    }
    //执行登录
    public function doLogin(Request $request)
    {
        //获取用户名
        $name = $request->input('name');
        //判断账号是否为空
        if(empty($name)){
            return back()->with("msg","账号不能为空");
        }
        //获取密码
        $password = $request->input('password');
        //判断密码是否为空
        if(empty($password)){
            return back()->with("msg","密码不能为空");
        }
        //获取验证码
        $mycode = $request->input('code');
        $code = session()->get('code');
        //判断验证码是否正确
        if($mycode != $code){
            return back()->with('msg',"验证码错误");
        }
        //判断用户名是否存在
        $users = Users::where('phone',$name)->first();
        if($users){
            //判断密码是否正确
            if (decrypt($users->password) == $password) {
                $list = new User();
                $status = $list::where('id',$users->uid)->first();
                //如果是1,有权限
                if($status->status == 1 ){
                    //存储用户信息
                    session()->put('users',$users);
                }else{
                    //如果状态不是1,被禁用
                    echo "<script>alert('您违反相关规定,账号已被禁用')</script>";
                    return back()->with();
                }
                //判断是否为首次登陆
                if(empty($status->firsttime)){
                    \DB::table("users_detail")->where("id",$users->uid)->update(["firsttime"=>time()]);
                }else{
                    \DB::table("users_detail")->where("id",$users->uid)->update(["lasttime"=>time()]);
                }
                //获取登陆者ip地址
                $ip = ip::getClientIp();
                \DB::table("users")->where("id",$users->id)->update(["login_ip"=>$ip]);
                return redirect()->back();
                return redirect("/admin/users/child");
            }else{
                return back()->with('msg','账号或密码错误');
            }
        }else{
            return back()->with('msg','账号或密码错误');
        }
    }
    //加载手机登录模板
    public function phone()
    {
        return view("login.phone");
    }
    //执行手机验证登录
    public function doPhone(Sms $sms)
    {
        $phone = "18712753959";
        $name = "学习用";
        $num = rand(100000,999999);
        $smsParams = [
            'code'    => $num,
            'product' => $phone
        ];
        $content = json_encode($smsParams);
        $code = 'SMS_75835011';
        $data = $sms->send($phone, $name, $content, $code);
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
