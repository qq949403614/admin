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

Route::get('/contact','ContactController@contact');

Route::get('/checkout','CheckoutController@checkout');

Route::get('home','HomeController@index');
Route::get('registers','HomeController@registers');
Route::post('registers','HomeController@registers');
Route::get('register','HomeController@doregister');
Route::get('message','CommonController@message');
Route::get('confirm/{id}','HomeController@confirm');

//列表页
Route::get('/goods/list','GoodsController@glist');


//留言管理
Route::get('home/contact','ContactController@index');
route::post('contact/edit','ContactController@edit');
route::get('admin/comment','ContactController@comment');
route::post('/destroy/{id}','ContactController@destroy');


//后台路由规则
route::get('admin/login','LoginController@login');
route::post('admin/login','LoginController@dologin');

//后台登录路由组
route::group(['middleware'=>'admin'],function(){
	Route::get('admin','AdminController@index');
	Route::resource('user','UserController');
	Route::resource('article','ArticleController');
	Route::resource('cate','CateController');

	//个人中心
    Route::get('/center','UserController@center');
    Route::resource('address','AddressController');
    Route::get('/getarea','AddressController@getarea');
    Route::post('/dingdan/confirm','DingdanController@confirm');


    //购物车
	Route::resource('goods','GoodsController');
	Route::post('/cart','CartController@store');
	Route::get('/cart','CartController@index');
	Route::get('/cart/delete','CartController@delete');
});


	Route::resource('shop','ShopController');
	Route::resource('comment','CommentController');


