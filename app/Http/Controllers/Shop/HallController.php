<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hall;

class HallController extends Controller
{
    public function index()
	{
		$hall=Hall::all();
		return view("shop.hall.index",compact("hall"));
	}
}
