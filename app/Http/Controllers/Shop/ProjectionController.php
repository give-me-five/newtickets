<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projection;

class ProjectionController extends Controller
{
	public function index()
	{
		//获取登录商家的id
		$id=session("adminuser")->id;
		//获取放映信息
		$list=\DB::table("projection")->where("cid",$id)->get();
		//获取影厅影片
		$filmid=\DB::table("projection")->where("cid",$id)->pluck('fid');
		foreach($filnid as $vo){
			$film=\DB::table('film')->where("id",$filmid)->pluck('title');
			print_r($film);
			die();
		}
		
		//加载视图
		return view("shop.projection.index",compact("list"));
	}
}