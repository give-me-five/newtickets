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
//前台路由
//Route::get('/',"Home\IndexController@index");//站点首页
Route::get('/films',"Home\FilmController@index");//正在热映
Route::get('/films/Type/2',"Home\FilmController@soon");//即将上映

Route::get('/films/{id}',"Home\FilmController@show");//影片详情
Route::get('/films/{id}/seat',"Home\FilmController@content");//选座+购票

Route::get('/cinemas',"Home\CinemaController@index");//影院列表
Route::get('/cinemas/{id}',"Home\CinemaController@show");//影院详情页
Route::get('/news',"Home\NewsController@index");//热点列表

Route::get('/', function () {
    return view('index');
});


//后台首页路由
Route::get('/admin',"Admin\IndexController@index"); //后台首页路由
Route::get('/admin/film',"Admin\FilmController@index"); //后台影片信息浏览路由
//后台影片信息添加路由
Route::get('/admin/film/create',"Admin\FilmController@create"); 
Route::post('/admin/film/create',"Admin\FilmController@store"); 

//加载登录页面

Route::get('/shop',"Shop\IndexController@index");
Route::get('/shop/login',"Shop\LoginController@index");
Route::get('/shop/sigup',"Shop\LoginController@sigup");
Route::resource('/shop/shopdetail', 'Shop\ShopdetailController');
Route::resource('/shop/hall', 'Shop\HallController');
Route::resource('/shop/projection', 'Shop\ProjectionController');

Route::get('/admin',"Admin\IndexController@index");
Route::resource('/admin/shopdetail', 'Admin\ShopdetailController');
Route::resource('/admin/relshop', 'Admin\RelshopController');



//加载登录页面
Route::get("login","LoginController@index");
//执行登录
Route::post("login/doLogin","LoginController@doLogin");
//加载验证码
Route::get("login/code","LoginController@code");


//后台登录页面
Route::get("admin/login","Admin\LoginController@login");
//后台登录验证码
Route::get("admin/login/code","Admin\LoginController@code");
//执行登录
Route::post("admin/login/doLogin","Admin\LoginController@doLogin");
//会员列表
Route::get("admin/users/child","Admin\UsersController@child");



////用户注册
//Route::resource('user','UserController');
////会员登录
//Route::resource('login','LoginController');
////用户详情
//Route::resource('userDetail','UserDetailController');


