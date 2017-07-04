<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
     public function upload(Request $request)
    {
    	//获取影院名称
    	$shopname=$request->input("shopname");
    	//获取城市
    	$city=$request->input("city");
    	//获取地区
    	$region=$request->input("region");
    	//获取地址
    	$address=$request->input("address");
    	//获取电话
    	$phone=$request->input("phone");
    	//获取法人代表
    	$legal=$request->input("legal");
    	//获取身份证信息
    	$id_card=$request->input("id_card");
    	//获取信息
    	$shopid=session('sigup')->id;
    	// print_r($shopid);
    	// die();
    	//$list=\DB::table('shop_detail')->where("id",$shopid)->first();
        //判断是否是一个有效上传文件
        // if ($request->file('licence') && $request->file('licence')->isValid()) {
        //     //获取上传文件信息
        //     $file = $request->file('licence');
        //     $ext = $file->extension(); //获取文件的扩展名
        //     print_r($ext);
        //     die();
        //     //随机一个新的文件名
        //     $filename = time().rand(1000,9999).".".$ext;
        //     //移动上传文件
        //     $file->move("./upload/",$filename);
        // }
        $list=\DB::table("shop_detail_copy")->where('cid',$shopid)->insertGetId(
        	['shopname'=>$shopname,'region'=>$legal]
        	);
    }
}
