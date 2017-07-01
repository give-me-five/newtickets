<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Validation\Rule;

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
		$lt=\DB::table('hall')->whereIn("id",$hall)->simplePaginate(5);
		//判断并封装搜索条件
	
		//$hall=Hall::where("id",1)->first();
		return view("shop.hall.index",compact("lt"));
	}
	//添加影厅
	public function create()
	{
		return view('shop.hall.create');
	}
	//执行添加
	public function store(request $request)
	{

		$this->validate($request,[
				'title'=>'required|filled|max:255',
				'number'=>'required|integer',
			]);
		//获取要添加的数据
		$list=$request->only("title","layout","number");
		//执行添加
		$id=\DB::table("hall")->insertGetId($list);
		//添加判断
		if($id>0){
            $info = "影厅添加成功！";
        }else{
            $info = "影厅添加失败！";
        }
        //获取添加影厅的名称
        $hallid=$request->input('title');
        //获取添加后影厅对应的id
        $table=\DB::table('hall')->where('title',$hallid)->value('id');
        //获取登录者的id
		$list=session('adminuser')->id;
		//把获取的影厅id和影院id添加到rel_shop关联表中
		$rel_shop=\DB::table('rel_shop')->insertGetId(
			["sid"=>$list,"hid"=>$table]
			);
        //return view("admin.stu.info",['info'=>$info]);
        return redirect("shop/hall")->with("err",$info);
	}

	public function edit(request $request,$id)
	{
		
		return view('shop.hall.edit');
	}
}
