<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class RootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $db = \DB::table('admin');
        $where = [];
        if($request->has('name')){
            $name = $request->input('name');
            $db->where("account","like","%{$name}%");
            $where[] = $name;
        }
        $list = $db->paginate(6);
        return view('admin.root.child',['list'=>$list,'where'=>$where]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    //启用管理员
    public function edit($id)
    {
        Admin::where('id',$id)->update(['status'=>3]);
        return redirect('admin/root/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //禁用管理员
    public function update(Request $request, $id)
    {
        $admin = new Admin();
        $admin->where('id',$id)->update(['status'=>4]);
        return redirect('admin/root/');
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
