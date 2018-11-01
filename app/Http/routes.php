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
Route::get('/', function(){
	// var_dump(date('Y-m-d H:i:s',time()));
    //get('app.timezone'));	
	// 加载模版
    return view('welcome');
});
//前台首页 模仿csdn
Route::get('/show',function(){
	return view('show');
})->middleware('login');
/*------------------------------------------------------------------------------------------
-----------------------------------后台开始-------------------------------------------------
------------------------------------------------------------------------------------------*/
//后台公共页面 用bootstrap制作
Route::get('/common',function(){ return view('admin.common.common'); });
//登录页面 
Route::controller('login','LoginController');
//文章	article
Route::resource('/admin/article','Admin\ArticleController');
Route::post('/admin/article/deleteall','Admin\ArticleController@deleteall');
//用户管理	users
Route::get('/admin/user/index','Admin\UserController@index');// 表格显示 用户表格
Route::get('/admin/user/create','Admin\UserController@create');//表单添加
Route::post('/admin/user/save','Admin\UserController@save');
Route::get('/admin/user/destroy/{id}','Admin\UserController@destroy');//删除数据
Route::get('/admin/user/edit/{id}','Admin\UserController@edit');//修改数据
Route::post('/admin/user/update/{id}','Admin\UserController@update');
//用户详情 user_detail
Route::resource('/admin/detail','Admin\DetailController');
Route::post('/admin/detail/deleteall','Admin\DetailController@deleteall');
//轮播管理	img
Route::resource('/admin/img','Admin\ImgController');
Route::post('/admin/img/deleteall','Admin\ImgController@deleteall');
//栏目管理 list
Route::resource('/admin/list','Admin\ListController');
Route::post('/admin/list/deleteall','Admin\ListController@deleteall');
//资源管理  resource
Route::resource('/admin/resource','Admin\ResourceController');
Route::post('/admin/resource/deleteall','Admin\ResourceController@deleteall');
//推荐管理	recommend
Route::resource('/admin/recommend','Admin\RecommendController');
Route::post('/admin/recommend/deleteall','Admin\RecommendController@deleteall');












































/*------------------------------------------------------------------------------------------
-----------------------------------后台结束-------------------------------------------------
------------------------------------------------------------------------------------------*/


/*==========================================================================================
===================================前台开始=================================================
==========================================================================================*/



























































/*==========================================================================================
===================================前台结束=================================================
==========================================================================================*/


