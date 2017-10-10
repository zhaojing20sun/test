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
			.mui-content-padded div{
			text-align: center;
			}
			.current{
				color: white;
				    padding: 6px 12px;
				    border-color: #ffb6c1;
    background-color: #ffb6c1;
			}
			.num{
				color: #000;
				padding: 6px 12px;
				    border: 1px solid #ddd;
    background-color: #fff;
			}
			.next{
				color: #fff;
			}
			.prev{
				color: #fff;
			}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav" style="z-index:150">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #FFFFFF;font-size:24px;"></a>
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

           <form action="<?php echo U('new_toupiao1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>" method="get">    
 			<div class="baoming" style="width:90%;padding-left:20px;position:relative;z-index:99">
				<input style="width: 70%; float: left; font-size: 14px;" type="text" name="title" class="mui-input-clear contact" placeholder="请输入选手编号或名称">
				<button type="submit" class="mui-btn mui-btn-primary mui-icon mui-icon-search">
					搜索
		        </button>
			</div>
			</form>

		</div>
		<div class="zong">
			<ul class="mui-table-view mui-grid-view">
			<?php if($man){ ?>
			<?php if(is_array($man)): foreach($man as $key=>$v): ?><li class="mui-table-view-cell mui-media mui-col-xs-6">
					<a href="<?php echo U('new_activity_detial1',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>">
						<img class="mui-media-object" src="<?php $re=M('weixin_activity_pic')->where(array('aid'=>$v['id']))->select(); echo '/new_lgx'.$re[0]['showpic'] ?>" style="height:96px;" onerror="this.src='/new_lgx/Public/common/images/nopic.gif'">
						<div class="mui-media-body">
							<span class="user-number"><?php echo ($v["id"]); ?>号</span>
							<p style="color:#FFFFFF;"><?php echo ($v["name"]); ?></p>
							</a>
								<?php $re1=M('weixin_activity_message')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['id']))->find(); ?>
								<button type="button" class="mui-btn mui-btn-primary mui-icon mui-icon-star zhichi" <?php if(!$re1) echo 'style="display:none"' ?>>  
									已投票
								</button>
							<button type="button" class="mui-btn mui-btn-primary mui-icon mui-icon-star zhichi"  <?php if($re1) echo 'style="display:none"' ?>>  
									投票
								</button>
								
								<input type="hidden" value="<?php echo ($v["id"]); ?>">
							<p class="piaoshu"><span class="piao"><?php echo M('weixin_activity_message')->where(array('aid'=>$v['id']))->count() ?></span> 票</p>
						</div>
					
				</li><?php endforeach; endif; ?>
        <?php }else{ ?>
                 <li class="mui-table-view-cell mui-media mui-col-xs-6" style="text-align:center;width:100%"><img src="/new_lgx/Public/weixin/new_write/images/arclist/78.gif" style="width:25px;height:25px;"> 没有此报名信息</li>
				<?php } ?>
			</ul>
			<div class="mui-content-padded">
			<?php echo ($page); ?>
			
			</div>
		</div>
		<div class="zong">
			<div class="mui-card" style="border-radius: 4px;">
				<div class="mui-card-content">
					<span>活动规则</span>
					<div class="mui-card-content-inner">
						活动开始时间：<?php echo (date('Y-m-d H:i:s',$activity["start_time"])); ?> <br>
						活动截止时间：<?php echo (date('Y-m-d H:i:s',$activity["end_time"])); ?> <br>
						<?php echo (htmlspecialchars_decode($activity["content"])); ?>
					</div>
				</div>
			</div>
		</div>
		<div style="height: 50px;"></div>

		<nav class="mui-bar mui-bar-tab">
			<a class="mui-tab-item" href="#" style="background-color: #ffb6c1;">
				<span class="mui-icon-extra mui-icon-extra-peoples">全部参赛</span>

			</a>
			<a class="mui-tab-item" href="<?php echo U('new_paiming1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon-extra mui-icon-extra-class">当前排名</span>

			</a>
			<a class="mui-tab-item" href="<?php echo U('new_huodong1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon mui-icon-gear">活动规则</span>
 
			</a>
		</nav>
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