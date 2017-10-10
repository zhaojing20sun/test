<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title><?php echo ($activity["title"]); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/new_lgx/Public/common/css/swiper.min.css">
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
			
			.top{ width: 95%;
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
			background: url(/new_lgx/Public/weixin/education/images/alphabg.png);
		}
		.margin-8{
			margin-left: 28%
		}
		</style>
	</head>

	<body>
 <div style='text-align:center;width:100%;height:100%;line-height:100%;position:fixed;background-color:#000;top:0;vertical-align: baseline;z-index:1100;display:none' id="showpic"><img  src="" id="imgshow" /></div>
		<!--头部-->
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #FFFFFF;"></a>
			<h1 class="mui-title" style="color: #FFFFFF;">投票</h1>
		</header>

		<div class="mui-content">
			<!--静态图片-->
			<img src="/new_lgx/<?php echo ($activity["logo"]); ?>" style="width: 100%;max-height:200px;">
			
			
			<div style="height: 15px;"></div>
			<div class="top">
				<div style="width: 95%; margin: 0px auto;">
				<p style="font-size:15px;padding-left:4%"><?php echo ($man["id"]); ?>号 <span class='margin-8'><?php echo ($man["name"]); ?></span><span class='margin-8 piao' ><?php echo ($piao); ?></span>票</p>
  				<div class="swiper-container">
				        <div class="swiper-wrapper">
				           <?php foreach ($image as $key => $value) { ?>
				            <div class="swiper-slide" style="height:90%;text-align:center;">
				            <img src="/new_lgx<?php echo $value['showpic'] ?>" title="/new_lgx<?php echo ($value["pic"]); ?>" style="max-height:150px;" class="showpic">
				            <img  src="/new_lgx<?php echo ($value["pic"]); ?>" style='display:none' class="showpic1" />
				            </div>

				           <?php } ?>
				          
				          
				        </div>
				        <!-- Add Pagination -->
				        <?php $count2=count($image); if($count2>1){ ?>
				        <div class="swiper-pagination" style=""></div>
				        <?php }?>
				    </div>
                <p>介绍：<br><?php echo ($man["content"]); ?></p>
				       
				
   				<p style="text-align:center"><button style="margin-top:5px;width:100%;color:white;
   				<?php  $re=M('weixin_activity')->where(array('id'=>$man['aid']))->find(); if(time()>$re['start_time'] && time()<$re['end_time'] ){ $re=1; echo "background:#FFA07A"; }else{ $re=2; echo "background:#ccc"; } ?>
   				" title="<?php echo $re ?>" <?php if(!$zhichi) echo 'id="zhichi"' ?>><?php if($zhichi){ echo '已支持'; }else{ echo '支持一下'; } ?></button>
   				<button style="margin-top:5px;width:100%;color:white;background:#FFA07A;display:none" >已支持</button>
   				</p>
   				<p style="text-align:center">
                <?php if($_GET['type']==3){ ?>
				<a href="<?php echo U('new_baoming2',array('id'=>$_SESSION['uid'],'nid'=>$man['aid']));?>">
                <?php }else{ ?>
   				<a href="<?php echo U('new_baoming',array('id'=>$_SESSION['uid'],'nid'=>$man['aid']));?>">
   				 <?php } ?>

   				<button style="margin-top:5px;width:100%;background:#FFA07A;color:white">我也要参加</button>
   				</a>
   				</p>
   				<p style="text-align:center">
   				 <?php if($_GET['type']==3){ ?>
				<a href="<?php echo U('new_huodong2',array('id'=>$_SESSION['uid'],'nid'=>$man['aid']));?>">
                <?php }else{ ?>
   				<a href="<?php echo U('new_toupiao',array('id'=>$_SESSION['uid'],'nid'=>$man['aid']));?>">
   				<?php } ?>

   				<button style="margin-top:5px;width:100%;background:#FFA07A;color:white">返回首页</button>
                </a>
   				</p>
                <div style="height:20px;"></div>
					</div>
				</div>
			
			</div>
		<input type="hidden" id="wid" value="<?php echo $_SESSION['wid'] ?>">
		<input type="hidden" id="id" value="<?php echo $_GET['nid'] ?>">
	 <script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
			<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
			<script type="text/javascript">
       $(function(){
       	 $(".baoming").click(function(){
       	 	var href="<?php echo U('new_baoming',array('id'=>$_SESSION['uid'],'nid'=>$_GET['nid']));?>"
       	 	location.href=href
       	 })
       	 var piao=$(".piao").html()
       	// alert(parseInt(piao)+1)
            $("#zhichi").click(function(){
            	  var title=$(this).attr('title')
            	  var wid=$("#wid").val()
            	  var id=$("#id").val()
            	  if(title==1){
                      $.ajax({
                      	 url:"<?php echo U('activity_toupiao');?>",
                      	 type:'post',
                      	 data:"wid="+wid+"&id="+id,
                      	 success:function(msg){
                      	 	 if(msg==1){
                      	 	 	 alert('感谢您的支持！')
                      	 	 	 $("#zhichi").next().show()
                      	 	 	 $("#zhichi").hide()
                                
                                 $(".piao").html(parseInt(piao)+1)
                      	 	 }
                      	 }
                      })
            	  }else{
            	  	alert('投票时间已结束')
            	  }
            })
       })
        	 
			</script>
          <script src="/new_lgx/Public/common/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
    });
    </script>
        <script type="text/javascript">
      var timeoutevent=0;
    $(function(){
      $(".showpic").click(function(){
       //$("#showpic").show()
       var pic=$(this).next()
       $("#imgshow").attr('src',pic.attr('src'))

       $("#showpic").show()
      $("#imgshow").css({'max-width':$("#showpic").width()})
         var he=$("#showpic").height()-$("#imgshow").height()
         he=he/2
        $("#imgshow").css({'margin-top':he})
      })
       $("#showpic").on({
                   touchstart:function(e){
                      timeoutevent=setTimeout('change()',600);
                       e.preventDefault();
                   },
                   touchmove:function(){
                       clearTimeout(timeoutevent)
                       timeoutevent=0
                   },
                   touchend:function(){
                    
                    clearTimeout(timeoutevent)
                  
                       if(timeoutevent!=1){
                     $(this).hide()
                       }
                       return false
                   } 
            })
    })
  function change(){
        timeoutevent=1
      }
     
     </script>
	</body>

</html>