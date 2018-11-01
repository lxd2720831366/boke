<!DOCTYPE html>
<html lang="en">
 <head> 
  <!-- start: Meta --> 
  <meta charset="utf-8" /> 
  <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title> 
  <meta name="description" content="Bootstrap Metro Dashboard" /> 
  <meta name="author" content="Dennis Ji" /> 
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" /> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- end: Meta --> 
  <!-- start: Mobile Specific --> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <!-- end: Mobile Specific --> 
  <!-- start: CSS --> 
  <link id="bootstrap-style" href="/ad/css/bootstrap.min.css" rel="stylesheet" /> 
  <link href="/ad/css/bootstrap-responsive.min.css" rel="stylesheet" /> 
  <link id="base-style" href="/ad/css/style.css" rel="stylesheet" /> 
  <link id="base-style-responsive" href="/ad/css/style-responsive.css" rel="stylesheet" /> 
  <link href="" type="text/css" /> 
  <link rel="stylesheet" href="/page-js/css/bootstrap.min.css">
  <script type="text/javascript" src="/page-js/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/page-js/js/bootstrap.min.js"></script>
  <!-- end: CSS --> 
  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements --> 
  <!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="/ad/css/ie.css" rel="stylesheet">
	<![endif]--> 
  <!--[if IE 9]>
		<link id="ie9style" href="/ad/css/ie9.css" rel="stylesheet">
	<![endif]--> 
  <!-- start: Favicon --> 
  <link rel="shortcut icon" href="img/favicon.ico" /> 
  <!-- end: Favicon --> 
 </head> 
 <body> 
  <!-- start: Header --> 
  <div class="navbar" style="margin-bottom:1px;"> 
   <div class="navbar-inner"> 
    <div class="container-fluid" > 
     <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 
     <a class="brand" href="index.html"><span>JANUX</span></a> 
     <!-- start: Header Menu --> 
     <div class="nav-no-collapse header-nav"> 
      <ul class="nav pull-right"> 
       <li class="dropdown hidden-phone"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-bell"></i> <span class="badge red"> 7 </span> </a> 
        <ul class="dropdown-menu notifications"> 
         <li class="dropdown-menu-title"> <span>You have 11 notifications</span> <a href="#refresh"><i class="icon-repeat"></i></a> </li> 
         <li class="dropdown-menu-sub-footer"> <a>View all notifications</a> </li> 
        </ul> </li> 
       <!-- start: Notifications Dropdown --> 
       <li class="dropdown hidden-phone"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-calendar"></i> <span class="badge red"> 5 </span> </a> 
        <ul class="dropdown-menu tasks"> 
         <li class="dropdown-menu-title"> <span>You have 17 tasks in progress</span> <a href="#refresh"><i class="icon-repeat"></i></a> </li> 
         <li> <a class="dropdown-menu-sub-footer">View all tasks</a> </li> 
        </ul> </li> 
       <!-- end: Notifications Dropdown --> 
       <!-- start: Message Dropdown --> 
       <li class="dropdown hidden-phone"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-envelope"></i> <span class="badge red"> 4 </span> </a> 
        <ul class="dropdown-menu messages"> 
         <li class="dropdown-menu-title"> <span>You have 9 messages</span> <a href="#refresh"><i class="icon-repeat"></i></a> </li> 
         <li> <a class="dropdown-menu-sub-footer">View all messages</a> </li> 
        </ul> </li> 
       <!-- start: User Dropdown --> 
       <li class="dropdown"> <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="halflings-icon white user"></i> Dennis Ji <span class="caret"></span> </a> 
        <ul class="dropdown-menu"> 
         <li class="dropdown-menu-title"> <span>Account Settings</span> </li> 
         <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li> 
         <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li> 
        </ul> </li> 
       <!-- end: User Dropdown --> 
      </ul> 
     </div> 
     <!-- end: Header Menu --> 
    </div> 
   </div> 
  </div> 
  <!-- start: Header --> 
  <div class="container-fluid-full"> 
   <div class="row-fluid"> 
    <!-- 侧边栏 开始 --> 
    <div id="sidebar-left" class="span2"> 
     <div class="nav-collapse sidebar-nav"> 
      <ul class="nav nav-tabs nav-stacked main-menu"> 
       <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet">仪表板</span></a></li> 
       <li> <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">下拉</span><span class="label label-important"> 3 </span></a> 
        <ul style="background:#000;"> 
         <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li> 
         <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li> 
         <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li> 
        </ul> 
        </li>
        <li> <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">文章管理</span></a> 
        <ul style="background:#000;"> 
         <li><a class="submenu" href="/admin/article/create"><i class="icon-file-alt"></i><span class="hidden-tablet">添加文章</span></a></li> 
         <li><a class="submenu" href="/admin/article"><i class="icon-file-alt"></i><span class="hidden-tablet">文章列表</span></a></li> 
        </ul> 
        </li> 
         <li> <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">用户管理</span></a>
        <ul style="background:#000;"> 
         <li><a  href="/admin/user/create"><i class="icon-file-alt"></i><span class="hidden-tablet">添加用户</span></a></li> 
         <li><a  href="/admin/user/index"><i class="icon-file-alt"></i><span class="hidden-tablet">用户列表</span></a></li> 
        </ul> 
        </li> 
      </ul> 
     </div> 
    </div> 
    <!--侧边栏 结束 --> 
    <noscript> 
     <div class="alert alert-block span10"> 
      <h4 class="alert-heading">Warning!</h4> 
      <p>You need to have <a href="" target="_blank">JavaScript</a> enabled to use this site.</p> 
     </div> 
    </noscript> 
    <!-- start: Content --> 
    <div id="content" class="span10"> 
     <ul class="breadcrumb"> 
      <li> <i class="icon-home"></i> <a href="index.html">Home</a> <i class="icon-angle-right"></i> </li> 
      <li><a href="#">Icon</a></li> 
     </ul> 
     <!--内容开始-->
     <div class="row-fluid sortable" style="height:1000px;"> 
        <div class="box span12">
        @section('container')

        @show
        </div>
     </div>
     <!--内容开始-->
    </div>
    <!--/.fluid-container--> 
    <!-- end: Content --> 
   </div>
   <!--/#content.span10--> 
  </div>
  <!--/fluid-row--> 
  <div class="modal hide fade" id="myModal"> 
   <div class="modal-header"> 
    <button type="button" class="close" data-dismiss="modal">&times;</button> 
    <h3>Settings</h3> 
   </div> 
   <div class="modal-body"> 
    <p>Here settings can be configured...</p> 
   </div> 
   <div class="modal-footer"> 
    <a href="#" class="btn" data-dismiss="modal">Close</a> 
    <a href="#" class="btn btn-primary">Save changes</a> 
   </div> 
  </div> 
  <div class="clearfix"></div> 
  <footer> 
   <p> <span style="text-align:left;float:left">&copy; 2013 <a href="downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span> </p> 
  </footer> 
  <!-- start: JavaScript--> 
  <!-- <script src="/ad/js/jquery-1.9.1.min.js"></script>  -->
  <!-- <script src="/ad/js/jquery-migrate-1.0.0.min.js"></script>  -->
  <!-- <script src="/ad/js/jquery-ui-1.10.0.custom.min.js"></script>  -->
  <!-- <script src="/ad/js/jquery.ui.touch-punch.js"></script>  -->
  <!-- <script src="/ad/js/modernizr.js"></script>  -->
  <!-- <script src="/ad/js/bootstrap.min.js"></script>  -->
 <!--  <script src="/ad/js/jquery.cookie.js"></script> 
  <script src="/ad/js/fullcalendar.min.js"></script> 
  <script src="/ad/js/jquery.dataTables.min.js"></script> 
  <script src="/ad/js/excanvas.js"></script>  -->
 <!--  <script src="/ad/js/jquery.flot.js"></script> 
  <script src="/ad/js/jquery.flot.pie.js"></script> 
  <script src="/ad/js/jquery.flot.stack.js"></script> 
  <script src="/ad/js/jquery.flot.resize.min.js"></script> 
  <script src="/ad/js/jquery.chosen.min.js"></script> 
  <script src="/ad/js/jquery.uniform.min.js"></script> 
  <script src="/ad/js/jquery.cleditor.min.js"></script> 
  <script src="/ad/js/jquery.noty.js"></script>  -->
<!--   <script src="/ad/js/jquery.elfinder.min.js"></script> 
  <script src="/ad/js/jquery.raty.min.js"></script> 
  <script src="/ad/js/jquery.iphone.toggle.js"></script> 
  <script src="/ad/js/jquery.uploadify-3.1.min.js"></script> 
  <script src="/ad/js/jquery.gritter.min.js"></script> 
  <script src="/ad/js/jquery.imagesloaded.js"></script> 
  <script src="/ad/js/jquery.masonry.min.js"></script> 
  <script src="/ad/js/jquery.knob.modified.js"></script> 
  <script src="/ad/js/jquery.sparkline.min.js"></script> --> 
  <script src="/ad/js/counter.js"></script> 
  <!-- <script src="/ad/js/retina.js"></script>  -->
  <script src="/ad/js/custom.js"></script> 
  <!-- end: JavaScript-->   
 </body>
</html>