<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KK博客</title>
	<link rel="icon" href="/picture/logo.ico">
	<link rel="stylesheet" href="/page-js/css/bootstrap.min.css">
  	<script type="text/javascript" src="/page-js/js/jquery-3.3.1.min.js"></script>
  	<script type="text/javascript" src="/page-js/js/bootstrap.min.js"></script>
  	<style type="text/css">
		#admin_left_1 ol li{
			margin:0;
			padding: 0;
			list-style-type: none;
		}
		#admin_left_1 li{
			list-style-type: ;
		}
		#admin_left_1{
			width: 300px;
			margin-left:-10px;
			margin-top:10px;
		}

		#admin_left_1 h3{
			width: 100%;
			height: 35px;
			color:#fff;
			font-size:13px;
			text-align: center;
			background-color:#363636;
			line-height: 35px;
			margin-bottom:1px;
			border-radius:10px;
			cursor: pointer;
		}
		#admin_left_1 ol{
			display:none;
		}
		#admin_left_1 ol li{
			list-style-type: none;
    		font-size: 10px;
    		line-height: 1.42857143;
			width: 100%;
			height:26px;
    		background-color:#3B3B3B;
    		border-color: #4cae4c;
			text-align: center;
			border-radius:10px;
			line-height: 26px;
			margin-bottom:1px;
			margin-top:1px;
		}
		#admin_left_1 ol li a{
			color:#8A8A8A;
		}
	</style>
</head>
<body>
<div>
	<!-- 头部导航栏 开始 -->
	<nav class="navbar navbar-inverse" style="margin-bottom:0px;">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">KK博客</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="搜索">
	        </div>
	        <button type="submit" class="btn btn-default">提交</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">后台登录<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">登录</a></li>
	            <li><a href="#">个人资料</a></li>
	            <li><a href="#">消息</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- 头部导航栏 结束 -->
<div style="border:1px solid;width:100%;height:1000px;" id="admin_con">
	<!-- 左侧边栏 开始 -->	
	<div class="" style="width:21.5%;height:100%;float:left;background:#5B5B5B;" id="admin_con_1">
		<div style="height:50px;width:300px;padding-left:40px;line-height:70px;font-size:20px;" class="glyphicon glyphicon-home"><a href="/common" style="text-decoration:none;color:#404040;">  首页</a></div>
		<ul id="admin_left_1">
			<li>
				<h3 class="glyphicon glyphicon-user">　用户管理</h3>
				<ol>
					<li><a href="/admin/user/create">添加用户</a></li>
					<li><a href="/admin/user/index">用户列表</a></li>
				</ol>
			</li>
			<li>
				<h3 class="glyphicon glyphicon-list-alt">　详情管理</h3>
				<ol>
					<li><a href="/admin/detail/create">添加详情</a></li>
					<li><a href="/admin/detail">详情列表</a></li>
				</ol>
			</li>
			<li>
				<h3 class="glyphicon glyphicon-book">　文章管理</h3>
				<ol>
					<li><a href="/admin/article/create">添加文章</a></li>
					<li><a href="/admin/article">文章列表</a></li>
				</ol>
			</li>
			<li>
				<h3 class="glyphicon glyphicon-list-alt">　栏目管理</h3>
				<ol>
					<li><a href="/admin/list/create">添加栏目</a></li>
					<li><a href="/admin/list">栏目列表</a></li>
				</ol>
			</li>
			<li>
				<h3 class="glyphicon glyphicon-picture">　轮播管理</h3>
				<ol>
					<li><a href="/admin/img/create">添加轮播</a></li>
					<li><a href="/admin/img">轮播列表</a></li>
				</ol>
			</li>
			<li>
				<h3 class="glyphicon glyphicon-thumbs-up">　推荐管理</h3>
				<ol>
					<li><a href="/admin/recommend/create">添加推荐</a></li>
					<li><a href="/admin/recommend">推荐列表</a></li>
				</ol>
			</li>
			<li>
				<h3 class="glyphicon glyphicon-hdd">　资源管理</h3>
				<ol>
					<li><a href="/admin/resource/create">添加资源</a></li>
					<li><a href="/admin/resource">资源列表</a></li>
				</ol>
			</li>
		</ul>
	</div>
	<script type="text/javascript">
	$(function(){
		$('#admin_left_1 h3').click(function(){
			// 停止正在执行的动画  并且隐藏
			$('admin_left_1 ol:animated').stop().hide();
			// 切换滑动效果
			$(this).next().slideToggle('slow');
		});
	});
	</script>
	<!-- 左侧边栏 结束 -->
	<!-- 内容部分 开始 -->
<div style="width:78.4%;height:100%;background:#F5F5F5;float:right;" id="admin_con_2">
	@section('container')

	@show
	<!-- 配置文件 -->
	<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
	<!-- 实例化编辑器 -->
	<script type="text/javascript">
	    var ue = UE.getEditor('container', {
		    toolbars: [
		        ['fullscreen', 'source', 'undo', 'redo', 'bold','date','simpleupload','insertimage',]
		    ],
		    autoHeightEnabled: false,
		});
	</script>
	</div>
	<!-- 内容部分 结束 -->
	<p class="clearfix"></p>
</div>
<!-- <script type="text/javascript">
	h = document.documentElement.scrollWidth;
	$(function(){
		$('#admin_con').css('height',h+'px');
	});
</script> -->
</body>
</html>