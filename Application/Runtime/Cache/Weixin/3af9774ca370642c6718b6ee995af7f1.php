<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>活动-<?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_9k93m83lq8ttvs4i.css">
		<!--标准mui.css-->
		 <link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<!--页面单独样式-->
		<link href="/new_lgx/Public/weixin/new_huodong/css/feedback.css" rel="stylesheet">
		<style>
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
			
			.mui-page-content p {
				margin-top: -8px;
				color: #000000;
			}
			
			.mui-page-content>input {
				margin-top: -8px;
				border-radius: 5px;
			}
			.content{
				width: 90%;
				margin: auto;
			}
			select {
				margin-top: -8px;
				color: #8f8f94;
			}
			
			label {
				color: #8f8f94;
			}
			
			.zhuyi {
				color: #8f8f94;
				font-size: 0.6em;
				padding: 10px;
			}
			
			.mui-btn-block {
				width: 80%;
				height: 30px;
				border-radius: 6px;
				margin: 0px auto;
				margin-top: 20px;
				border: none;
				background-color: #ec7063
			}
			
			
			.mui-bar{
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			h4{
				padding: 10px;
			}
			.mui-content p{
				color: #000000;
				padding: 5px;
			}
			i{
				color: #E00808;
			}
			h4 span{
				color: #E00808;
				font-size: 12px;
				margin-left: 5px;
			}
			
		</style>
	</head>

	<body>
		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo U('new_huodong');?>" style="color: #FFFFFF;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">活动报名</h1>
		</header>
		<div class="mui-content">
			<h4>
				<?php echo ($activity["title"]); ?>
			</h4>
			
			<p>报名截止时间：<?php echo (date('Y-m-d H:i:s',$activity["end_time"])); ?></p>
			<p><?php echo (htmlspecialchars_decode($activity["content"])); ?></p>
			<p style="padding:0;padding-right:5%;;text-align:right">已报名：<?php echo ($num); ?>人</p>
			<div id="feedback" class="mui-page feedback">
 <form id="form" action="<?php echo U('baoming_save');?>"  method="post" enctype="multipart/form-data">
				<div class="mui-page-content">
					<h4>请填写您的报名信息<span>注:*为必填</span></h4>
					
					<hr>
					<input type="hidden" name="nid" value="<?php echo ($_GET['nid']); ?>">
					<div  class="content">
					<p style="margin-top: 10px;">姓名<i>*</i></p>
					<input type="text" name="name"  class="mui-input-clear contact" placeholder="请填写姓名"/>
					<!-- <p>身份证<i>*</i></p>
					<input type="text" class="mui-input-clear contact" name="idcard" placeholder="请填写身份证号"  /> -->
					<p>手机号<i>*</i></p>
					<input type="text" class="mui-input-clear contact" name="tel" placeholder="请填写手机号"/>
					<!-- <p>微信号<i>*</i></p>
					<input type="text" class="mui-input-clear contact" name="wx" placeholder="请填写微信号"  />
					
					<p>照片<i>*</i>(最多上传3张)</p>
					<div  class="row image-list">
					<img src="/new_lgx/Public/common/images/nopic.gif" style="height:100%;float:left;margin-right:5px;">
					      <div id="image" style="margin-left:5px;margin-top:3px;width:19%;padding:5%;border:1px solid #ccc;border-radius:8px;display:inline-block">
						 <i class="icon iconfont icon-jiahao" style="font-size:25px;color:gray"></i>
						 </div>
					</div>
					<p  style="margin-top: 10px;">报名宣言<i>*</i></p>
					<div class="row mui-input-row">
						<textarea id="question" class="mui-input-clear question" name="content" placeholder="请填写报名宣言"></textarea>
					</div>
					<p style="margin-top: 10px;">证券公司<i>*</i></p>
					<input type="text" class="mui-input-clear contact" placeholder="请填写证券公司"  />
					<p>证券营业部</p>
					<input type="text" class="mui-input-clear contact" placeholder="请填写证券营业部"  />
					<p style="margin-top: 10px;">推荐人</p>
					<input type="text" class="mui-input-clear contact" name="recommend" placeholder="请填写推荐人"  />
					<p>推荐人手机</p>
					<input type="text" class="mui-input-clear contact" name="recommend_tel" placeholder="请填写推荐人手机"  /> -->
					<button type="submit" class="mui-btn mui-btn-primary mui-btn-block"><p style="margin-top: -13px;color: #FFFFFF;">提交</p></button>
					</div>
					<div style="height: 30px;"></div>
				</div>
</form>
			</div>
			<?php if(time()<$activity['start_time']){ ?>
            <input type="hidden" id="time" value="1">
			<?php }elseif(time()>$activity['end_time']){ ?>
            <input type="hidden" id="time" value="2">
			<?php } ?>
			 <form id='myupload' action="<?php echo U('activity_ajax_upload');?>" method='post' enctype='multipart/form-data'>
			    <input type="file" id="uploadphoto" multiple="multiple" name="uploadfile[]" value="请点击上传图片"  style="display:none;" />
			 </form>
			 <script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
			<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
			<script src="../js/mui.view.js"></script>
			<script src="/new_lgx/Public/weixin/new_huodong/js/feedback.js"></script>
			<script type='text/javascript' src='/new_lgx/Public/common/js/jquery.form.js'></script>
            <script type="text/javascript">
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
             	  if(ti==1){
             	 	alert('活动未开始')
             	 	return false
             	 }else if(ti==2){
             	 	alert('活动已结束')
             	 	return false
             	 }else if(name==''){
             	 	alert('姓名不能为空')
             	 	return false
             	 }else if(tel==''){
             	 	alert('联系方式不能为空')
             	 	return false
             	 }else{
             	 	alert('报名已提交')
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