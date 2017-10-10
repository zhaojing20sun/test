<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>投票-<?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/toupiao1.css" rel="stylesheet">
		<style>
			html,
				body {
				background: url(/new_lgx/Public/weixin/new_huodong/images/beijing.png);
				background-size: cover;
			}
				
			.mui-bar-nav {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			.mui-bar-tab {
				box-shadow:none;
			}
			.mui-card{
				width: 90%;
				margin: 0px auto;
				border-radius: 4px;
			}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class=" mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('new_huodong');?>" style="color: #FFFFFF;font-size:24px;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">投票</h1>
		</header>

		<div class="mui-content">
			<!--静态图片-->
			<img src="/new_lgx/<?php echo ($activity["logo"]); ?>" style="width: 100%;height: 100px;">
			<div class="mui-card-footer">
				<a class="mui-card-link"><span class="mui-icon-extra mui-icon-extra-holiday"></span>参与者<br><?php echo ($num); ?></a>
				<a class="mui-card-link left-border"><span class="mui-icon-extra mui-icon-extra-holiday"></span>投票数<br><?php echo ($all); ?></a>
				<a class="mui-card-link left-border"><span class="mui-icon-extra mui-icon-extra-holiday"></span>访问量<br><?php echo ($activity["view"]); ?></a>
			</div>
		</div>
		<div class="zong" style="width:100%">
          <a href="<?php echo U('new_baoming1',array('id'=>$_SESSION['uid'],'nid'=>$_GET['nid']));?>">
			<button type="button" class="mui-btn mui-btn-primary mui-icon mui-icon-plus">
					我要报名
		        </button>
		        </a>
			<p class="huodong" style="padding-left:18px;">活动于<span class="time"><?php echo (date('Y',$activity["end_time"])); ?></span>年<span class="time"><?php echo (date('m',$activity["end_time"])); ?></span>月<span class="time"><?php echo (date('d',$activity["end_time"])); ?></span>日<span class="time"><?php echo (date('H',$activity["end_time"])); ?></span>时<span class="time"><?php echo (date('i',$activity["end_time"])); ?></span>分结束</p>

		 
			
		</div>
	
			<div class="mui-card">
				<div class="mui-card-content">
					<span>活动规则</span>
					<div class="mui-card-content-inner">
						活动开始时间：<?php echo (date('Y-m-d H:i:s',$activity["start_time"])); ?> <br>
					        活动截止时间：<?php echo (date('Y-m-d H:i:s',$activity["end_time"])); ?> <br>
					       <?php echo (htmlspecialchars_decode($activity["content"])); ?>
					</div>
				</div>
			</div>
	
		
		<div style="height: 60px;"></div>

		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item" href="<?php echo U('new_toupiao1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon-extra mui-icon-extra-peoples">全部参赛</span>

			</a>
			<a class="mui-tab-item" href="<?php echo U('new_paiming1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon-extra mui-icon-extra-class">当前排名</span>

			</a>
			<a class="mui-tab-item" href="#" style="background-color: #ffb6c1;">
				<span class="mui-icon mui-icon-gear">活动规则</span>
 
			</a>
		</nav>
		<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
   <script type="text/javascript">
mui('body').on('tap','a',function(){document.location.href=this.href;});
   </script>
	</body>

</html>