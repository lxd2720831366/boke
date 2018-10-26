<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/page-js/css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">在线内容管理系统</h1>
	
	<div  style="width:600px;margin:auto;" >
	<form class="form-inline" style="margin-bottom:3px;" action="/admin/user/index">
	  <div class="form-group">
	    <label for="exampleInputName2">关键字</label>
	    <input type="text" class="form-control " name="sou" id="exampleInputName2" placeholder="你的姓名">
	  </div>
	  <button type="submit" class="btn btn-default btn-success">搜索</button>
	</form>
	<table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>ID</th>
          <th>姓名</th>
          <th>邮箱</th>
          <th>手机</th>
          <th>操作</th>
        </tr>
      </thead>
      @foreach ($data as $key=>$value) 
      <tbody>
        <tr>
          <th scope="row">{{$value['id']}}</th>
          <td>{{$value['uname']}}</td>
          <td>{{$value['email']}}</td>
          <td>{{$value['phone']}}</td>
          <td>
          		<a href="/admin/user/destroy/{{$value['id']}}" class="btn btn-danger">删除</a>
          		<a href="/admin/user/edit/{{$value['id']}}" class="btn btn-warning">修改</a>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
	</div>
	
</body>
</html>
