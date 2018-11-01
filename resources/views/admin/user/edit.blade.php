@extends('admin.common.common')
@section('container')

	<h1 class="text-center">表单提交</h1>
	<div style="width:800px;margin:auto;">
	  <form class="form-horizontal" action="/admin/user/update/{{$data[0]->id}}" method="post">
		 {{ csrf_field() }}
	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
	    <div class="col-sm-10">
	      <input type="text" name="uname" value="{{$data[0]->uname}}" class="form-control" id="inputEmail3" placeholder="您的姓名">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
	    <div class="col-sm-10">
	      <input type="text" name="email" value="{{$data[0]->email}}" class="form-control" id="inputPassword3" placeholder="您的邮箱">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">手机</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" value="{{$data[0]->phone}}" name="phone" id="inputPassword3" placeholder="您的手机号">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" class="btn btn-success" value="提交">
	      <!-- <button type="submit" class="btn btn-default">提交</button> -->
	    </div>
	  </div>
	</div>
	<!-- <script type="text/javascript">

		$('form:first').submit(function(){

		});
	</script> -->
</form>

@endsection