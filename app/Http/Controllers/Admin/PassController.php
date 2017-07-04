<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class PassController extends Controller
{
    public function index()
    {
        return view("admin.pass.index");
    }
    public function update(Request $request)
    {
        //获取原密码
        $rpass = $request->input("rpass");
        //判断原密码是否正确
        if(decrypt(session("admin")->pass) !== $rpass){
            return back()->with("msg","原密码不正确");
        }
        //获取新密码
        $pass = encrypt($request->input("pass"));
        //执行修改密码
        $info = Admin::where("id",session("admin")->id)->update(["pass"=>$pass]);
        if($info){
            $request->session()->forget("admin");
            echo "<script>alert('修改成功，请重新登录')</script>";
            echo "<script>window.location.href='/admin/login'</script>";
        }

    }
}
