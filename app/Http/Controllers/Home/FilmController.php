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
        $comment = \DB::table('film_comment')->where('fid','=',$id)->get();
        $uid = session('users')->id;
        $users = \Db::table('users')->where('id','=',$uid)->first();
        //echo "<pre>";
        //print_r($users);
        $film = Film::where('id','=',$id)->first();
        //echo "<pre>";
        //print_r($film);  
        return view("home.movie_show",compact("film","comment","users"));
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
        //判断是否登录
        $usersid = session('users')->id;
        //echo "<pre>";
        //print_r($usersid);
        if(session('users')->phone==""){
            return redirect("login");
        }
        //获取数据
        $data['fid'] = $id;
        //echo "<pre>";
        //print_r($data);
        $data['uid'] = $usersid;
        $str = $request->only(['comment']);
        $str['support'] = 1;
        $str['created_at'] = time();
        $info = array_merge($data,$str);
        //echo "<pre>";
        //print_r($info); 
        \DB::table('film_comment')->insertGetId($info);
        return redirect("/films/{$info['fid']}");
        
    }

}
