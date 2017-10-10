<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>排名-<?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/toupiao1.css" rel="stylesheet">
		<style>
			html,
			body {
				background: url(/new_lgx/Public/weixin/new_huodong/images/beijing.png) center 0 no-repeat;
				background-size: cover;
			}
			.mui-bar-nav {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			
			.mui-table-view-cell:after {
				height: 0;
			}
			
			.mui-table-view-cell {
				padding: 0;
			}
			
			.one {
				height: 40px;
			}
			
			.one .two {
				line-height: 3;
			}
			
			.jiazai {
				background-color: #ffb6c1;
				border: #ffb6c1;
				border-radius: 5px;
				color: #FFFFFF;
				text-align: center;
				margin: 0px auto;
				display: block;
				margin-top: 1rem;
			}
			.mui-bar-tab {
				box-shadow:none;
			}
			.mui-table-view {
    
    margin-top: 10px;
}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #FFFFFF;font-size:24px;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">排名</h1>
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

			<button type="button" class="mui-btn mui-btn-primary mui-icon mui-icon-plus">
					我要报名
		        </button>
			<p class="huodong" style="padding-left:18px;">活动于<span class="time"><?php echo (date('Y',$activity["end_time"])); ?></span>年<span class="time"><?php echo (date('m',$activity["end_time"])); ?></span>月<span class="time"><?php echo (date('d',$activity["end_time"])); ?></span>日<span class="time"><?php echo (date('H',$activity["end_time"])); ?></span>时<span class="time"><?php echo (date('i',$activity["end_time"])); ?></span>分结束</p>
			<!-- <div class="baoming" style="width:90%;padding-left:20px;position:relative;z-index:99">
				<input style="width: 70%; float: left;font-size: 14px;" type="text" class="mui-input-clear contact" placeholder="请输入选手编号或名称">
				<button type="button" class="mui-btn mui-btn-primary mui-icon mui-icon-search">
					搜索
					        </button>
			</div> -->
		</div>
		<div class="zong">
			<ul class="mui-table-view">

				<li class="mui-table-view-cell">
					<div class="mui-card-footer one">
						<a class="mui-card-link two"><span class="mui-icon-extra mui-icon-extra-rank"></span>排名</a>
						<a class="mui-card-link two"><span class="mui-icon-extra mui-icon-extra-peoples"></span>姓名</a>
						<a class="mui-card-link two"><span class="mui-icon-extra mui-icon-extra-xiaoshuo"></span>票数</a>
					</div>
				</li>
				<?php if(is_array($man)): foreach($man as $k=>$v): ?><li class="mui-table-view-cell">
					<div class="mui-card-footer one">
						<a class="mui-card-link two" href="<?php echo U('new_activity_detial1',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>">第<?php echo ($k+1); ?>名</a>
						<a class="mui-card-link two" href="<?php echo U('new_activity_detial1',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"><?php echo ($v["name"]); ?></a>
						<a class="mui-card-link two" href="<?php echo U('new_activity_detial1',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"><?php echo M('weixin_activity_message')->where(array('aid'=>$v['id']))->count() ?>票</a>
					</div>
				</li><?php endforeach; endif; ?>

			</ul>

			
		</div>

		<div style="height: 50px;"></div>

			<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item" href="<?php echo U('new_toupiao1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon-extra mui-icon-extra-peoples">全部参赛</span>

			</a>
			<a class="mui-tab-item" href="#"  style="background-color: #ffb6c1;">
				<span class="mui-icon-extra mui-icon-extra-class">当前排名</span>

			</a>
			<a class="mui-tab-item" href="<?php echo U('new_huodong1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon mui-icon-gear">活动规则</span>
 
			</a>
		</nav>
		<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
 <script type="text/javascript">
mui('body').on('tap','a',function(){document.location.href=this.href;});

   </script>
		</body>

</html>