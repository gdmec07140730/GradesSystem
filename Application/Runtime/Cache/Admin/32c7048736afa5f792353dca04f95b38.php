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
		<div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">科目管理</strong> / <small>Subject Controll</small></div>
	</div>

	<div class="am-g">
		<div class="am-u-sm-12 am-u-md-6">
			<div class="am-btn-toolbar">
				<div class="am-btn-group am-btn-group-xs">
					<a href="<?php echo U('add') ;?>">
						<button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
					</a>
				</div>
			</div>
		</div>


	</div>

	<div class="am-g">
		<div class="am-u-sm-12">
			<form class="am-form">
				<table class="am-table am-table-striped am-table-hover table-main">
					<thead>
						<tr>
							<th class="table-check">
								<input type="checkbox" />
							</th>
							<th class="table-id">ID</th>
							<th class="table-title">科目名称</th>
							<th class="table-set">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($linklist)): $i = 0; $__LIST__ = $linklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input type="checkbox" />
								</td>
								<td><?php echo $vo['id'] ;?></td>
								<td><?php echo $vo['name'] ;?></td>

								<td>
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<button class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="location.href='<?php echo U('edit',array('id'=>$vo['id'])) ;?>';return false;">
													<span class="am-icon-pencil-square-o"></span> 编辑
											</button>
											<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"  onclick="location.href='<?php echo U('del',array('id'=>$vo['id']));?>';return false;">
												<span class="am-icon-trash-o"></span> 删除
											</button>
										</div>
									</div>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</form>
		</div>

	</div>



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