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

Route::get('/center','CenterController@center');


Route::get('/list','ListController@list');
Route::get('/detail','DetailController@detail');
Route::get('/contact','ContactController@contact');
Route::get('/cart','CartController@cart');
Route::get('/checkout','CheckoutController@checkout');

Route::get('admin','AdminController@index');
Route::resource('user','UserController');
Route::resource('article','ArticleController');
Route::resource('cate','CateController');
<<<<<<< HEAD

=======
Route::get('home','HomeController@index');
Route::get('registers','HomeController@registers');
Route::post('registers','HomeController@registers');
Route::get('register','HomeController@doregister');
Route::get('message','CommonController@message');
Route::get('confirm/{id}','HomeController@confirm');
Route::get('list','ListController@list');

//后台路由规则
route::get('admin/login','LoginController@login');
route::post('admin/login','LoginController@dologin');

route::group(['middleware'=>'admin'],function(){
	Route::get('admin','AdminController@index');
	Route::resource('user','UserController');
	Route::resource('article','ArticleController');
	Route::resource('cate','CateController');
});
>>>>>>> 904b2e46a5c7fc425de10cbc51520efa9b4810d4
