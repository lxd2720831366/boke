@extends('admin.common.common')

<!--添加内容-->
@section('container')
<div style="width:900px;margin:auto;margin-top:20px;">
	<form action="/admin/resource" method="get" class="form-inline" style="margin-bottom: 3px;">
	  <div class="form-group">
	    <label for="title">标题</label>
	    <input type="text" value="{{ $request['title'] or ''}}" style="height:40px;" class="form-control" id="title" name="title" placeholder="按文章的标题搜索">
	  </div>
	  <div class="form-group">
	    <label for="auth">作者</label>
	    <input type="text" class="form-control" style="height:40px;" value="{{ $request['auth'] or '' }}" id="auth" name="auth" placeholder="按作者的名称搜索">
	  </div>
	  <button type="submit" class="btn btn-success">搜索</button>
	</form>
	<table class="table table-bordered">
		<tr>
			<td>选择</td>
			<td>ID</td>
			<td>标题</td>
			<td>作者</td>
			<td>来源</td>
			<td>类型</td>
			<td>创建时间</td>
			<td>修改时间</td>
			<td>状态</td>
			<td>操作</td
		</tr>
		@foreach($data as $k=>$v)
		<tr>
			<td><input type="checkbox" name="" value="{{$v->id}}"></td>
			<td>{{$v->id}}</td>
			<td>{{$v->title}}</td>
			<td>{{$v->auth}}</td>
			<td>{{$v->laiyuan}}</td>
			@if($v->type == 1)
			<td><span style="background:#193EBE;color:#fff;">技术</span></td>
			@elseif($v->type == 2)
			<td><span style="background:#D655D2;color:#fff; ">娱乐</span></td>
			@else
			<td> <span style="background:#8C5858;color:#fff; ">生活</span> </td>
			@endif
			<td>{{$v->create_time}}</td>
			<td>{{$v->update_time}}</td>
			<td>{{$v->status == 1 ? '激活' : '未激活'}}</td>
			<td >
				<a href="/admin/resource/{{$v->id}}/edit"
				 class="btn btn-warning">修改</a>
				<form action="/admin/resource/{{$v->id}}" method="post" style="display: inline-block;">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
				<input type="submit" onclick="return confirm('确定要删除吗?')" value="删除" class="btn btn-danger" name="">
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<div class="buttons">
	<a href="javascript:;" class="btn btn-danger">删除选中</a>
	</div>
	<div>
		{!! $data->appends($request)->render() !!}
	</div>
</div>
	<script type="text/javascript">
	console.log($.ajaxSetup());
		$(function(){
			$('.buttons a').eq(0).click(function(){
				var sel = $('input[type=checkbox]:checked');
				if(sel.length <= 0){
					return;
				}
				var ids = [];
				// 获取被选中元素的id
				$.each(sel,function(){
					var id = $(this).val();
					// 压入数组中
					ids.push(id);
				});
				$.ajaxSetup({
			        headers: {
			            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			        }
				});
				// 执行删除
				$.post('/admin/resource/deleteall',{'ids':ids},function(msg){

					if(msg == 'success'){
						//删除选中的元素
						$('input[type=checkbox]:checked').parent().parent().remove();
					}else{
						alert('删除失败');
					}
				},'html');
				
			});

		})

	</script>

@endsection