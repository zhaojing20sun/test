<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>发现</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!--标准mui.css-->
		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<!--App自定义的css-->
		<link rel="stylesheet" type="text/css" href="../css/app.css" />
		<style>
			body{
				background-color: #FFFFFF;
			}
			.flex-container {
				display: -webkit-box;
				display: -webkit-flex;
				display: flex;
				-webkit-flex-flow: row wrap;
				
				text-align: center;
			}
			
			.mui-content-padded {
				margin: 0px;
			}
			
			.mui-content-padded a {
				margin: 15px;
				margin-right: 25px;
				width: 50px;
				height: 50px;
				display: inline-block;
				text-align: center;
				background-color: #fff;
				/*border: 1px solid #ddd;*/
				border-radius: 25px;
				background-clip: padding-box;
				margin-top: 20px;
			}
			
			.mui-content-padded a .mui-icon {
				margin-top: 12px;
			}
			
			.mui-spinner,
			.mui-spinner-white {
				margin-top: 12px
			}
			
			.active .mui-spinner-indicator {
				background: #007AFF;
			}
			
			.mui-content a {
				color: #8F8F94;
			}
			
			.mui-content a.active {
				color: #007aff;
			}
			
			.mui-bar {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			
			a {

				color: #FFFFFF;
			}
		 a>p{font-size: 12px;}
			img {
				border: 0;
				width: 40px;
				height: 40px;
				border-radius: 50%;
			}
			.mui-content{
				background-color: #FFFFFF;
				/*#efeff4*/
			}
			.biaoti{
				background-color:#efeff4 ;
				height: 40px;
				width: 100%;
				margin-bottom: -10px;
				padding: 10px;
				border-bottom: 1px solid #E2E2E2;
			}
		</style>
	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('new_index');?>"></a>
			<h1 class="mui-title">发现</h1>
		</header>
		<div class="mui-content">
		<?php if(is_array($geng)): foreach($geng as $k=>$v): ?><div class="mui-content-padded">
				<p class="biaoti" <?php if($k!=0) echo "style='border-top:1px solid #E2E2E2'"; ?>><?php echo ($v["title"]); ?></p>
				<div class="flex-container">
				<?php $re=M('weixin_easy')->where(array('userid'=>$_SESSION['uid'],'pid'=>$v['id']))->select(); foreach($re as $key=>$value){ ?>
					<a href="<?php echo ($value["url"]); ?>" target="__blank"><img src="/new_lgx/<?php echo ($value["logo"]); ?>"><p><?php echo ($value["title"]); ?></p></a>
					<?php } ?>
				</div>
			</div>
			<div style="height: 20px;"></div><?php endforeach; endif; ?>	
		</div>
		
	</body>

</html>