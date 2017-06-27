<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hall

class HallController extends Controller
{
    $list=Hall::();
	return view("admin.hall.index",compact("list"));
}
