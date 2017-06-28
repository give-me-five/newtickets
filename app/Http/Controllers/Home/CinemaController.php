<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CinemaController extends Controller
{
    public function index()//影院列表
    {
    	return view("home.cinema");
    }

    public function show()//影院详情
    {
    	return view("home.cinema_Show");
    }
}
