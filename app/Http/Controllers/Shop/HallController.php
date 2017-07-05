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
		$hall=\DB::table('hall')->where("cid",$list)->simplePaginate(6);
		//判断并封装搜索条
		return view("shop.hall.index",compact("hall"));
	}
	//添加影厅
	public function create()
	{
		//获取所有的影厅信息
		$hall=\DB::table("hall")->get();
		return view('shop.hall.create',compact("hall"));
	}
	//执行添加
	public function store(request $request)
	{
		$cid=session('adminuser')->id;
		$this->validate($request, [
            'title' => Rule::unique('hall')->where("cid",$cid),
        ]);

		//获取要添加的数据
		$title=$request->input("title");
		$number=$request->input("number");
		$layout=$request->input("layout");
		//执行添加
		$id=\DB::table("hall")->insertGetId(
			["cid"=>$cid,"title"=>$title,"number"=>$number,"layout"=>$layout]
			);
		//添加判断
		if($id>0){
            $info = "影厅添加成功！";
        }else{
            $info = "影厅添加失败！";
        }
        return redirect("shop/hall")->with("err",$info);
	}

	public function edit(request $request,$id)
	{
		$list=\DB::table("hall")->where('id',$id)->first();
		return view('shop.hall.edit',["vo"=>$list]);
	}

	 public function update(Request $request, $id)
    {
        //获取影厅名称
        $title=$request->input("title");
       
        //获取影厅座位数量
        $number=$request->input("number");
       
        //获取影厅布局
        $layout=$request->input("layout");
        $hall = \DB::table("hall")->where("id",$id)->update(
            ['title'=>$title,"number"=>$number,"layout"=>$layout]
            );
		
       //添加判断
		if($hall>0){
            $info = "影厅修改成功！";
        }else{
            $info = "影厅修改失败！";
        }
        return redirect("shop/hall")->with("err",$info);
    }
}

