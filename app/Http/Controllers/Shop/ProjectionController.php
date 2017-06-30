<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projection;

class ProjectionController extends Controller
{
    public function index(request $request)
	{
		//获取商户登录用户的id
		$list=$request->session()->get('adminuser')->id;
		//获取当前商户登录者对应的影厅sid
		$hall=\DB::table('rel_shop')->where("sid",$list)->pluck('hid');
		//获取登录者对应的影厅信息
		//$lt=\DB::table('hall')->whereIn("id",$hall)->get();
		$lt=\DB::table('rel_shop')->where("sid",$list)->pluck("fid");
		foreach($lt as $vo)
		{
			//echo $vo;

			$tad[]=\DB::table('projection')->where("fid",$vo)->get();
		}
		 echo "<pre>";
		 print_r($tad);
		 die();
		//$projection=Projection::all();
		return view("shop.projection.index",compact('tad'));

			$tad[]=\DB::table('film')->where("id",$vo)->get();
		}
		echo "<pre>";
		print_r($tad);
		die();
		//$projection=Projection::all();
		return view("shop.projection.index",compact('projection'));

	}
}
