<?php

namespace App\Http\Controllers;
use App\Models\Cinema;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Hall;
use App\Models\Projection;
use App\Models\Shopdetail;
use Illuminate\Support\Facades\Redis as Redis;
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
		//echo '<pre>';
		//var_dump($_POST);
		//die();
		//传过来参数   座位信息    uid session里面  整个场次信息
		//存哈希    座位信息 +场次信息
		//取哈希  存链表

		//echo 1;
	//return redirect('/');
			//选座
	}
	public function layout($fid,$hid,$pid)
	{
		$fmfirst = Film::where('id',$fid)->first();//影片
		$hfirst = Hall::where('id',$hid)->first();//查询影厅
		$cti = Shopdetail::where('id',$hfirst->cid)->first();//查询影厅对应的影院
		$ctit = \DB::table("shop_detail_copy")->where("id",$hfirst->cid)->first();
		$ptime = Projection::where('id',$pid)->first();//放映信息

		//$layout = "{\"0\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"],\"1\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"],\"2\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"],\"3\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"],\"4\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"],\"5\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"],\"6\":[\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"a\",\"_\",\"_\",\"a\",\"a\",\"a\",\"a\",\"a\"]}";
		$layout  = $hfirst['layout'];
		$layout =json_decode($layout);
		return view("home.layout",compact('fmfirst','hfirst','ctit','ptime','layout'));
	}
	//确认订单

}
