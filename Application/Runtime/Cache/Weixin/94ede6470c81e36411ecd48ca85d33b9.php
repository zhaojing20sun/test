<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>活动</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!--标准mui.css-->
		 <link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<!--App自定义的css-->
		<link rel="stylesheet" type="text/css" href="../css/app.css" />
		<style>
			.mui-card{
				margin: 0;
			}
			.mui-badge{
				border-radius: 5px;
			}
			.mui-card-header.mui-card-media .mui-media-body{
				    margin-left: 43px;
				    margin-top: -17px;
			}
			.mui-card-header.mui-card-media .mui-media-body p{
				color: #000000;
			}
			.mui-card-link{
				color: #8f8f94;
				font-size: 12px;
			}
			.mui-btn{
				font-size: 12px;
				padding: 3px 5px;
			}
			.mui-bar{
				z-index: 100;
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
		
			.mui-card-footer{

				padding: 10px 15px;
			}
			.mui-card-footer a{
				font-size: 13px;
			}
			.baio{
			
				position: absolute;
				width: 50px;
				height: 50px;
				top: -1px;
				right: -1px;
				z-index: 99;
			}
			.mui-card-content{
				margin:0px 10px;
			}
			.spacing {
    height: 16px;
    background: #e5e5e5;
   
}
a:link { 
 color: #333;
text-decoration: none; 
} 
a:visited { 
 color: #333;
text-decoration: none; 
} 
a:hover { 
  color: #333;
text-decoration: none; 
} 
		</style>
	</head>

	<body style="background:#efeff4">
		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('new_index');?>" style="color: #FFFFFF;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">活动</h1>
		</header>
		<div class="mui-content">
		<!--活动模块-->
		<?php if($activity){ ?>
		<?php if(is_array($activity)): foreach($activity as $k=>$v): ?><div class="col-xs-12 spacing">
          
        </div>
        <?php if($v['type']==0){ ?>
        <a href="<?php echo U('new_huodong_detial',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
        <?php }elseif($v['type']==1){ ?>
       
<a href="<?php echo U('new_baoming',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
       
        
          <?php }elseif($v['type']==2){ ?>
          <?php if($v['moban']==1){ ?>
<a href="<?php echo U('new_toupiao',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
            <?php }elseif($v['moban']==2){ ?>

<a href="<?php echo U('new_huodong1',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
             <?php }elseif($v['moban']==3) { ?>
        <a href="<?php echo U('new_huodong2',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">  	
           <?php } ?>
 			


          <?php } ?>
			<div class="mui-card">
				<div class="mui-card-header mui-card-media">
					
					<?php if($v['type']==1){ ?><span class="mui-badge mui-badge-danger" style="background-color:red">团购</span> <?php }elseif($v['type']==2){ ?>
 			<span class="mui-badge mui-badge-danger">投票</span>
          <?php }else{ ?>
<span class="mui-badge mui-badge-danger">宣传</span>
          <?php } ?>
          
					<div class="mui-media-body">
						<p style="width:94%"><?php echo ($v["title"]); ?></p>
					</div>

					<?php if(time()>$v['start_time'] && time()<$v['end_time'] ){?>

            <img class="baio" src="/new_lgx/Public/weixin/new_huodong/images/jinxing.png">
				<?php	 }else{ ?>
<img class="baio" src="/new_lgx/Public/weixin/new_huodong/images/jieshu.png">

					<?php	 } ?>
					
				</div>
				<div class="mui-card-content" >
					<img src="/new_lgx/<?php echo ($v["logo"]); ?>" style="height: 150px; width: 100%;">
				</div>
				
				<div class="mui-card-footer">
					活动时间：<?php echo (date('Y-m-d',$v["start_time"])); ?> - <?php echo (date('Y-m-d',$v["end_time"])); ?></a>
					
															 <?php if($v['type']==0){ ?>
											        <a href="<?php echo U('new_huodong_detial',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
											        <?php }elseif($v['type']==1){ ?>
											       
											<a href="<?php echo U('new_baoming',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
											       
											        
											          <?php }elseif($v['type']==2){ ?>
											          
											          <?php if($v['moban']==1){ ?>
											<a href="<?php echo U('new_toupiao',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
											            <?php }elseif($v['moban']==2){ ?>

											<a href="<?php echo U('new_huodong1',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
											             <?php }elseif($v['moban']==3) { ?>
											        <a href="<?php echo U('new_huodong2',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">  	
											           <?php } ?>
											 			


											          <?php } ?>	

              <?php if(time()>$v['start_time'] && time()<$v['end_time'] ){?>

         	<button type="button" class="mui-btn mui-btn-primary mui-btn-outlined">
				<?php	 }else{ ?>
				<button type="button" class="mui-btn mui-btn-primary mui-btn-outlined" style="border: 1px solid #B6B6B6; color:#B6B6B6 ;">

					<?php	 } ?>
				
					立即参加
				</button>
				</a>
				</div>
				
			</div>
</a><?php endforeach; endif; ?>
			<?php }else{ ?>
			<div style="width:100%;text-align:center;margin-top:10px"><img src="/new_lgx/Public/weixin/new_write/images/arclist/54.gif" style="width:25px;height:25px;"> 暂无活动</div>
		<?php } ?>
		</div>
		<script src="../js/mui.min.js"></script>
	</body>

</html>