<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Projection;
class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//正在热映
    {   
        //上映影片
        $flist = Film::where('status','=',2)->orderBy('id','desc')->paginate(12);//每页18条数据
        return view("home.movie_list",compact('flist'));
    }

    public function soon()//即将上映
    {
        $soonflist = Film::where('status','=',1)->orderBy('id','desc')->paginate(12);//每页18条数据
        return view("home.movie_list_soon",compact('soonflist'));
    }


    //影片详情
    public function show($id)
    {   
        $first = Film::find($id);  
        return view("home.movie_show",compact('first'));
    }

    //选座购票
    public function content($id)
    {
        //查询电影信息
        $flists = Film::find($id);
        $prolist = Projection::where("fid",'=',$id)->get();//查询所有放映信息
        //print_r($prolist);
        return view("home.cinema_seat",compact('prolist','flists'));
    }

    //选座
    public function layout()
    {
        return view("home.layout");
    }

    //执行Ajax评论添加
    public function Ajaxinsert(Request $request,$id)
    {
        $fid = explode('.',$id);
        //$ffid['fid'] = $fid; 
        $array = $request->only(['comment']);
        //$fid = $id;
        $comment = array_merge($fid,$array);
        echo "<pre>";
        print_r($comment);
        //\DB::table("film_comment")->insert($comment);
    }

}
