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

	// var_dump(Config::get('app.url'));
	// dump(Config::get('app.cipher'));
	// dump(Config::get('database.migrations'));
	// Config::set('app.title','LAMP209官网');
	// dump(Config::get('app.title'));
	// dd(Config::get('app.timezone'));	
	// 加载模版
    return view('welcome');
});

// 带参数的路由 和 参数限定
// Route::get('/update/{id}/{name}',function($id,$name){
// 	echo 'update----'.$id.'-----'.$name;
// })->where('id','[0-9]+')->where('name','[a-z]+');

// Route::get('/red',function(){
// 	// return redirect('admin/user/delete/20'); //跳转
// 	// 使用路由的别名
// 	// $url =  route('aud',['id'=>200]); //使用别名进行创建url地址
// 	$url = url('admin/user/delete',['id'=>'100']);	//使用字符串进行创建url地址
// 	echo $url;
// 	// return redirect($url);
// });

// 带别名的路由
// Route::get('/admin/user/delete/{id}',['as'=>'aud','uses'=>function($id){
// 	echo '删除后台用户：'.$id;
// }]);

// Route::post();


// //表格显示
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

//登录页面
Route::controller('login','LoginController');

//文章
Route::resource('/admin/user','Admin\UserController');
Route::post('/admin/user/deleteall','Admin\UserController@deleteall');
