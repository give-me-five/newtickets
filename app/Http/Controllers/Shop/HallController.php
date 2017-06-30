<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hall;

class HallController extends Controller
{
	//加载影厅信息
    public function index(request $request)
	{
		//获取登录用户的id
		$list=$request->session()->get('adminuser')->id;
		//获取登录者对应的影厅sid
		$hall=\DB::table('rel_shop')->where("sid",$list)->pluck('hid');
		//获取登录者对应的影厅信息
		$lt=\DB::table('hall')->whereIn("id",$hall)->get();
		//$hall=Hall::where("id",1)->first();
		return view("shop.hall.index",compact("lt"));
	}
	//添加影厅
	public function create()
	{
		return view('shop.hall.create');
	}
	public function edit(request $request,$id)
	{
		return view('shop.hall.edit');
	}
}
