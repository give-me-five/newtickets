<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projection;
use Illuminate\Validation\Rule;

class ProjectionController extends Controller
{
	
	public function index()
	{
		//获取登录商家的id	
		$id=session("adminuser")->id;

		//获取放映信息
		$list=\DB::table("projection")->where("cid",$id)->get();
		
		//获取放映影片对应id
		$filmid=\DB::table("projection")->where("cid",$id)->pluck('fid');
		
		//获取影厅影片
		$fo=[];
		foreach($filmid as $film){
			$fo[]=\DB::table("film")->where("id",$film)->value("title");
			
		}
		//获取放映影厅对应id
		$hallid=\DB::table("projection")->where("cid",$id)->pluck('hid');

		//获取影厅信息
		$ho=[];
		foreach($hallid as $hall){
			$ho[]=\DB::table("hall")->where("id",$hall)->value("title");
		}

		//加载视图
		return view("shop.projection.index",compact("list","fo","ho"));
	}

	public function edit(Request $Request,$id)
	{
		//获取该影片
		$prolist=\DB::table("projection")->where("id",$id)->first();
		
		//获取影片所有的影片
		$film=\DB::table("film")->where("status",1)->get();
		
		//获取用户拥有的所有影厅
		$session=session("adminuser")->id;
		$halist=\DB::table("hall")->where("cid",$session)->get();
	
		return view("shop.projection.edit",compact("prolist","film","halist"));
	}
	public function update(Request $request,$id)
	{

		$cid=session('adminuser')->id;
		//获取修改后的影片信息
		$film=$request->input("film");
			
		//获取修改后影片在影片信息中对应的id
		$fid=\DB::table("film")->where("title",$film)->value("id");

		//获取放映时间
		$datetime=$request->input("datetime");
		//获取影片价钱
		$price=$request->input("price");
		//获取座位信息
		$seatinfo=$request->input("seatinfo");
		$id=\DB::table("projection")->where("id",$id)->update(
			['fid'=>$fid,"datetime"=>$datetime,"price"=>$price,"seatinfo"=>$seatinfo]
			);
		return redirect("shop/projection");

	}

	public function create()
	{
		$id=session('adminuser')->id;
		//获取影厅信息
		$hall=\DB::table("hall")->where("cid",$id)->get();
		//获取影片信息
		$film=\DB::table("film")->where("status",1)->get();
		
		return view("shop.projection.create",compact("hall","film"));
		
	}

	public function store(Request $request)
	{
		$cid=session('adminuser')->id;
		// $this->validate($request, [
  //           'endtime' => Rule::unique('hall')->where("cid",$cid),
  //       ]);

		//获取影厅信息
		$hall=$request->input("hall");
		$hid=\DB::table("hall")->where("title",$hall)->value("id");
		//获取影片信息
		$film=$request->input("film");
		$fid=\DB::table("film")->where("title",$film)->value("id");
		//获取放映时间
		$datetime=$request->input("datetime");
		//获取结束时间
		$endtime=$request->input("endtime");
		//获取座位数量
		$seatinfo=$request->input("seatinfo");
		//获取票价
		$price=$request->input("price");

		$list=\DB::table("projection")->insertGetId(
			["fid"=>$fid,"cid"=>$cid,"hid"=>$hid,"datetime"=>$datetime,"endtime"=>$endtime,"seatinfo"=>$seatinfo,"price"=>$price]
			);
		 //添加判断
		if($list>0){
            $info = "影片信息添加成功";
        }else{
            $info = "影片信息添加失败";
        }
        return redirect("shop/projection")->with("err",$info);
		
	}
}