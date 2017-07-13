<?php

namespace App\Http\Controllers;
use App\Models\Cinema;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Hall;
use App\Models\Projection;
use App\Models\Shopdetail;
class OrderController extends Controller
{
    //选座
	public function choose($shopname,$key,$title)
	{
		//获取影院
		$ctit = Cinema::where("shopname",$shopname)->first();
		//获取影厅
		$hfirst = Hall::where("title",$key)->first();
		//获取影片
		$fmfirst = Film::where("title",$title)->first();
		//获取影片id
		$id = Film::where("title",$title)->value("id");
		//获取影片放映时间
		$ptime = Projection::where("fid",$id)->first();
		return view("order.layout",compact("fmfirst","hfirst","ctit","ptime"));
	}

	//确认订单
	public function orderAdd(Request $request)
	{
		/*  传递过来的参数     座位信息($_POST['seatinfo'])  放映信息($_POST['pid'])
		 *
		 * */
		echo '<pre>';
		var_dump($_POST);
		die();
		//传过来参数   座位信息    uid session里面  整个场次信息
		//存哈希    座位信息 +场次信息
		//取哈希  存链表

		//echo 1;
	}
	//生成二维码
	public function qrcode($shopname,$filmtitle,$halltitle,$time,$counter,$total,$seat)
	{
		return view("order.qrcode",compact("shopname","filmtitle","halltitle","time","counter","total","seat"));
	}
}
