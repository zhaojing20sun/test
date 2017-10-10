<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo ($video["title"]); ?></title>

    <!-- Bootstrap -->
   <link href="/new_lgx/Public/weixin/list/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/video/css/video-js.css" rel="stylesheet" type="text/css">
<script src="/new_lgx/Public/weixin/js/video/video.js"></script>
   <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
        <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/list/css/index.css" >
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/list/css/swiper-3.4.2.min.css">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
      <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_7saowfjn18oxbt9.css">
<script src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="padding-top:0;padding-bottom:0">
<style type="text/css">
  
  a{
    color:#000;
  }
  a:hover,
a:focus {
  color: #000;
  text-decoration: none;
}
.swiper-slide{
  font-size: 14px;
}
.active_li {
    border-bottom: 1px solid red;
   
}
.active_li a{
   color:red;
}
.spacing {
    height: 16px;
    background: #e5e5e5;
    margin-bottom: 10px;
}
</style>

    <!-- 头部 -->
   

 
<?php if($video['url']==''){ ?>

 <div style="width:100%;height:260px">
   <div style="width:100%;height:200px">
   <video id="my-video" title="<?php echo ($v["id"]); ?>" src="/new_lgx/<?php echo ($video["video"]); ?>" class="video-js  vjs-big-play-centered" controls preload="none" style="width:100%" height="200"
     poster="/new_lgx/<?php echo ($video["logo"]); ?>" >
     <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/mp4">
     <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/webm">
     <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/ogg">
      
     </video> 

   </div>
    <div style="width:100%;padding:5px">
     <span style="z-index:99;color:#000;font-size:16px;" class="my-video-<?php echo ($v["id"]); ?>"><?php echo ($video["title"]); ?></span>
  
  </div> 
   
    
   

<div  style="width:100%;height:50px">
  <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
  <span style="text-align:center">24次播放</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
 
    <i class="icon iconfont icon-dianzan" id="zan1" style="font-size:18px;float:left;margin-left:26%;"></i>
 <!--  <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="float:left;margin-top:11%;margin-left:26%;" /> -->
  <span  style="float:left;margin-right:15%">点赞</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  
  <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
  <span style="float:left;margin-right:15%">评论</span>
  </div>

</div>
 </div>

<div class="col-xs-12 spacing">
          
        </div>
   <?php }else{ ?>


 <div style="width:100%;height:290px">
   <iframe style="width:100%;height:230px;" src="<?php echo ($v["url"]); ?>" frameborder=0 'allowfullscreen' class="tx"></iframe>
<div  style="width:100%;height:50px">
  <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
  <span style="text-align:center">24次播放</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  <span style="float:left">|</span>
  <i class="icon iconfont icon-dianzan" id="zan1" style="font-size:18px;float:left;margin-left:26%;"></i>
 <!--  <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="" /> -->
  <span  style="float:left;margin-right:15%">点赞</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  <span style="float:left">|</span>
  <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
  <span style="float:left;margin-right:15%">评论</span>
  </div>

</div>
 </div>
   <?php } ?>

<div style="width:100%;margin:10px 0;">
   <span>精彩推荐</span>
</div>



   <script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script>  

        <script type="text/javascript">
        $(function(){
        
          var play='my-video'
          //alert(play)
          var play=videojs("my-video")

         play.on('play',function(){
         
        
          })
          play.on('pause',function(){
          
          })
          
        
         

        })
  
    </script>

  <script type="text/javascript" src="/new_lgx/Public/weixin/product/js/jquery.min.js"></script>
<script src="/new_lgx/Public/weixin/product/js/swiper-3.4.2.min.js"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/index/js/bootstrap.min.js"></script>
  
  </body>
</html>