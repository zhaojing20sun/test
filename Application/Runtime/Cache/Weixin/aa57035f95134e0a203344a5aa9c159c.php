<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>发现</title>

    <!-- Bootstrap -->
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_s7n5nkjexmg9cnmi.css">
  <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_18mogr7g839s5rk9.css">
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css?v1.0" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_faxian/css/faxian.css?v1.0" rel="stylesheet">
     <link href="/new_lgx/Public/weixin/new_index/css/mui.min.css" rel="stylesheet">
  </head>
  <style type="text/css">
  .col-xs-12{
    padding-left:3px;
  }
  h1, h2, h3, h4, h5, h6{
    margin:0;
  }
  .navbar-bottom-item {
    display: inline-block;
    width: 24%;
    margin-top: 8px;
    text-align: center;
}
a:link {color:#8f8f94;}/* 未被访问的链接 */

a:visited {color:#8f8f94;}/* 已被访问的链接 */

a:hover {color:#8f8f94;}/* 鼠标指针移动到链接上 */

a:active {color:#8f8f94;}/* 正在被点击的链接 */
  </style>
  <body style="padding-bottom:60px;">

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <h3>发现</h3>
            <i class="icon iconfont icon-chazhao" style="font-size:25px;color:white;position:absolute;right:2%;top:29%" ></i>
          </div>
        </div>
      </div>
    </nav>

   
     <!--轮播图-->
    <div id="slider" class="mui-slider" style="height: 150px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <?php $count=count($zonghe)-1; ?>
           <div class="mui-slider-item mui-slider-item-duplicate">
         <?php if($zonghe[$count]['url']!=''){ ?>
         <a href="<?php echo $zonghe[$count]['url'] ?>">
          <img src="/new_lgx/<?php echo ($zonghe[$count]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($zonghe[$count]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
        </div>
       <?php if(is_array($zonghe)): foreach($zonghe as $k=>$v): ?><div class="mui-slider-item">
           <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
        </div><?php endforeach; endif; ?>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
          <div class="mui-slider-item mui-slider-item-duplicate">
           <?php if($zonghe[0]['url']!=''){ ?>
         <a href="<?php echo $zonghe[0]['url'] ?>">
          <img src="/new_lgx/<?php echo ($zonghe[0]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($zonghe[0]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
        </div>
      </div>
      <div class="mui-slider-indicator">
       <?php if(is_array($zonghe)): foreach($zonghe as $k=>$v): ?><div class="mui-indicator  <?php if($k==0) echo "mui-active"?>"></div><?php endforeach; endif; ?>
      </div>
    </div>
    <!--轮播结束-->

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 margin-top">
         <a href="<?php echo U('new_huodong');?>">   <img src="/new_lgx/Public/weixin/new_faxian/images/remenhuodong.png" class="img-responsive"></a>
        </div>
        <div class="col-xs-12">
       <a href="http://www.vvsvip.com">   <img src="/new_lgx/Public/weixin/new_faxian/images/weishangcheng.png" style="position: relative;
    top: 0px;" class="img-responsive"></a>
        </div>
        <div class="col-xs-12">
       <a href="<?php echo U('education');?>">   <img src="/new_lgx/Public/weixin/new_faxian/images/zaixianjiaoyu.png" style="position: relative;
    top: 0px;" class="img-responsive"></a>
        </div>
        <div class="col-xs-12">
       <a href="<?php echo U('invest');?>">   <img src="/new_lgx/Public/weixin/new_faxian/images/jinronglicai.png" style="position: relative;
    top: 0px;" class="img-responsive"></a>
        </div>
        <div class="col-xs-12">
       <a href="http://m.800pharm.com">   <img src="/new_lgx/Public/weixin/new_faxian/images/qiuyiwenyao.png" style="position: relative;
    top:0px;" class="img-responsive"></a>
        </div>
        <div class="col-xs-12">
      <a href="<?php echo U('new_gengduo');?>">     <img src="/new_lgx/Public/weixin/new_faxian/images/gengduo.png" style="position: relative;
    top: 0px;" class="img-responsive"></a>
        </div>
      </div>
    </div>
<style type="text/css">
  .navbar-bottom-item a p{
    margin:0; 
    position: relative;
    top: -3px;
  }
  .navbar-bottom-custom {
    padding-top: 0; 
     border-top: 1px solid #ccc; 
    height: 45px;
    background: white;
    color: #fff;
}
.fixed-bottom-bar{
      height: 30px;
    line-height: 30px;
    text-align: center;
    background: darkblue;
    color: #fff;
    position: fixed;
    left: 0;
    bottom: 50px;
}
.fixed-bottom-slidebox {
    position: fixed;
    left: 0;
    bottom: 50px;
}
.swipe-right-container {
    display: none;
    position: fixed;
    left: 0;
    bottom: 70px;
    z-index: 2;
    background: rgba(0,0,0,0.5);
}
.bottom-click-container {
    /* height: 168px; */
    height: 0;
    position: fixed;
    bottom: 50px;
    left: 0;
    z-index: 3;
    background: rgba(0,0,0,0.5);
}
.slide-right-button {
    width: 50px;
    height: 50px;
    position: fixed;
    right: -50px;
    bottom: 132px;
}
</style>
    <!--底部导航-->
  <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_index');?>" data-ajax="false"><i class="icon iconfont icon-zhuye" style="font-size:25px;" ></i> <p>首页</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_faxian');?>" data-ajax="false"><i class="icon iconfont icon-icon-yxj-discover" style="font-size:24px;color:red" ></i> <p style="color:red">发现</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_dongtai');?>" data-ajax="false"><i class="icon iconfont icon-pengyouquan" style="font-size:25px;" ></i><p>动态</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_my');?>" data-ajax="false"><i class="icon iconfont icon-wo" style="font-size:25px;" ></i><p>我</p></a>
          </div>
        </div>
      </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_faxian/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_faxian/js/swiper-3.4.2.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_faxian/js/jquery.mobile.js"></script>
    <script src="/new_lgx/Public/weixin/new_faxian/js/index.js"></script>
     <script src="/new_lgx/Public/weixin/new_index/js/mui.min.js"></script>
      <script type="text/javascript">
   $(function(){
      $("a").attr('data-ajax','false')
   
   })

    var slider = mui("#slider");
        slider.slider({
          interval: 2000
        });
       
        });
</script>
  </body>
</html>