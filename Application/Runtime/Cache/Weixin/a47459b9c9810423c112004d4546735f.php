<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>活动-<?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/toupiao2" rel="stylesheet">
		<style>
			html,
			body {
				background-color: #efeff4;
			}
			
			.mui-card-footer {
				width: 95%;
				height: 50px;
				margin: 0px auto;
				background-color: #FFFFFF;
				border-radius: 5px;
			}
			
			.mui-card-footer .mui-card-link,
			.mui-card-header .mui-card-link {
				color: #707070;
				margin: 10px;
				font-size: 14px;
				height: 40px;
				line-height: 20px !important;
				text-align: center;
				display: inline;
				margin: 0px;
				margin-top: 15px;
			}
			
			.mui-card-link {
				width: 32%;
			}
			
			.left-border {
				border-left: 1px solid #707070;
			}
			
			.mui-bar {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			
			.mui-table-view.mui-grid-view .mui-table-view-cell .mui-media-body {
				height: 100px;
				line-height: 30px;
				margin-top: -5px;
				background-color: #FFFFFF;
				box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
			}
			
			.baoming {
				width: 95%;
				margin: 20px auto;
			}
			
			.chaxun {
				background-color: #fd4699;
				border: #FFFFFF;
				/*margin:0px 10px;*/
				float: right;
				height: 38px;
			}
			
			.mui-icon-extra {
				font-size: 16px;
				width: 80%;
				border-radius: 50px;
			}
			
			.mui-table-view:before {
				height: 0;
			}
			
			.cansai1 {
				background-color: #FFFFFF;
				border: 1px solid #fd4699;
				color: #fd4699;
				width: 90%;
				border-radius: 5px;
			}
			
			.toupiao {
				text-align: center;
				width: 50%;
				margin: 0px auto;
			}
			
			.tou {
				background-color: #cccccc;
				border: 1px solid #cccccc;
				color: #323232;
				width: 80%;
				border-radius: 50px;
			}
			
			.mui-bar-tab {
				box-shadow: none;
			}
			
			.mui-icon,
			.mui-icon-extra {
				color: #555555;
				font-size: 18px;
				margin-top: 5px;
			}
			
			.mui-table-view-cell {
				padding: 0;
			}
			
			.mui-card-footer .mui-card-link .pai {
				margin-top: 2px;
			}
			
			.mui-content-padded {
				text-align: center;
			}
			
			.mui-pagination>li.mui-active>a {
				background-color: #fd4699;
				border: 1px solid #fd4699;
				color: #FFFFFF;
			}
			
			.cansai {
				background-color: #fd4699;
				border: 1px solid #fd4699;
				width: 90%;
				border-radius: 5px;
			}
			
		/* 	.mui-card-content span {
			display: inline-block;
			border-top: none;
			border-left: none;
			border-right: none;
			border-width: 0.2rem;
			margin: 3px 15px;
			letter-spacing: 0.1rem;
			border-bottom: 0.1rem solid #fd4699;
			color: #fd4699;
		} */
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class=" mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('new_huodong');?>" style="color: #FFFFFF;font-size:24px;margin-top:0"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">活动</h1>
		</header>

		<div class="mui-content">
			<!--静态图片-->
			<img src="/new_lgx/<?php echo ($activity["logo"]); ?>" style="width: 100%;height: 200px;">

			<!-- <div class="baoming">
				<input style="width: 80%; float: left; font-size: 14px;" type="text" class="mui-input-clear contact" placeholder="请输入选手编号或名称">
				<button type="button" class="mui-btn mui-btn-primary chaxun">
					查询
					        </button>
			</div> -->

			

			<div class="top">
				<div class="mui-card-footer" style="width: 100%;">
					<a class="mui-card-link">参赛选手<br><?php echo ($num); ?></span>
					</a>
					<a class="mui-card-link left-border">累计投票<br><?php echo ($all); ?></span>
					</a>
					<a class="mui-card-link left-border">访问次数<br><?php echo ($activity["view"]); ?></span>
					</a>
				</div>
				<div style="height: 15px;background-color: #FFFFFF;"></div>
				<div class="mui-card-footer" style="width: 100%;">

					<a class="mui-card-link" href="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
						<button type="button" class="mui-btn mui-btn-primary cansai1">  
									全部参赛
								</button>
					</a>
					<a class="mui-card-link" href="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid'],'order'=>1));?>">
						<button type="button" class="mui-btn mui-btn-primary cansai1">  
									最新参赛
								</button></a>
					<a class="mui-card-link">
						<button type="button" class="mui-btn mui-btn-primary cansai">  
									活动规则
								</button></a>
				</div>
				<div class="mui-card">
					<div class="mui-card-content">
					
						<div class="mui-card-content-inner">
							活动开始时间：<?php echo (date('Y-m-d H:i:s',$activity["start_time"])); ?><br> 活动截止时间：<?php echo (date('Y-m-d H:i:s',$activity["end_time"])); ?> <br> <?php echo (htmlspecialchars_decode($activity["content"])); ?>
						</div>
					</div>
				</div>
			</div>
			<div style="height: 60px;"></div>
			<nav class="mui-bar mui-bar-tab" style="background: #eeeeee;">
				<a class="mui-tab-item" href="<?php echo U('new_baoming2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
					<span class="mui-icon-extra mui-icon-extra-topic "></span>
					<p style="color: #555555;">报名</p>
				</a>
				<a class="mui-tab-item" href="#picture">
					<span class="mui-icon mui-icon-search" style="margin-top: 2px;"></span>
					<p style="color: #555555;">搜索</p>
				</a>
				<a class="mui-tab-item" href="<?php echo U('new_paiming2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
					<span class="mui-icon-extra mui-icon-extra-rank"></span>
					<p style="color: #555555;">排名</p>
				</a>

			</nav>
			<div id="picture" class="mui-popover mui-popover-action mui-popover-bottom">
				<ul class="mui-table-view">

					<li class="mui-table-view-cell yi" style="height: 50px;">
						 <form action="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>" method="get">    
						<input style="width: 70%; float: left; height: 30px;margin-top: 17px;" type="text" class="mui-input-clear contact" placeholder="请输入选手姓名或编号" name="title" value="<?php echo ($_GET['title']); ?>">
						<button type="submit" class="mui-btn mui-btn-primary mui-icon mui-icon-search" style="width: 72px;background-color: #fd4699; border:1px solid #fd4699;color: #FFFFFF;margin-top:15px; "> 
		            搜索
		        </button>

		        </form>
					</li>

				</ul>
			</div>

			<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
 <script type="text/javascript">
mui('body').on('tap','a',function(){document.location.href=this.href;});
   </script>
	</body>

</html>