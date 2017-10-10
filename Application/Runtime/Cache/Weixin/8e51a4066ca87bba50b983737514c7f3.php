<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>投票-<?php echo ($activity["title"]); ?></title>
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
			
			.cansai {
				background-color: #fd4699;
				border: 1px solid #fd4699;
				width: 90%;
				border-radius: 5px;
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
			
			.user-number {
				font-size: 1rem;
				background: rgba(0, 0, 0, 0.5);
				border-bottom-right-radius: 2px;
				min-width: 4rem;
				height: 2rem;
				line-height: 2rem;
				position: absolute;
				top: 0;
				left: 0;
				color: #fff;
				display: block;
				text-align: center;
				margin: 10px 14px;
			}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #FFFFFF;margin-top:0"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">投票</h1>
		</header>

		<div class="mui-content">
			<!--静态图片-->
			<img src="/new_lgx/<?php echo ($activity["logo"]); ?>" style="width: 100%;height: 200px;">
			<div class="baoming">
			<form action="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>" method="get">    
				<input style="width: 80%; float: left; font-size: 14px;" type="text" class="mui-input-clear contact" name="title" value="<?php echo ($_GET['title']); ?>" placeholder="请输入选手编号或名称">
				<button type="submit" class="mui-btn mui-btn-primary chaxun">
					查询
		        </button>
		        </form>
			</div>

			<div style="height: 15px;"></div>

			<div class="top">
				<div class="mui-card-footer" style="width: 100%;">
					<a class="mui-card-link">参赛选手<br><?php echo ($num); ?></a>
					<a class="mui-card-link left-border">累计投票<br><?php echo ($all); ?></a>
					<a class="mui-card-link left-border">访问次数<br><?php echo ($activity["view"]); ?></a>
				</div>
				<div style="height: 15px;background-color: #FFFFFF;"></div>
				<div class="mui-card-footer" style="width: 100%;">

					<a class="mui-card-link" href="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
						<button type="button" class="mui-btn mui-btn-primary <?php if(!$_GET['order']){ echo "cansai";}else{ echo "cansai1";} ?>">  
									全部参赛
								</button>
					</a>
					<a class="mui-card-link" href="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid'],'order'=>1));?>">
						<button type="button" class="mui-btn mui-btn-primary <?php if($_GET['order']){ echo "cansai";}else{ echo "cansai1";} ?>">  
									最新参赛
								</button></a>
					<a class="mui-card-link" href="<?php echo U('new_huodong2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
						<button type="button" class="mui-btn mui-btn-primary cansai1">  
									活动规则
								</button></a>
				</div>
				<ul class="mui-table-view mui-grid-view">
				<?php if($man){ ?>
				<?php if(is_array($man)): foreach($man as $key=>$v): ?><li class="mui-table-view-cell mui-media mui-col-xs-6">
						<a href="<?php echo U('new_activity_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid'],'type'=>3));?>">
							<img class="mui-media-object" src="<?php $re=M('weixin_activity_pic')->where(array('aid'=>$v['id']))->select(); echo '/new_lgx'.$re[0]['showpic'] ?>"  style="height:106px;">
							<div class="mui-media-body">
								<span class="user-number"><?php echo ($v["id"]); ?>号</span>
								<p class="toupiao"><?php echo ($v["name"]); ?></p>
								</a>
								<p class="toupiao"><span class="piao"><?php echo M('weixin_activity_message')->where(array('aid'=>$v['id']))->count() ?></span> 票</p>
								<?php $re1=M('weixin_activity_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['id']))->find(); ?>
									<button type="button" class="mui-btn mui-btn-primary tou" <?php if(!$re1) echo 'style="display:none"' ?>>  
									已投票
								</button>
								<button type="button" class="mui-btn mui-btn-primary tou  zhichi" <?php if($re1) echo 'style="display:none"' ?>>  
									投票
								</button>
                               <input type="hidden" value="<?php echo ($v["id"]); ?>">
							</div>
						
					</li><?php endforeach; endif; ?>	
				 <?php }else{ ?>
                 <li class="mui-table-view-cell mui-media mui-col-xs-6" style="text-align:center;width:100%"><img src="/new_lgx/Public/weixin/new_write/images/arclist/78.gif" style="width:25px;height:25px;"> 没有此报名信息</li>
				<?php } ?>
				</ul>
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

					<li class="mui-table-view-cell yi" style="height: 75px;">

					 <form action="<?php echo U('new_toupiao2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>" method="get">    
						<input style="width: 70%; float: left; height: 30px;margin-top: 17px;" type="text" class="mui-input-clear contact" placeholder="请输入选手姓名或编号" name="title" value="<?php echo ($_GET['title']); ?>">
						<button type="submit" class="mui-btn mui-btn-primary mui-icon mui-icon-search" style="width: 72px;background-color: #fd4699; border:1px solid #fd4699;color: #FFFFFF;margin-top:15px; "> 
		            搜索
		        </button>

		        </form>
					</li>

				</ul>
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
                      	 	 	 var piao=zhichi.prev().prev().find(".piao").html()
                      	 	 	 zhichi.prev().prev().find(".piao").html(parseInt(piao)+1)
                      	 	 	zhichi.hide()
                      	 	 	zhichi.prev().show()

                      	 	 }
                      	 }
                      })
       	 })
 })
   </script>
	</body>

</html>