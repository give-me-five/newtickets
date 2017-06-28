<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', function () {
    return view('index');
});

//加载登录页面
Route::get('/shop',"Shop\IndexController@index");
Route::get('/shop/login',"Shop\LoginController@index");
Route::get('/shop/sigup',"Shop\LoginController@sigup");
Route::resource('/shop/shopdetail', 'Shop\ShopdetailController');
Route::resource('/shop/hall', 'Shop\HallController');
Route::resource('/shop/projection', 'Shop\ProjectionController');



