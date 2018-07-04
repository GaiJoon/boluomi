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



/*
后台登陆
*/
Route::any('/admin/login/login','admin\LoginController@login');
/*
执行登陆 
*/
Route::any('/admin/dologin','admin\LoginController@dologin');
//验证码路由
Route::any('/admin/captcha','admin\LoginController@captcha');

/**
*用户管理
*/

// 资源控制器
Route::resource('/admin/users','admin\users\UsersController');
//友情链接资源控制器
Route::resource('/home/friend','home\friend\FriendController');



/**
*后台首页
*/
Route::get('/admin/index','admin\IndexController@index');
Route::any('/admin/logout','admin\LoginController@logout');
