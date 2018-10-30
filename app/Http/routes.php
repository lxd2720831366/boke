<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 路由文件
// 作用：当前laravel所有的http协议，请求必须经过文件
Route::get('/', function () {
	// var_dump(date('Y-m-d H:i:s',time()));
get('app.timezone'));	
	// 加载模版
    return view('welcome');
});




// 表格显示 用户表格
// Route::get('/admin/user/index','UserController@index');

// //表单添加
// Route::get('/admin/user/create','UserController@create');
// Route::post('/admin/user/save','UserController@save');

// //删除数据
// Route::get('/admin/user/destroy/{id}','UserController@destroy');
// //修改数据
// Route::get('/admin/user/edit/{id}','UserController@edit');
// Route::post('/admin/user/update/{id}','UserController@update');

//头部添加
Route::get('/show',function(){
	return view('show');
})->middleware('login');
/*------------------------------------------------------------------------------------------
-----------------------------------后台开始-------------------------------------------------
------------------------------------------------------------------------------------------*/
//后台公共页面
Route::get('/common',function(){
	return view('admin.common.common');
});
//登录页面
Route::controller('login','LoginController');
//文章
Route::resource('/admin/article','Admin\ArticleController');
Route::post('/admin/article/deleteall','Admin\ArticleController@deleteall');











































/*------------------------------------------------------------------------------------------
-----------------------------------后台结束-------------------------------------------------
------------------------------------------------------------------------------------------*/


/*==========================================================================================
===================================前台开始=================================================
==========================================================================================*/












/*==========================================================================================
===================================前台结束=================================================
==========================================================================================*/


