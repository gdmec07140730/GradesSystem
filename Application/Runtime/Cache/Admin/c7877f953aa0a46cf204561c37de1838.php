<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo C('sitename') ;?></title>
	<meta name="description" content="<?php echo C('description') ;?>">
	<meta name="keywords" content="<?php echo C('keywords') ;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="icon" type="image/png" href="/Grades/Public/Admin/i/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="/Grades/Public/Admin/i/app-icon72x72@2x.png">
	<meta name="apple-mobile-web-app-title" content="Amaze UI" />
	<link rel="stylesheet" href="/Grades/Public/Admin/css/amazeui.min.css"/>
	<link rel="stylesheet" href="/Grades/Public/Admin/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
	以获得更好的体验！</p>
<![endif]-->
	

<header class="am-topbar admin-header">
	<div class="am-topbar-brand">
		<strong><?php echo C('sitename') ;?></strong> <small>后台</small>
	</div>

	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

	<div class="am-collapse am-topbar-collapse" id="topbar-collapse">

		<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
			<!-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li> -->
			<li class="am-dropdown" data-am-dropdown>
				<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
					<span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
				</a>
				<ul class="am-dropdown-content">
					<li><a href="<?php echo U('Public/passwd') ;?>"><span class="am-icon-key"></span> 修改密码</a></li>
					<li><a href="<?php echo U('Public/logout') ;?>"><span class="am-icon-power-off"></span> 退出</a></li>
				</ul>
			</li>
			<li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
		</ul>
	</div>
</header>
<div class="am-cf admin-main">
	<!-- sidebar start -->
	<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
		<div class="am-offcanvas-bar admin-offcanvas-bar">
			<ul class="am-list admin-sidebar-list">
				<li>
					<a href="<?php echo U('Index/index');?>">
						<span class="am-icon-home"></span> 首页
					</a>
				</li>
				<li>
					<a href="<?php echo U('Term/index');?>">
						<span class="am-icon-users"></span> 学期管理
					</a>
				</li>
				<li>
					<a href="<?php echo U('Subject/index');?>" class="am-cf">
						<span class="am-icon-plus"></span> 科目管理
					</a>
				</li>
				<li>
					<a href="<?php echo U('Class/index');?>" class="am-cf">
						<span class="am-icon-plus"></span> 班级管理
					</a>
				</li>
				<li class="admin-parent">
					<a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
						<span class="am-icon-users"></span> 用户管理
						<span class="am-icon-angle-right am-fr am-margin-right"></span>
					</a>
					<ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
						<li>
							<a href="<?php echo U('Teacher/index');?>" class="am-cf">
								<span class="am-icon-list"></span> 教师管理
							</a>
						</li>
						<li>
							<a href="<?php echo U('Student/index');?>" class="am-cf">
								<span class="am-icon-list"></span> 学生管理
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo U('Grades/index');?>">
						<span class="am-icon-users"></span> 成绩管理
					</a>
				</li>
				<li>
					<a href="<?php echo U('Site/config');?>">
						<span class="am-icon-cog"></span> 站点设置
					</a>
				</li>
			</ul>

			<div class="am-panel am-panel-default admin-sidebar-panel">
				<div class="am-panel-bd">
					<p><span class="am-icon-bookmark"></span> 当前系统时间</p>
					<p>
						<?php echo date('Y-m-d H:i:s', strtotime('now')); ?> <br/>
					</p>
				</div>
			</div>
			<!-- <div class="am-panel am-panel-default admin-sidebar-panel">
				<div class="am-panel-bd">
					<p><span class="am-icon-bookmark"></span> 公告</p>
					<p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
				</div>
			</div> -->

		</div>
	</div>
	<!-- sidebar end -->

	<!-- content start -->
	<div class="admin-content">


	<div class="am-cf am-padding">
		<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户管理</strong> / <small>新增教师</small></div>
	</div>
	<form class="am-form" action="<?php echo U('add');?>" method="POST">
		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">学工号</div>
			<div class="am-u-sm-8 am-u-md-4">
				<input type="text" class="am-input-sm" name="username" value="<?php echo $site['username'] ;?>">
			</div>
			<div class="am-hide-sm-only am-u-md-6"></div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">真实姓名</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="text" class="am-input-sm" name="truename" value="<?php echo $site['truename'] ;?>">
			</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">密码</div>
			<div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
				<input type="text" class="am-input-sm" name="password" value="<?php echo $site['password'] ;?>">
			</div>
		</div>

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">性别</div>
			<div class="am-u-sm-8 am-u-md-4">
				<select data-am-selected="{btnSize: 'sm'}"	 name="sex">
					<?php if($site['sex'] == 1): ?><option value="1" selected="selected">男</option>
						<option value="0">女</option>
					<?php else: ?>
						<option value="1">男</option>
						<option value="0" selected="selected">女</option><?php endif; ?>
				</select>
			</div>
			<div class="am-hide-sm-only am-u-md-6">*必填</div>
		</div>

<!-- 		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">班级</div>
			<div class="am-u-sm-8 am-u-md-4">
				<select data-am-selected="{btnSize: 'sm'}"	 name="class_id">
					<?php if(is_array($classlist)): $i = 0; $__LIST__ = $classlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo['id'] ;?>"><?php echo $vo['name'] ;?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			<div class="am-hide-sm-only am-u-md-6">*必填</div>
		</div> -->

		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">用户角色</div>
			<div class="am-u-sm-8 am-u-md-4">
				<select data-am-selected="{btnSize: 'sm'}" name="role">
						<option value="1" selected="selected">教师</option>
				</select>
			</div>
			<div class="am-hide-sm-only am-u-md-6">*必填</div>
		</div>



		<div class="am-g am-margin-top">
			<div class="am-u-sm-4 am-u-md-2 am-text-right">　
			</div>
			<div class="am-u-sm-8 am-u-md-4">
				<button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
			</div>
			<div class="am-hide-sm-only am-u-md-6">　</div>
		</div>
		<div class="am-g am-margin-top">
			<p>　</p>
			<p>　</p>
			<p>　</p>
			<p>　</p>
			<p>　</p>
		</div>
	</form>



  </div>
  <!-- content end -->

</div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">版权所有 © <?php echo C('copyright') ;?></p>
  <p class="am-padding-left">网站备案　<?php echo C('ICP') ;?></p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Grades/Public/Admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Grades/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/Grades/Public/Admin/js/amazeui.min.js"></script>
<script src="/Grades/Public/Admin/js/app.js"></script>
</body>
</html>