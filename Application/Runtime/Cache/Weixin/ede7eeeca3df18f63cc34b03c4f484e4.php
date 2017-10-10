<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>新闻圈</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    
       <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
        <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/list/css/index.css" >
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/list/css/swiper-3.4.2.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 
<style type="text/css">
  
  a{
    color:#000;
  }
  a:hover,
a:focus {
  color: #000;
  text-decoration: none;
}

</style>
    <!-- 头部 -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 icon-container">
            <em>&lt;</em>
            <span class="back" onclick="history.go(-1)">返回</span>
                     
            <i style="margin-right:80px">新闻圈</i>
          </div>
        </div>
      </div>
    </nav>

    <!--滑动导航条-->
      <div class="swiper-container" style="position:fixed;">
        <div class="swiper-wrapper">
            <div class="swiper-slide <?php if($_GET['order']=='') echo 'active_li'?>"><a href="<?php echo U('news_list');?>">全  部</a></div>
             
            <div class="swiper-slide <?php if($_GET['order']=='addtime') echo 'active_li'?>"><a href="<?php echo U('news_list',array('order'=>'addtime'));?>">最  新</a></div>

             <div class="swiper-slide <?php if($_GET['order']=='view') echo 'active_li'?>"><a href="<?php echo U('news_list',array('order'=>'view'));?>">精  华</a></div>
           
        </div>
    </div>
  <div style="height:28px"></div>
<?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="media" style="padding-left:5px;">
      <div class="media-left">
        <a href="<?php echo U('news_detial',array('id'=>$v['id']));?>"><img class="media-object" src="/new_lgx/<?php echo ($v["pic"]); ?>" onerror="this.src='/new_lgx/Public/common/images/nopic.gif'" width="100" height="90" alt="测试用图"></a>
      </div>
      <div class="media-body">
      <a href="<?php echo U('news_detial',array('id'=>$v['id']));?>">  <p class="goods-list-title"><?php echo ($v["title"]); ?></p></a>
        <div class="goods-list-price">
          <span ><?php $re=floor((time()-$v['addtime'])/60); if($re<60){ echo $re.'分钟'; }elseif($re>60 && $re<60*24){ echo floor($re/60).'小时'; }elseif($re>60*24){ echo floor($re/60/24).'天'; } ?>前</span>
       <!--    <span>￥</span>
       <span>129</span>
       <span>.00</span>
       <span>商家免邮</span> -->
        </div>
        <div class="goods-list-judge">
          <span>616人评价 </span>
          <span>好评率100%</span>
          <span>...</span>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 margin-top-8" style="height:1px; background:#ccc">
            
          </div>
        </div>
      </div>
    </div><?php endforeach; endif; ?>


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
<div style="height:80px"></div>
  <script type="text/javascript" src="/new_lgx/Public/weixin/product/js/jquery.min.js"></script>
<script src="/new_lgx/Public/weixin/product/js/swiper-3.4.2.min.js"></script>
<script>
$(function(){
    var mySwiper = new Swiper('.swiper-container',{
    slidesPerView:3
  })

})

</script>

    ﻿<nav class="navbar navbar-default navbar-fixed-bottom" style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
             <a href="<?php echo U('index');?>"> <i class="iconfont icon-shouye-copy-copy"></i>
              <p style="font-size:13px;">首页</p></a>
            </div>
          </div>
        
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
            <a href="<?php echo U('news_list');?>">  <i class="iconfont icon-news"></i>
              <p style="font-size:13px;">新闻</p></a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
         <a href="<?php echo U('luntan');?>">     <i class="iconfont icon-bianminfuwu"></i>
              <p style="font-size:13px;">本地圈</p></a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
              <a href="<?php echo U('faxian');?>"><i class="iconfont icon-ren1"></i>
              <p style="font-size:13px;">服务</p></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/index/js/bootstrap.min.js"></script>
  </body>
</html>