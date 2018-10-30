 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/page-js/css/bootstrap.min.css">
	<script type="text/javascript" src="/page-js/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/page-js/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/jquery-form/form@4.2.2/dist/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-info text-center">{{ $title }}</h1>
		<a href="/admin/article" class="btn btn-info">文章列表</a>
		<a href="/admin/article/create" class="btn btn-success">文章添加</a>
		<hr>
		<!-- 显示提示消息 -->
		@if(session('success'))
		<div class="alert alert-success alert-dismissible" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	      <strong>{{session('success')}}</strong>
	    </div>
	    @endif
		<!-- 显示提示消息 -->
		@if(session('error'))
		<div class="alert alert-danger alert-dismissible" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	      <strong>{{session('error')}}</strong>
	    </div>
	    @endif

		@section('container')

		@show
	</div>
</body>
</html>