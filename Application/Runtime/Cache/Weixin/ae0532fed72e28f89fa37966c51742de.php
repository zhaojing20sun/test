<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>报名-<?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_9k93m83lq8ttvs4i.css">
		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/icons-extra.css" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/toupiao2" rel="stylesheet">
		<link href="/new_lgx/Public/weixin/new_huodong/css/feedback.css" rel="stylesheet">
		<style>
			html,
			body {
				background-color: #efeff4;
			}
			
			.mui-bar {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
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
			
			.mui-popover.mui-popover-action.mui-popover-bottom {
				margin-bottom: -60px;
			}
			.naniu{
				width: 80%;
				margin: 0px auto;
				padding: 20px;
			}
			.tijiao{
				background-color: #fd4699;
				border:1px solid #fd4699;
				border-radius: 50px;
			}
		</style>
	</head>

	<body>

		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #FFFFFF;margin-top:0"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">报名</h1>
		</header>

		<div class="mui-content">
			<div class="mui-card-content">
				<div class="mui-card-content-inner">
					<div id="feedback" class="mui-page feedback">
 <form id="form" action="<?php echo U('baoming_save');?>"  method="post" enctype="multipart/form-data">	
						<div class="mui-page-content">
							<div class="content">
							<input type="hidden" name="nid" value="<?php echo ($_GET['nid']); ?>">
								<p style="margin-top: 10px;">姓名<i>*</i></p>
								<input type="text" name="name" class="mui-input-clear contact" placeholder="请填写姓名" />
								
								<p><i>*</i>联系电话</p>
								<input type="text" class="mui-input-clear contact" name="tel" placeholder="联系电话">
								<p><i>*</i>上传图片</p>
									<div id="image-list" class="row image-list">
									   <div id="image" style="margin-left:5px;margin-top:3px;width:19%;padding:5%;border:1px solid #ccc;border-radius:8px;display:inline-block">
						 <i class="icon iconfont icon-jiahao" style="font-size:25px;color:gray"></i>
						 </div>
								</div>
								<p style="margin-top: 10px;"><i>*</i>参赛宣言</p>
								<div class="row mui-input-row">
									<textarea id="question" class="mui-input-clear question" name="content" placeholder="请填写参赛宣言"></textarea>
								</div>
								<div class="naniu">
								<a href="<?php echo U('new_huodong2',array('id'=>$_GET['id'],'nid'=>$_GET['nid']));?>">
								<button type="button" class="mui-btn mui-btn-primary tijiao" style="float: left;">
					返回首页
		        </button></a>
		        		<button type="submit" class="mui-btn mui-btn-primary tijiao" style="float: right;">
					提交报名
		        </button>
		        </div></form>
							</div>
							<div style="height: 30px;"></div>
						</div>

					</div>
				</div>
			</div>

			<div style="height: 60px;"></div>
		<nav class="mui-bar mui-bar-tab" style="background: #eeeeee;">
				<a class="mui-tab-item" href="#">
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
<?php if(time()>$activity['start_time'] and time()<$activity['end_time']){ ?>
            <input type="hidden" id="time" value="1">
			<?php }else{ ?>
            <input type="hidden" id="time" value="2">
			<?php } ?>
<form id='myupload' action="<?php echo U('activity_ajax_upload');?>" method='post' enctype='multipart/form-data'>
			    <input type="file" id="uploadphoto" multiple="multiple" name="uploadfile[]" value="请点击上传图片"  style="display:none;" />
			 </form>
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
             	  var ti=$("#time").val()
             	 var content=$("textarea[name='content']").val()
             	 var pic=$("input[name='pic[]']").size()
             	 /*alert(pic)
             	 return false*/
             	  if(ti==2){
             	 	alert('活动已结束')
             	 	return false
             	 }else if(name==''){
             	 	alert('姓名不能为空')
             	 	return false
             	 }else if(tel==''){
             	 	alert('联系方式不能为空')
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