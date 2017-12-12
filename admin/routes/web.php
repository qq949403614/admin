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
    return view('home.index');
});

//前台路由规则
Route::get('/center','CenterController@center');
Route::get('/list','ListController@list');
Route::get('/detail','DetailController@detail');
Route::get('/cart','CartController@cart');
Route::get('/checkout','CheckoutController@checkout');

Route::get('home','HomeController@index');
Route::get('registers','HomeController@registers');
Route::post('registers','HomeController@registers');
Route::get('register','HomeController@doregister');
Route::get('message','CommonController@message');
Route::get('confirm/{id}','HomeController@confirm');

//留言管理
Route::get('home/contact','ContactController@index');
route::post('contact/edit','ContactController@edit');
route::get('admin/comment','ContactController@comment');
route::post('/destroy/{id}','ContactController@destroy');

//后台登录路由规则
route::get('admin/login','LoginController@login');
route::post('admin/login','LoginController@dologin');

//后台登录路由组
route::group(['middleware'=>'admin'],function(){
	// 后台首页
	Route::get('admin','AdminController@index');
	// 用户管理
	Route::resource('user','UserController');
	// 文章管理
	Route::resource('article','ArticleController');
	// 导航管理
	Route::resource('cate','CateController');
	// 留言管理
	Route::resource('comment','CommentController');
	// 店铺管理
	Route::resource('shop','ShopController');
	Route::get('area','ShopController@area');
});