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



//加载注册页面
Route::get("reg","RegController@index");
//加载验证码
Route::get("reg/code","RegController@code");
//执行注册
Route::post("reg/doLogin","RegController@doLogin");


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