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





//类别管理
Route::resource('admin/type','admin\goods\GoodscategoryController');



//商品管理

Route::resource('admin/goods','admin\goods\GoodsAdminController');
=======
//轮播图
Route::resource('/admin/lunbo', 'admin\lunbo\LunBoController');



/**
 * 前台
 *	路由组 // 显示
 * Route::group(['',function(){
 *	 Route::any('','');
 * }]);
 */


/**
 * 购物车
 */

Route::group([], function(){
	//购物车显示
	Route::any('/cart/index','home\goodscar\GoodscarhomeController@index');
	//详情页提交购物车
    Route::get('/cart/{id}','home\goodscar\GoodscarhomeController@save'); 
    
});
/**
 * 结算
 */
Route::group([],function(){
	//订单结算页
	Route::any('/orders/index','home\account\AccountController@index');
	//订单成功页
	Route::any('/orders/jsy','home\account\AccountController@jsy');
});

/**
* 个人中心
*/

Route::group([],function(){
	// 个人信息
	Route::any('/homeuser/index','home\usershome\UsersHomeController@index');
	//个人资料
	Route::any('/homeuser/firstuser','home\usershome\UsersHomeController@firstuser');
	//个人地址
	Route::any('/homeuser/path','home\usershome\UsersHomeController@path');
	

});


/**
 * 我的订单
 */
Route::group([],function(){
	//个人订单
	Route::any('/homeorders/orders','home\orders\OrdershomeController@index');
	// 订单详情
	Route::any('/homeorders/ordersinfo','home\orders\OrdershomeController@ordersinfo');
	//我的消息
	Route::any('/homeorders/logistics','home\orders\OrdershomeController@logistics');

});



/* / */
Route::get('admin/index','admin\IndexController@index');
Route::get('home/index','home\IndexController@index');

