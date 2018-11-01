@extends('admin.common.common')

@section('container')
<div style="width:900px;margin:auto;margin-top:20px;">
	<form action="/admin/resource/{{$data->id}}" method="post">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
		  <div class="form-group">
		    <label for="title">标题</label>
		    <input type="text" value="{{$data->title}}" class="form-control" id="title" name="title" placeholder="title">
		  </div>
		 <div class="form-group">
		    <label for="auth">作者</label>
		    <input type="text" value="{{$data->auth}}" class="form-control" id="auth" name="auth" placeholder="auth">
		  </div>
		  <div class="form-group">
		    <label for="laiyuan">来源</label>
		    <input type="text" value="{{$data->laiyuan}}" class="form-control" id="laiyuan" name="laiyuan" placeholder="laiyuan">
		  </div>
		  <div class="form-group">
		    <label for="type">类型 {{$data->type}}</label>
		    <select id="type" name="type" class="form-control">
		    	<option value="0">--请选择--</option>
		    	<option value="1" @if($data->type == 1) selected @endif>技术</option>
		    	<option value="2" @if($data->type == 2) selected @endif>娱乐</option>
		    	<option value="3" @if($data->type == 3) selected @endif>生活</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="content">内容</label>
		     <!-- 加载编辑器的容器 -->
		    <script id="container"  name="content" type="text/plain" style="height:300px;">
		        {{ $data->content }}
		    </script>
		  </div>
		  <button type="submit" class="btn btn-success form-control">提交</button>
	</form>
</div>
@endsection