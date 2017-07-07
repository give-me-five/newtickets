<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Projection;
use App\Models\Hall;
use App\Models\Film;


class CinemaController extends Controller
{
    public function index()//影院列表
    {
        //获取前5条影院
        $list = Cinema::where("status",1)->limit(5)->get();
    	return view("home.cinema",["list"=>$list]);
    }

    public function show($id=0)//影院详情
    {
        //获取影院
        $single = Cinema::where("id",$id)->first();

        //获取商家id
        $fid = Projection::where("cid",$id)->pluck("fid");
        //获取影片
        $title = Film::whereIn("id",$fid)->get();
        //获取影片名
        $title2 = Film::whereIn("id",$fid)->first();
        //获取影片id
        $filmid = Film::whereIn("id",$fid)->value("id");
        //获取语言版本
        $language = Film::whereIn("id",$fid)->pluck("language");

        //获取影厅多对应的hid
        $hid = Projection::where("cid",$id)->pluck("hid");

        //获取影厅
        $hall = Hall::whereIn("id",$hid)->pluck("title");

        //获取影片价格
        $price = Projection::where("fid",$filmid)->get();
        //print_r($price);die();

    	return view("home.cinema_Show",compact("title","title2","single","hall","price","language","shopid"));

    }

    public function info($shopname=0,$title=0,$id=0)
    {
        //获取影院
        $sname = Cinema::where("shopname",$shopname)->first();
        //获取影片
        $filmtitle = Film::where("title",$title)->first();
        //获取影片语言版本
        $language = Film::where("title",$title)->value("language");
        //查询影片id
        $filmid = Film::where("title",$title)->value("id");
        //获取影片价格
        $price = Projection::where("fid",$filmid)->get();
        //获取放映关联id
        $cid = Cinema::where("id",$id)->value("cid");
        //获取影片管理id
        $fid = Projection::where("cid",$cid)->pluck("fid");
        //影院对应影片
        $titles = Film::whereIn("id",$fid)->get();
        //查询影厅关联id
        $hid = Projection::where("fid",$filmid)->value("hid");
        //查询影厅
        $halltitle = Hall::where("id",$hid)->value("title");
        return view("home.info",compact("filmtitle","titles","sname","price","language","halltitle"));
    }
}
