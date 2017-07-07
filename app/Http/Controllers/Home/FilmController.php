<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Hall;
use App\Models\Projection;
use App\Models\Shopdetail;
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
        $ho=[];$haid=[];
        //遍历影厅
        foreach($prolist as $pro){
            $ho[] = Hall::where('id',$pro['hid'])->value('title');
        }
        foreach($prolist as $pro){
            $haid[] = Hall::where('id',$pro['hid'])->value('id');
        }
        //dd($ho);
        return view("home.cinema_seat",compact('prolist','flists','ho','haid'));
    }

    //选座
    public function layout($fid,$hid,$pid)
    {
        $fmfirst = Film::where('id',$fid)->first();//影片
        $hfirst = Hall::where('id',$hid)->first();//查询影厅
        $ctit = Shopdetail::where('id',$hfirst->cid)->first();//查询影厅对应的影院
        $ptime = Projection::where('id',$pid)->first();
        //print_r($ctit);
        return view("home.layout",compact('fmfirst','hfirst','ctit','ptime'));
    }

}
