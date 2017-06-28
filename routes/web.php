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
Route::get('/',"Home\IndexController@index");//站点首页
Route::get('/films',"Home\FilmController@index");//正在热映
Route::get('/films/Type/2',"Home\FilmController@soon");//即将上映

Route::get('/films/{id}',"Home\FilmController@show");//影片详情
Route::get('/films/{id}/seat',"Home\FilmController@content");//选座+购票

Route::get('/cinemas',"Home\CinemaController@index");//影院列表
Route::get('/cinemas/{id}',"Home\CinemaController@show");//影院详情页
Route::get('/news',"Home\NewsController@index");//热点列表

