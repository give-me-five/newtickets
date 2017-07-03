<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;


class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id','desc')->paginate(10);
        return view("admin.news.news_show",compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("admin.news.news_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('title','description','content');
        $data['inputtime'] = time();
        $data['updatetime'] = time();
        $data['status'] = 0;

       
        $file = $request->file('thumb');
        
        $filename = $file->extension();  
        //print_r($filename);    
        // 最后创建 image 实例
        $manager = new ImageManager(array('driver' => 'imagick'));
        $image = $manager->make('./uploads/'.time().$filename)->resize(300, 200);

        $data['thumb']=$images;
        //print_r($data);

        $file = $request->file('thumb');
        $filename = $file->extension();
        // print_r($file);die();
        $image = time().".".$filename;
        $file->move('/uploads/',$image);
        $data['thumb']=$image;


        $res = \DB::table('news')->insertGetId($data);
        //print_r($res);
        if($res>0){
            return redirect('/admin/news');
        }else{
            return back()->with("err","添加失败!");
        }
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
        //
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
        //
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
