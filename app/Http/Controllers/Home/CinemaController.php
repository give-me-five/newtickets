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
        //获取语言版本
        $language = Film::whereIn("id",$fid)->pluck("language");

        //获取影厅多对应的hid
        $hid = Projection::where("cid",$id)->pluck("hid");

        //获取影厅
        $hall = Hall::whereIn("id",$hid)->pluck("title");

        //获取影片价格
        $price = Projection::where("cid",$id)->get();
        //print_r($price);die();

    	return view("home.cinema_Show",compact("title","title2","single","hall","price","language"));

    }
    public function info($id=1)
    {
        $info = Film::where("id",1)->first();

        return view("home.cinema_show",compact("info"));

    }
}
