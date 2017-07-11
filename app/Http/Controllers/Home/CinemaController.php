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
        $list = Cinema::where("status",4)->limit(5)->get();
    	return view("home.cinema",["list"=>$list]);
    }

    public function show($id=0)//影院详情
    {
        //获取影院
        //获取当前时间
        $time=time();
        $date1=date('m月d日',$time);
        //获取第二天的日期
        $time2=time()+24*3600;
        $date2=date('m月d日',$time2);
        $date3=date('w',$time2);
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
       

        //获取放映影片的所有时间
       // $datetime=Projection::whereIn("cid",$id)->pluck('datetime');
        $date4=date('d',$time);
        //获取日期相同的放映时间
        $date5=Projection::whereDay('datetime',$date4)->pluck('datetime');
        //获取当天的放映厅信息
        $hhid=Projection::whereIn("datetime",$date5)->pluck('hid');
        $halltitle=[];
        foreach($hhid as $ho){
            $halltitle[]=Hall::where("id",$ho)->value('title');
        }

        //获取当天的影片信息
        $ffid=Projection::whereIn("datetime",$date5)->pluck("fid");
        // print_r($ffid);
        // die();
        //$film=Film::whereIn("id",$ffid)->get();
        $film=[];
        foreach($ffid as $fi){
            $film[]=Film::where("id",$fi)->value('title');
        }
      
        //获取当天影片价格
        $price = Projection::whereIn("datetime",$date5)->get();
       
         //print_r($date5);die();

    	return view("home.cinema_Show",compact("title","title2","single","halltitle","price","film","shopid","date1","date2","date3","date5","halltitle"));

    }

    public function info($shopname=0,$title=0,$id=0)
    {
        //获取影院
        $sname = Cinema::where("shopname",$shopname)->first();
        //获取影片
        $filmtitle = Film::where("title",$title)->first();
        //获取影片语言版本
        $language = Film::where("title",$title)->value("language");
       
        //获取当前时间
        $time=time();
        $date1=date('m月d日',$time);
        //获取第二天的日期
        $time2=time()+24*3600;
        $date2=date('m月d日',$time2);
        $date3=date('w',$time2);
        //查询影片id
        $time=time();
        $date4=date('d',$time);
        //获取日期相同的放映时间
        $filmid = Film::where("title",$title)->value("id");
        $pid=Projection::where("fid",$filmid)->pluck("fid");
        $date5=Projection::whereDay('datetime',$date4)->pluck('datetime');
        $data6=[];
        foreach($date5 as $v){
           
        $date6[]=\DB::select("select * from projection where fid = {$filmid} and datetime = '{$v}'");
       
        }
        $date7=[];
        foreach($date6 as $ho){
            foreach($ho as $fo){
                 $date7[]=$fo; 
            }
               
        }
        //获取影片价格
        $price = Projection::where("fid",$filmid)->get();
        //获取放映关联id
        $cid = Cinema::where("id",$id)->value("cid");
        //获取影片管理id
        $fid = Projection::where("cid",$cid)->pluck("fid");
        //放映时长
        $datetime = Projection::where("id",$id)->value("datetime");
        //影院对应影片
        $titles = Film::whereIn("id",$fid)->get();
        //查询影厅关联id
        $hid = Projection::where("fid",$filmid)->value("hid");
        //查询影厅
        $halltitle = Hall::where("id",$hid)->value("title");

        return view("home.info",compact("filmtitle","titles","sname","price","language","halltitle","date7","date1","date2","date3"));

    }
}
