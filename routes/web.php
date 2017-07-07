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
Route::get('/layout/{fid}/seat/{hid}',"Home\FilmController@layout");//选座

Route::get('/cinemas',"Home\CinemaController@index");//影院列表
Route::get('/cinemas1',"Home\CinemafsfController@index");//影院列表
Route::get('/cinemas/show/{id}',"Home\CinemaController@show");//影院详情页
Route::get('/cinemas/info/{shopname?}/{title?}/{id?}',"Home\CinemaController@info");//影院详情页
Route::get('/news',"Home\NewsController@index");//热点列表

//后台首页路由
Route::get('/admin',"Admin\IndexController@index");
//后台影片信息浏览路由
Route::get('/admin/film',"Admin\FilmController@index");	
//后台影片信息添加路由
Route::get('/admin/film/create',"Admin\FilmController@create"); 
Route::post('/admin/film/create', 'Admin\FilmController@store');
Route::get('/admin/film/{id}/edit', 'Admin\FilmController@edit');
Route::post('/admin/film/update/{id}', 'Admin\FilmController@update');
//后台影片评论路由
Route::get('/admin/film_comment','Admin\film_commentController@index');
//加载登录页面
Route::get('/shop/login',"Shop\LoginController@index");
//商户执行登录
Route::post('/shop/doLogin',"Shop\LoginController@doLogin");
//商户退出登录
Route::get('/shop/Logout',"Shop\LoginController@Logout");
//加载商户注册页面
Route::get('/shop/sigup',"Shop\SigupController@index");
//执行商户注册

Route::post('/shop/sigup/registered',"Shop\SigupController@registered");
//完善商户信息
Route::post('/shop/information/upload',"Shop\InformationController@upload");


//七牛上传
Route::get('/a',"AController@index");
Route::post('/a/upload',"AController@upload");

//加载选择区域
Route::get('/shop/sigup/{upid}',"Shop\SigupController@region");
//加载验证码
Route::get('/shop/getcode',"shop\SigupController@getCode"); 


//shop路由组
Route::group(['prefix' =>'shop','middleware'=>'shop'],function(){
	//加载商家后台首页
    Route::get('/',"Shop\IndexController@index");
    Route::get('/{id}/edit',"Shop\IndexController@edit");
	//加载商家后台详情页
    Route::resource('shopdetail', 'Shop\ShopdetailController');
	//加载商家后台影厅页
    Route::get('/hall', 'Shop\HallController@index');

	Route::get('/',"Shop\IndexController@index");
	Route::resource('shopdetail', 'Shop\ShopdetailController');

    Route::resource('layout', 'LayoutController');
	Route::resource('hall', 'Shop\HallController');
	Route::resource('projection', 'Shop\ProjectionController');
	//加载放映信息
    Route::get('/projection', 'Shop\ProjectionController@index');
    //查询放映信息
    Route::post('/projection', 'Shop\ProjectionController@index');
    //修改放映信息
    Route::get('/projection/{id}/edit', 'Shop\ProjectionController@edit');
    //执行修改信息
    Route::get('/projection/{id}', 'Shop\ProjectionController@update');
    //添加放映信息
    Route::get('/projection/create', 'Shop\ProjectionController@create');
    Route::post('/projection/store', 'Shop\ProjectionController@store');
    //添加影厅
    Route::get('/create','Shop\HallController@create');
    //执行添加
    Route::post('/store','Shop\HallController@store');
    //修改影厅信息
    Route::get('/edit/{id}','Shop\HallController@edit');
    //商户退出登录
    Route::get('/Logout',"Shop\LoginController@Logout");
    Route::get('/information/{id}',"Shop\InformationController@index");

});

//加载注册页面
Route::get("reg","RegController@index");
//加载验证码
Route::get("reg/code","RegController@code");
//执行注册
Route::post("reg/doLogin","RegController@doLogin");


//新闻资讯路由
Route::resource('/admin/news',"Admin\NewController");//后台新闻资讯浏览
//站点设置
Route::resource('/admin/setup',"Admin\SetupController");



//加载注册页面
Route::get("reg","RegController@index");
//执行ajax验证
Route::post("reg/doLogin","RegController@doLogin");
//执行注册
Route::post("reg/regLogin","RegController@regLogin");
//注册成功
Route::get("reg/success","RegController@success");
//注册失败
Route::get("reg/lose","RegController@lose");



//加载登录页面
Route::get("login","LoginController@index");
//执行登录
Route::post("login/doLogin","LoginController@doLogin");
//加载验证码
Route::get("login/code","LoginController@code");
//退出登录
Route::get("login/loginout","LoginController@loginout");


//后台登录页面
Route::get("admin/login","Admin\LoginController@login");
//后台登录验证码
Route::get("admin/login/code","Admin\LoginController@code");
//执行登录
Route::post("admin/login/doLogin","Admin\LoginController@doLogin");
//退出登录
Route::get("admin/login/loginout","Admin\LoginController@loginout");
//中间件(权限控制)


//后台路由组
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get("/index","Admin\indexController@index");
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
    //加载修改密码主页
    Route::get("/pass","Admin\PassController@index");
    //执行密码修改
    Route::post("/pass/update","Admin\PassController@update");
    //商家列表
    Route::get("/merchant","Admin\MerchantController@index");
    //商家禁用操作
    Route::get("/merchant/edit/{id?}","Admin\MerchantController@edit");
    //商家审核通过
    Route::get("/merchant/success/{id?}","Admin\MerchantController@success");
    //商家审核未通过
    Route::get("/merchant/lose/{id?}","Admin\MerchantController@lose");
    //商家禁用操作
    Route::get("/merchant/forbidden/{id?}","Admin\MerchantController@forbidden");
});

//商家管理路由组
//商家注册
Route::resource('/business/register',"Business\RegisterController");
Route::get('/business/login',"Business\LoginController@login");//登录页面路由
Route::post('/business/dologin',"Business\LoginController@doLogin"); //执行后台登录
Route::get('/business/logout','Business\LoginController@logout');//退出
Route::group(['prefix' => 'business','middleware' => 'business'], function(){
    Route::get('/',"Business\IndexController@index"); 
    //后台首页路由
    Route::get('/order',"Business\OrdersController@index"); //商家订单
    Route::resource('/hall',"Business\HallController"); //放映厅管理
    //放映信息管理Start
    Route::resource('/pro',"Business\ProjectionController"); 
    Route::get('/pro/del/{id}',"Business\ProjectionController@destroy"); //删除放映信息
    Route::get('/pro/edit/{id}',"Business\ProjectionController@edit"); //修改放映信息
    Route::get('/pro/update/{id}',"Business\ProjectionController@update"); //更新放映信息
    //放映信息路由END
});
// end
