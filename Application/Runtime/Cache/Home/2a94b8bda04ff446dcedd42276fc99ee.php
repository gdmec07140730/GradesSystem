<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php echo C('title') ;?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="/Grades/Public/Admin/i/favicon.png">
  <link rel="stylesheet" href="/Grades/Public/Admin/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1><?php echo C('sitename') ;?> - 成绩查询</h1>
    <p>登陆<br/><a href="<?php echo U('Admin/Index/index') ;?>">后台管理系统</a></p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <form method="post" class="am-form" action="<?php echo U('index') ;?>" method="post">
      <label for="email">姓名:</label>
      <input type="text" name="truename" id="truename" value="">
      <br>
      <label for="username">学号:</label>
      <input type="text" name="username" id="username" value="">
      <br>
      <!-- <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label> -->
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="查询" class="am-btn am-btn-primary am-btn-block am-fl">
      </div>
    </form>
    <hr>
    <p>版权所有 © <?php echo C('copyright') ;?></p>
    <p>备案号　<?php echo C('icp') ;?></p>
    <?php if(is_array($grades)): $i = 0; $__LIST__ = $grades;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p> <?php echo gettermName($vo['term_id']) ;?> <?php echo getsubjectName($vo['subject_id']) ;?> 成绩:<?php echo $vo['score'] ;?>分</p><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
</body>
</html>