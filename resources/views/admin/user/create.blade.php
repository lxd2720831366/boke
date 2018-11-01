@extends('admin.common.common')
@section('container')

	<h1 class="text-center">表单提交</h1>
	<div style="width:900px;margin:auto;">
	<form class="form-horizontal" action="/admin/user/save" method="post">
		 {{ csrf_field() }}
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
	    <div class="col-sm-10">
	      <input type="text" name="uname" class="form-control" aria-controls="DataTables_Table_0" id="inputEmail3" placeholder="由数字、字母、特殊符号组成，字母开头，小于32位">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3"  class="col-sm-2 control-label">密码</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" aria-controls="DataTables_Table_0" name="upass" id="inputPassword3" placeholder="由数字、字母、下划线组成，小于16位">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword4"  class="col-sm-2 control-label">确认密码</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" aria-controls="DataTables_Table_0" name="reupass" id="inputPassword4" placeholder="再次输入密码">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputFile"  class="col-sm-2 control-label">头像</label>
	    <div class="col-sm-10">
	      <input type="file"   name="email"  id="exampleInputFile" >
	      <p style="color:#458B74;">选择你喜欢图片作为头像</p>
	    </div>
	  </div>
	  <div class="form-group" style="margin-left:155px;">
	  性别：
	 	<label class="radio-inline">
		  <input type="radio" name="sex" id="inlineRadio1" value="1"> 女
		</label>
		<label class="radio-inline">
		  <input type="radio" name="sex" id="inlineRadio2" value="2"> 男
		</label>
		<label class=" radio-inline">
		  <input type="radio" name="sex" id="inlineRadio3" value="3"> 其它
		</label>
	  </div>
	  <div id="province"  name="addr" style="height:20px;margin-left:155px;margin-bottom:10px;">
		所在城市：
	  </div>
	  <div class="form-group">
	    <label for="inputAge3"  class="col-sm-2 control-label">年龄</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" aria-controls="DataTables_Table_0" name="age" id="inputAge3" placeholder="你多大了？">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputBirthday3"  class="col-sm-2 control-label datetime">生日</label>
	    <div class="col-sm-10">
	      <input type="datetime" class="form-control" aria-controls="DataTables_Table_0" name="birthday" id="inputBirthday3" placeholder="您的生日">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPhone3"  class="col-sm-2 control-label">手机号</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" aria-controls="DataTables_Table_0" name="phone" id="inputPhone3" placeholder="您的手机号">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputEmail3"  class="col-sm-2 control-label">邮箱</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" aria-controls="DataTables_Table_0" name="email" id="inputEmail3" placeholder="您的邮箱">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" style="width:661px;" class="btn btn-success" value="提交">
	      <!-- <button type="submit" class="btn btn-default">提交</button> -->
	    </div>
	  </div>

   </form>
  </div>
<script type="text/javascript" src="/page-js/lian_dong/jquery.provincesCity.js"></script>
<script type="text/javascript" src="/page-js/lian_dong/provincesData.js"></script>
<script type="text/javascript">
/*调用插件*/
$(function(){
	$("#province").ProvinceCity();
});
</script>

@endsection