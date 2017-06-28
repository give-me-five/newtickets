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
    return view('welcome');
});

//后台首页路由
Route::get('/admin',"Admin\IndexController@index"); //后台首页路由
Route::get('/admin/film',"Admin\FilmController@index"); //后台影片信息浏览路由
//后台影片信息添加路由
Route::get('/admin/film/create',"Admin\FilmController@create"); 
Route::post('/admin/film/create',"Admin\FilmController@store"); 