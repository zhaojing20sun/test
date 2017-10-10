<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title><?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!--标准mui.css-->
		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">

		<style>
			.title {
				margin: 20px 15px 7px;
				color: #000000;
				font-size: 15px;
			}
			
			.mui-bar {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			
			.mui-icon-extra,
			.mui-icon {
				font-size: 16px;
				padding: 5px;
			}
			
			.title p {
				color: #000000;
				margin-bottom: 2px;
				/*border-bottom:1px solid #DDDDDD;*/
			}
			
			a {
				color: #000000;
			}
			
			.mui-badge {
				border-radius: 5px;
				padding: 5px;
			}
		</style>
	</head>

	<body>
		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #FFFFFF;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">投票排名</h1>
		</header>
		<div class="mui-content">
			<div class="title">
				<h4><?php echo ($activity["title"]); ?></h4>
				<p><span class="mui-icon-extra mui-icon-extra-outline"></span>活动截止时间:<?php echo (date('Y-m-d H:i:s',$activity["end_time"])); ?></p>
				<p><?php echo (htmlspecialchars_decode($activity["content"])); ?></p>
			</div>
			<h4 style="padding: 10px;">最新排名</h4>
			<ul class="mui-table-view">
			<?php if(is_array($man)): foreach($man as $k=>$v): ?><li class="mui-table-view-cell">
					<div class="mui-card-footer">
						<a class="mui-card-link" href="<?php echo U('new_activity_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"><span class="mui-badge mui-badge-danger">第<?php echo ($k+1); ?>名</span></a>
						<a class="mui-card-link" href="<?php echo U('new_activity_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"><?php echo ($v["name"]); ?></a>
						<a class="mui-card-link" href="<?php echo U('new_activity_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"><?php echo M('weixin_activity_message')->where(array('aid'=>$v['id']))->count() ?>票</a>
					</div>
				</li><?php endforeach; endif; ?>
				
			</ul>
		</div>
	</body>
	<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
	<script>
		mui.init({
			swipeBack: true //启用右滑关闭功能
		});
	</script>

</html>