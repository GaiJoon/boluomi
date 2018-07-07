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

/**
 * 后台
 *	路由组 // 显示
 * Route::group(['',function(){
 *	 Route::any('','');
 * }]);
 */

Route::get('admin/index','admin\IndexController@index');


//类别管理
Route::resource('admin/type','admin\goods\GoodscategoryController');




//商品管理

Route::resource('admin/goods','admin\goods\GoodsAdminController');