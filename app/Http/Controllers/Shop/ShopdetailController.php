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

        $data = $request->only("shopname","phone","legal","id_card");

		
        $shop_detail = \DB::table("shop_detail")->where("id",$id)->update($data);
		
        if($shop_detail>0){
            return redirect('shop/shopdetail');
        }else{
            return back()->with("err","修改失败!");
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
