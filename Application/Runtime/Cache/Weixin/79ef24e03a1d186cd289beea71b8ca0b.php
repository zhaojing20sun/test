<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title><?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">
		<style>
		html,
			body {
				background-color: #efeff4;
			}
			
			.mui-bar .mui-pull-left .mui-icon {
				padding-right: 5px;
				font-size: 28px;
			}
			
			.mui-bar .mui-btn {
				font-weight: normal;
				font-size: 17px;
			}
			
			.mui-bar .mui-btn-link {
				top: 1px;
			}
			
			.mui-content img {
				width: 100%;
			}
			
			.hm-description {
				margin: 15px;
			}
			
			.hm-description>li {
				font-size: 14px;
				color: #8f8f94;
			}
			
			.mui-bar {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			
			.mui-card-footer {
				width: 95%;
				height: 50px;
				margin: 0px auto;
				background-color: #FF5053;
				border-radius: 5px;
			}
			
			.mui-card-footer .mui-card-link,
			.mui-card-header .mui-card-link {
				color: #FFFFFF;
				margin: 10px;
				font-size: 14px;
				height: 40px;
				line-height: 20px !important;
				text-align: center;
				display: inline;
				margin: 0px;
			}
			
			.left-border {
				border-left: 1px solid #fff;
			}
			
			p {
				color: #000000;
				margin-bottom: 2px;
				padding: 3px;
			}
			
			.mui-btn.mui-icon {
				font-size: 14px;
				width: 80%;
				line-height: 2;
			}
			
			.top width: 95%;
			margin: 0px auto;
		}
		.nei {
			font-size: 12px;
		}
		.mui-card-link {
			width: 32%;
		}
		.nei p {
			font-size: 12px;
		}
		.mui-input-row {
			position: absolute;
			margin: 0px auto;
		}
		.mui-input-row>.mui-input {
			width: 70%;
		}
		.mui-input-row .mui-btn {
			line-height: 1.4;
			float: inherit;
			width: 56px;
			padding: 10px 4px;
			background-color: #FF5053;
			border: #FF5053;
		}
		.mui-table-view.mui-grid-view .mui-table-view-cell .mui-media-body {
			height: 100px;
			line-height: 30px;
			margin-top: -5px;
			background-color: #E8E8E8;
		}
		.mui-table-view.mui-grid-view .mui-table-view-cell .mui-media-object {
			height: 200px;
		}
		.mui-icon,
		.mui-icon-extra {
			font-size: 25px;
			position: relative;
			color: #fff;
			padding: 0;
		}
		.mui-icon-extra-like{
			 font-size: 14px;
			  width: 85%;
			   line-height: 2.2;
			   background-color: #ec7063;
			   border:#ec7063 ;
		}
		.mui-popover .mui-table-view {
			background: url(/new_lgx/Public/weixin/new_huodong/images/alphabg.png);
		}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class=" mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('new_huodong');?>" style="color: #FFFFFF;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">投票</h1>
		</header>

		<div class="mui-content">
			<!--静态图片-->
			<img src="/new_lgx/<?php echo ($activity["logo"]); ?>" style="width: 100%;">
			<div style="height: 15px;"></div>
			<div class="mui-card-footer">

				<a class="mui-card-link">参赛选手<br><?php echo ($num); ?></a>
				<a class="mui-card-link left-border">累计投票<br><?php echo ($all); ?></a>
				<a class="mui-card-link left-border">访问次数<br><?php echo ($activity["view"]); ?></a>
			</div>
			<div style="height: 15px;"></div>
			<div class="top">
				<div style="width: 95%; margin: 0px auto;">
				<p style="font-size:15px;padding-left:4%"><?php echo ($activity["title"]); ?></p>
					<p><span class="mui-icon-extra mui-icon-extra-outline" style="color:#000000; padding: 5px;"></span>开始时间:<?php echo (date('Y-m-d H:i:s',$activity["start_time"])); ?></p>
					<p><span class="mui-icon-extra mui-icon-extra-outline" style="color:#000000; padding: 5px;"></span>截止时间:<?php echo (date('Y-m-d H:i:s',$activity["end_time"])); ?></p>
					<p><?php echo (htmlspecialchars_decode($activity["content"])); ?></p>
					<div class="mui-input-row">
						<input type="text" class="mui-input" data-input-password="3">
						<button type="button" class="mui-btn mui-btn-primary mui-icon mui-icon-search">
		            搜索
		        </button>
					</div>
				</div>
				<ul class="mui-table-view mui-grid-view">
				<?php if($man){ ?>
				<?php if(is_array($man)): foreach($man as $key=>$v): ?><li class="mui-table-view-cell mui-media mui-col-xs-6">
						<a href="<?php echo U('new_activity_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>">
							<img class="mui-media-object" src="<?php $re=M('weixin_activity_pic')->where(array('aid'=>$v['id']))->select(); echo '/new_lgx'.$re[0]['showpic'] ?>">
						</a>	
							<div class="mui-media-body">
								<p style="text-align: left; color:#ec7063 ;text-align:center"><?php echo ($v["id"]); ?>号 <?php echo ($v["name"]); ?></p>
								<?php $re1=M('weixin_activity_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['id']))->find(); ?>
								<button type="button" class="mui-btn mui-btn-primary mui-icon-extra mui-icon-extra-like" <?php if(!$re1) echo 'style="display:none"' ?>>  
									已支持
								</button>
								<button type="button" class="mui-btn mui-btn-primary mui-icon-extra mui-icon-extra-like zhichi" <?php if($re1) echo 'style="display:none"' ?>>  
									支持一下
								</button>

								<input type="hidden" value="<?php echo ($v["id"]); ?>">
								<p><span class="piao"><?php echo M('weixin_activity_message')->where(array('aid'=>$v['id']))->count() ?></span>票</p>
							</div>
						
					</li><?php endforeach; endif; ?>
				<?php }else{ ?>
                 <li class="mui-table-view-cell mui-media mui-col-xs-6" style="text-align:center;width:100%"><img src="/new_lgx/Public/weixin/new_write/images/arclist/78.gif" style="width:25px;height:25px;"> 没有此报名信息</li>
				<?php } ?>
				</ul>
			</div>
			<div style="height: 60px;"></div>
			<nav class="mui-bar mui-bar-tab" style="background: #000000;">
				<a class="mui-tab-item baoming" href="<?php echo U('new_baoming',array('id'=>$_SESSION['uid'],'nid'=>$_GET['nid']));?>">
					<span class="mui-icon mui-icon-image"></span>
					<p style="color: #FFFFFF;">报名</p>
				</a>
				<a class="mui-tab-item" href="#picture">
					<span class="mui-icon mui-icon-search"></span>
					<p style="color: #FFFFFF;">搜索</p>
				</a>
				<a class="mui-tab-item" href="<?php echo U('new_paiming',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
					<span class="mui-icon-extra mui-icon-extra-rank"></span>
					<p style="color: #FFFFFF;">排名</p>
				</a>
			</nav>
			<div id="picture" class="mui-popover mui-popover-action mui-popover-bottom">

			<form action="<?php echo U('new_toupiao',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>" method="get">
			<ul class="mui-table-view">
			
				<li class="mui-table-view-cell yi" style="height: 80px;">
				<input style="width: 70%; float: left; height: 30px;margin-top: 14px; opacity: no;" type="text" class="mui-input-clear contact" placeholder="请输入选手姓名或编号" name='title' value="<?php echo ($_GET['title']); ?>">
				<button type="submit" class="mui-btn mui-btn-primary mui-icon mui-icon-search" style="width: 72px;background-color: #FF5053; border:#FF5053; opacity: no;"> 
		            搜索
		        </button>
				</li>
				
			</ul>
			</form>

		</div>
		<input type="hidden" id="wid" value="<?php echo $_SESSION['wid'] ?>">
	 <script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
			<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
			 <script type="text/javascript">
mui('body').on('tap','a',function(){document.location.href=this.href;});

   </script>
			<script type="text/javascript">
       $(function(){
       
       
       	 $(".zhichi").click(function(){
       	 
       	 	var zhichi=$(this)
       	 	var id=$(this).next().val()
       	 	var wid=$("#wid").val()
       	 	    $.ajax({
                      	 url:"<?php echo U('activity_toupiao');?>",
                      	 type:'post',
                      	 data:"wid="+wid+"&id="+id,
                      	 success:function(msg){
                      	 	 if(msg==1){
                      	 	 	 alert('感谢您的支持！')
                      	 	 	 var piao=zhichi.next().next().find(".piao").html()
                      	 	 	 zhichi.next().next().find(".piao").html(parseInt(piao)+1)
                      	 	 	 zhichi.prev().show()
                      	 	 	 zhichi.hide()
                      	 	 }
                      	 }
                      })
       	 })
       })
			</script>
         
	</body>

</html>