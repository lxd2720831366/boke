<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="/page-js/css/bootstrap.min.css">
  <style>
      #div_login{
        background-image:url("/picture/8.jpg");
      }
      body{
        background-image:url("/picture/7.jpg");
      }
  </style>
</head>
<body>
  <div id="div_login" style="width:500px;margin:auto;margin-top:150px;border:3px solid #ca7;border-radius:10px;">
    <div style="width:498px;" class="text-center">
      <h1>登录</h1>
    </div>
    <form action="/login/loging" method="post" style="margin:30px;">
      {{ csrf_field() }}
      <div class="form-group" style="">
        <label for="exampleInputEmail1">用户名</label>
        <input type="uname" class="form-control" name="uname" id="exampleInputEmail1" placeholder="您的用户名">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" name="upass" id="exampleInputPassword1" placeholder="您的密码">
      </div>
      <button type="submit" class="btn btn-success" style="width:434px;">提交</button>
    </form>
  </div>
</body>
</html>