<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>报名-<?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_9k93m83lq8ttvs4i.css">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/toupiao1.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/feedback.css" rel="stylesheet">
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
				box-shadow: none;
			}
			
			.mui-card {
				width: 90%;
				margin: 0px auto;
				border-radius: 4px;
			}
			
			.layui-field-title {
				margin: 10px 0 20px;
				border: none;
				border-top: 1px solid #e2e2e2;
				font-size: 16px;
			}
			
			.layui-elem-field {
				margin-bottom: 10px;
				padding: 0;
				border-top: 1px solid #e2e2e2;
			}
			
			#feedback .mui-popover {
				position: fixed;
			}
			
			#feedback .mui-table-view:last-child {
				margin-bottom: 0px;
			}
			
			#feedback .mui-table-view:first-child {
				margin-top: 0px;
			}
			
			.feedback .mui-inline {
				padding: 5px 15px;
				color: #000000;
			}
			
			.feedback p {
				padding: 0;
				width: 50px;
			}
			
			.tijiao {
				background-color: #ffb6c1;
				border: #ffb6c1;
				border-radius: 5px;
				color: #FFFFFF;
				text-align: center;
				margin: 0px auto;
				display: block;
				height: 38px;
				margin-top: 1rem;
			}
			input, select, textarea {
   
    font-size: 14px;
  
}
.mui-bar-tab a {
    display: table-cell;
    overflow: hidden;
    width: 1%;
    height: 50px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #929292;
    border-radius: 4px;
    border-left: 1px solid #ffffff;
    border-right: 1px solid #ffffff;
    background-color: #F7B824;
}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back  mui-icon mui-icon-left-nav mui-pull-left"  style="color: #FFFFFF;font-size:24px;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">报名</h1>
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

			<p class="huodong" style="padding-left:18px;">活动于<span class="time"><?php echo (date('Y',$activity["end_time"])); ?></span>年<span class="time"><?php echo (date('m',$activity["end_time"])); ?></span>月<span class="time"><?php echo (date('d',$activity["end_time"])); ?></span>日<span class="time"><?php echo (date('H',$activity["end_time"])); ?></span>时<span class="time"><?php echo (date('i',$activity["end_time"])); ?></span>分结束</p>
			
		</div>

		<div class="mui-card">
			<div class="mui-card-content">
				<fieldset class="layui-elem-field layui-field-title" style="/* margin-top: 20px; */text-align: center;">
					<legend>选手报名</legend>
				</fieldset>
			 <form id="form" action="<?php echo U('baoming_save');?>"  method="post" enctype="multipart/form-data">	
				<div class="mui-card-content-inner">
					<div id="feedback" class="mui-page feedback">

						<div class="mui-page-content">
							<div class="content">
							<input type="hidden" name="nid" value="<?php echo ($_GET['nid']); ?>">
								<p style="margin-top: 10px;">姓名<i>*</i></p>
								<input type="text" name="name" class="mui-input-clear contact" placeholder="请填写姓名" />
								<p>描述<i>*</i></p>
								<div class="row mui-input-row">
									<textarea id="question" name="content" class="mui-input-clear question" placeholder="请填写参赛宣言"></textarea>
								</div>
								<p>手机<i>*</i></p>
								<input type="text" class="mui-input-clear contact" name="tel" placeholder="请填写手机" />
							
								<p style="margin-top: 10px;">图片<i>*</i></p>
								<div id="image-list" class="row image-list">
									   <div id="image" style="margin-left:5px;margin-top:3px;width:19%;padding:5%;border:1px solid #ccc;border-radius:8px;display:inline-block">
						 <i class="icon iconfont icon-jiahao" style="font-size:25px;color:gray"></i>
						 </div>
								</div>

								<button type="submit" class="mui-btn mui-btn-primary tijiao">
					提交报名
		        </button>
							</div>
							</form>
							<div style="height: 30px;"></div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div style="height: 60px;"></div>

<form id='myupload' action="<?php echo U('activity_ajax_upload');?>" method='post' enctype='multipart/form-data'>
			    <input type="file" id="uploadphoto" multiple="multiple" name="uploadfile[]" value="请点击上传图片"  style="display:none;" />
			 </form>

		<nav class="mui-bar mui-bar-tab">
			<a href="<?php echo U('new_toupiao1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon-extra mui-icon-extra-peoples">全部参赛</span>

			</a>
			<a href="<?php echo U('new_paiming1',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
				<span class="mui-icon-extra mui-icon-extra-class">当前排名</span>

			</a>
			<a  href="<?php echo U('new_huodong1',array('id'=>$_SESSION['uid'],'nid'=>$_GET['nid']));?>" style="background-color: #ffb6c1;">
				<span class="mui-icon mui-icon-gear">活动规则</span>

			</a>
		</nav>
			<?php if(time()>$activity['start_time'] and time()<$activity['end_time']){ ?>
            <input type="hidden" id="time" value="1">
			<?php }else{ ?>
            <input type="hidden" id="time" value="2">
			<?php } ?>
			 <script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
			 	<script type='text/javascript' src='/new_lgx/Public/common/js/jquery.form.js'></script>
		<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
		 <script type="text/javascript">
mui('body').on('tap','a',function(){document.location.href=this.href;});

              $(".icon-jiahao").click(function(){
           			$("#uploadphoto").click()
         		})
             $("#form").submit(function(){
             	 var name=$("input[name='name']").val()
             	 var idcard=$("input[name='idcard']").val()
             	 var tel=$("input[name='tel']").val()
             	 var wx=$("input[name='wx']").val()
             	 var content=$("textarea[name='content']").val()
             	 var pic=$("input[name='pic[]']").size()
             	  var ti=$("#time").val()
             	 /*alert(pic)
             	 return false*/
             	  if(ti==2){
             	 	alert('活动已结束')
             	 	return false
             	 }else if(name==''){
             	 	alert('姓名不能为空')
             	 	return false
             	 }else if(idcard==''){
             	 	alert('身份证号不能为空')
             	 	return false
             	 }else if(tel==''){
             	 	alert('联系方式不能为空')
             	 	return false
             	 }else if(wx==''){
             	 	alert('微信号不能为空')
             	 	return false
             	 }else if(content==''){
             	 	alert('报名宣言不能为空')
             	 	return false
             	 }else if(pic<1){
             	 	alert('请上传图片')
             	 	return false
             	 }else{
             	 	alert('报名已提交，请等待审核')
             	 	return true
             	 }
             })
            </script>
 <script type="text/javascript">
$(document).ready(function(e) {
   //
   
   $("#uploadphoto").change(function(){
    var img=$(".uploadimg").size()

    $("#myupload").append("<input type='hidden' name='num' value='"+img+"'>");
    //alert(1)
     $("#myupload").ajaxSubmit({ 
        dataType:  'json', 
        success: function(data) {
      
         if(data=='2'){
         alert('最多可上传3张图片')
           
         }else{
         if(img==2){
         	$("#image").hide()
         }
                         var myobj=eval(data);

                for(var i=0;i<myobj.length;i++){
                    
                    var src ='/Uploads/'+myobj[i].savepath+myobj[i].savename;
                    var src1='/Uploads/'+myobj[i].showimg
                  var attstr= '<img src="/new_lgx'+src1+'" style="width:31%;height:100%;margin-left:5px;float:left" class="uploadimg" >';
                   // $("#image").next().css('margin-top',"10px")  
                                $("#image").before(attstr);
                                   $("#image").before("<input type='text' name='pic[]' value='"+src+"' style='display:none'/>");
                                   $("#image").before("<input type='text' name='showpic[]' value='"+src1+"' style='display:none'/>");

                }
           
         }


        }, 
        error:function(xhr){ //上传失败 
           alert("上传失败"); 
          
        } 
    }); 
   });
 

});
</script>
	</body>

</html>