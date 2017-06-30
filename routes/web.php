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



Route::get('/shop/login',"Shop\LoginController@index");
//商户执行登录
Route::post('/shop/doLogin',"Shop\LoginController@doLogin");
//商户退出登录
Route::get('/shop/Logout',"Shop\LoginController@Logout");
//商户注册
Route::get('/shop/sigup',"Shop\SigupController@index");

//加载选择区域
Route::get('/shop/sigup/{upid}',"Shop\SigupController@region"); 

//加载验证码
Route::get('/shop/getcode',"shop\SigupController@getCode"); 


//shop路由组
Route::group(['prefix' =>'shop','middleware'=>'shop'],function(){
	Route::get('/',"Shop\IndexController@index");
	Route::resource('shopdetail', 'Shop\ShopdetailController');

	Route::resource('hall', 'Shop\HallController');
	Route::resource('projection', 'Shop\ProjectionController');

	Route::get('/hall', 'Shop\HallController@index');
	Route::resource('projection', 'Shop\ProjectionController');
    Route::get('/create','Shop\HallController@create');
    Route::get('/edit/{id}','Shop\HallController@edit');

	
});

Route::get('/admin',"Admin\IndexController@index");
Route::resource('/admin/shopdetail', 'Admin\ShopdetailController');
Route::resource('/admin/relshop', 'Admin\RelshopController');



//加载注册页面
Route::get("reg","RegController@index");
//加载验证码
Route::get("reg/code","RegController@code");
//执行注册
Route::post("reg/doLogin","RegController@doLogin");


Route::get("reg/success","RegController@success");


//注册成功
Route::get("reg/success","RegController@success");
//注册失败
Route::get("reg/lose","RegController@lose");


//加载登录页面
Route::get("login","LoginController@index");
//加载手机登录页面
Route::get("login/phone","LoginController@phone");
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


//中间件(权限控制)



Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
        //会员列表
        Route::get("/users/child","Admin\UsersController@child");
        //执行用户禁用
        Route::get("/users/del/{id?}","Admin\UsersController@del");
        //执行用户启用
        Route::get("/users/reset/{id?}","Admin\UsersController@reset");
        //查看用户详情
        Route::get("/users/show/{uid?}","Admin\UsersController@show");
        //管理员
        Route::resource('root',"Admin\RootController");
});



