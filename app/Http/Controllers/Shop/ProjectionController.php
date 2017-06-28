<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projection;

class ProjectionController extends Controller
{
    public function index()
	{
		$projection=Projection::all();
		return view("shop.projection.index",compact('projection'));
	}
}
