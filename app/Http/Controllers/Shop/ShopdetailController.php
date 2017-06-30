<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shopdetail;
use Illuminate\Validation\Rule;

class ShopdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //加载商户页面

		$shopdetail=$request->session()->all();
		$name=$request->session()->get('adminuser')->name;
		$shopdetail=\DB::table("shop_detail")->where('name',$name)->first();
		return view("shop.shopdetail.index",compact("shopdetail"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.shopdetail.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = \DB::table("shop_detail")->where("id",$id)->first();
		return view("shop.shopdetail.edit",["vo"=>$list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

		$this->validate($request, [
          
			'phone' => 'required|numeric',
        ]);
        $data = $request->only("shopname","phone","legal","id_card","licence");

		$this->validate($request, [
          'phone' => 'required|numeric',
        ]);
        $data = $request->only("shopname","phone","legal","id_card");

		
        $shop_detail = \DB::table("shop_detail")->where("id",$id)->update($data);
		
        if($shop_detail>0){
            return redirect('shop/shopdetail');
        }else{
            return back()->with("err","修改失败!");
        }
    }
	public function upLoad(Request $request, $id)
	{
		//判断是否有上传
        if($request->hasFile("upload")){
            //获取上传信息
            $file = $request->file("upload");
            //确认上传的文件是否成功
            if($file->isValid()){
                //$picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $file->move("./upload/",$filename);
                                
                return response($filename); //输出
                exit();
            }
        }
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
