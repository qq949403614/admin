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
Route::get('/contact','ContactController@contact');
Route::get('/cart','CartController@cart');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/list','ListController@list');
Route::get('/detail','DetailController@detail');
Route::get('home','HomeController@index');
Route::get('message','CommonController@message');
Route::get('confirm/{id}','HomeController@confirm');
// 购物车
Route::get('/goods/list','GoodsController@glist');
Route::get('/goods/{id}','GoodsController@show');
// 下订单前验证是否登录
route::group(['middleware'=>'user'],function(){
	Route::post('cart','CartController@store');
	Route::get('/cart','CartController@index');
	Route::get('/cart/delete','CartController@delete');
});
//注册
Route::get('login','EntryController@login');
route::post('login','EntryController@login');
Route::get('message','EntryController@store');
Route::post('entry','EntryController@entry');
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
	route::post('{id}/mima','UserController@mima');
	// 文章管理
	Route::resource('article','ArticleController');
	// 导航管理
	Route::resource('cate','CateController');
	// 留言管理
	Route::resource('comment','CommentController');
	// 店铺管理
	Route::resource('shop','ShopController');
	Route::get('area','ShopController@area');
	// 商品管理
	Route::resource('goods','GoodsController');
});	