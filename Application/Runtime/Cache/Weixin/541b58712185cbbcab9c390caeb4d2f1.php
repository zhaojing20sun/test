<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>视频</title>

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
</style>

    <!-- 头部 -->
   

    <!--滑动导航条-->
      <div class="swiper-container" style="position:fixed;z-index:99">
        <div class="swiper-wrapper" <?php  $count=count($column); if($_GET['num']<3 or $_GET['num']==''){ echo "style='transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);'"; }elseif($_GET['num']+5>$count){ $num=($_GET['num']-3)*82.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; }else{ $num=($_GET['num']+1)*82.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; } ?>>
            <div class="swiper-slide <?php if($_GET['vid']=='') echo 'active_li'?>"><a href="<?php echo U('new_video_list');?>">推荐</a></div>
              <?php if(is_array($column)): foreach($column as $k=>$v): ?><div   class="swiper-slide <?php if($_GET['vid']==$v['id']) echo 'active_li'?>"><a href="<?php echo U('new_video_list',array('vid'=>$v['id'],'num'=>$k));?>"><?php echo ($v["title"]); ?></a></div><?php endforeach; endif; ?>
           
           
        </div>
    </div>
 <div style="height:42px"></div>
<?php if($video){ ?>
 <?php if(is_array($video)): foreach($video as $k=>$v): if($v['url']==''){ ?>
<a href="<?php echo U('new_video_end',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
 <div style="width:100%;height:260px">
   <div style="width:100%;height:200px">
   
   <div style="width:100%;height:200px;background:#000;">
    <!--   -->
     <img src="/new_lgx/<?php echo ($v["logo"]); ?>" style="width:300px;height:200px;position:relative;padding-left:16%">
     <span style="z-index:99;color:white;font-size:13px;position:relative;top:-200px;padding:2px;" class="my-video-<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></span>

   </div>
    <i class="icon iconfont icon-Play_big_x"  style="font-size:55px;color:#ccc;position:relative;top:-130px;left:40%;width:50px;height:50px;"></i>
   <!--  <video id="my-video-<?php echo ($v["id"]); ?>" title="<?php echo ($v["id"]); ?>" src="/new_lgx/<?php echo ($v["video"]); ?>" class="video-js  vjs-big-play-centered" controls preload="none" style="width:100%" height="200"
     poster="/new_lgx/<?php echo ($v["logo"]); ?>" >
     <source src="/new_lgx/<?php echo ($v["video"]); ?>" type="video/mp4">
     <source src="/new_lgx/<?php echo ($v["video"]); ?>" type="video/webm">
     <source src="/new_lgx/<?php echo ($v["video"]); ?>" type="video/ogg">
      
     </video> -->
   

   </div>
<div  style="width:100%;height:50px">
  <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
  <span style="text-align:center"><?php echo ($view1); ?>次播放</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  <span style="float:left">|</span>
    <i class="icon iconfont icon-dianzan" id="zan1" style="font-size:18px;float:left;margin-left:26%;"></i>
 <!--  <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="float:left;margin-top:11%;margin-left:26%;" /> -->
  <span  style="float:left;margin-right:15%">点赞</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  <span style="float:left">|</span>
  <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
  <span style="float:left;margin-right:15%">评论</span>
  </div>

</div>
 </div>
</a>
   <?php }else{ ?>

<a href="<?php echo U('new_video_end',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
 <div style="width:100%;height:290px;position:relative;" class="iframe_vide">
<span style="opacity:1;color:white;position:absolute;top:2px;left:2px;
    font-size: 13px;"><?php echo ($v["title"]); ?></span>
<div style="width:100%;height:230px;background:#000;top:0px;position:absolute;opacity:0.1">
  
</div>
  <iframe style="width:100%;height:230px;" src="<?php echo ($v["url"]); ?>" frameborder=0 'allowfullscreen' class="tx"> </iframe>

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
 </a>
   <?php } endforeach; endif; ?>
<?php }else{ ?>

 <div style="text-align:center;margin-top:5%">暂无视频资源</div>
<?php } ?>
    <!--底部导航-->
 <!--    <nav class="navbar navbar-default navbar-fixed-bottom">
   <div class="container">
     <div class="row">
       <div class="col-xs-3 col-md-3">
         <div class="thumbnail custom-thumbnail">
           <i class="iconfont icon-shouye-copy-copy"></i>
           <p>首页</p>
         </div>
       </div>
       <div class="col-xs-3 col-md-3">
         <div class="thumbnail custom-thumbnail">
           <i class="iconfont icon-faxian"></i>
           <p>商品</p>
         </div>
       </div>
       <div class="col-xs-3 col-md-3">
         <div class="thumbnail custom-thumbnail">
           <i class="iconfont icon-dongtai"></i>
           <p>购物车</p>
         </div>
       </div>
       <div class="col-xs-3 col-md-3">
         <div class="thumbnail custom-thumbnail">
           <i class="iconfont icon-wode"></i>
           <p>我的</p>
         </div>
       </div>
     </div>
   </div>
 </nav> -->
   <script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script>  

        <script type="text/javascript">
        $(function(){
         var num=$(".video-js").size()
         for (var i = 0; i<=num-1; i++) {
          var play='my-video-'+$(".video-js:eq('"+i+"')").attr('title')
          //alert(play)
          var play=videojs("my-video-"+$(".video-js:eq('"+i+"')").attr('title'))

         play.on('play',function(){
           var aclass= $(this).attr('id')
           var title=$(this).attr('title')
         $(this).attr('style','width:100%')
           $("."+aclass).hide()
          
               for (var a = 0; a<=num-1; a++) {
                 if($(".video-js:eq('"+a+"')").attr('title')!=title){
                    play= videojs("my-video-"+$(".video-js:eq('"+a+"')").attr('title'))
                    play.currentTime(0);
                    play.pause()
                  

                 }
               };
          })
          play.on('pause',function(){
           var aclass= $(this).attr('id')
           $("."+aclass).show()
          })
          
         };

$("#mod_player").click(function(){
  alert(1)
})
        })
  
    </script>

  <script type="text/javascript" src="/new_lgx/Public/weixin/product/js/jquery.min.js"></script>
<script src="/new_lgx/Public/weixin/product/js/swiper-3.4.2.min.js"></script>
<script>
$(function(){
    var mySwiper = new Swiper('.swiper-container',{
    slidesPerView:5,
    spaceBetween:0
  })

})

</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/index/js/bootstrap.min.js"></script>

  </body>
</html>