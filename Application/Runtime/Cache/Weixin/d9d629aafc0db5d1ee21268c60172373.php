<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>电视台</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/hehe/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/hehe/css/swiper-3.4.2.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/education/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">
    <script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <style type="text/css">
 a{color:#333;}
 a:link{
 color:#333;
      text-decoration: none;
}
.thumbnail .caption {
    padding: 4px;
    color: #333;
}
  </style>
  <body>
<div style="width:100%;height:100%;position:fixed;z-index:1050;">
  <img src="/new_lgx/Public/weixin/common/images/qidai.png" style="width:100%;height:100%;">
</div>
    <div id="anchor">

    </div>
    <!-- 头部 -->
 <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 icon-container">
            <h3>在线早教</h3>
          </div>
        </div>
      </div>
    </nav>

    <!--轮播标题-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 module-title">
          <span>推荐课程（中式早教）</span>
          <i class="iconfont icon-jiantou fr"></i>
        </div>
      </div>
    </div>
    <!-- 轮播 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
      </ol>

      <div class="carousel-inner" role="listbox">
       <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:200px;">
        </div><?php endforeach; endif; ?>
       <!--  <div class="item active">
         <img src="/new_lgx/Public/weixin/education/images/1.jpg" alt="1.jpg">
       </div>
       <div class="item">
         <img src="/new_lgx/Public/weixin/education/images/2.jpg" alt="2.jpg">
       </div>
       <div class="item">
         <img src="/new_lgx/Public/weixin/education/images/3.jpg" alt="3.jpg">
       </div> -->
      </div>

      <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
    </div>

 <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 module-title">
          <span>总共学习</span>
          <i class="iconfont icon-jiantou fr"></i>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 text-center">
          <span><strong class="font-size-26">0</strong> 分钟</span>
        </div>
        <ul class="col-xs-12 col-md-12 margin-top-5">
          <li class="col-xs-4 col-md-4 text-center">
            <span>完成</span>
            <p><strong>0</strong>次</p>
          </li>
          <li class="col-xs-4 col-md-4 text-center">
            <span>累计</span>
            <p><strong>0</strong>天</p>
          </li>
          <li class="col-xs-4 col-md-4 text-center">
            <span>消耗</span>
            <p><strong>0</strong>小时</p>
          </li>
        </ul>
      </div>
    </div>

    <!--待办事宜-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 module-title">
          <span>待办事宜</span>
          <i class="iconfont icon-jiantou fr"></i>
        </div>
      </div>
    </div>

    <div class="container-fluid module margin-top-5">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <p>游泳课程入门</p>
          <p>英语课程入门</p>
          <p>音乐课程入门</p>
        </div>
        <div class="col-xs-6 col-md-6 text-right">
          <p>待办</p>
          <p>待办</p>
          <p>待办</p>
        </div>
      </div>
    </div>

    <!--我的课程-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 module-title">
          <span>我的课程</span>
          <i class="iconfont icon-jiahao fr">添加课程</i>
        </div>
      </div>
    </div>

    <div class="container-fluid module margin-top-5">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <p>游泳入门|女生版</p>
          <p>还未进行训练</p>
        </div>
        <div class="col-xs-6 col-md-6 text-right">
          <p>已下架</p>
          <p>30分钟 完成0次</p>
        </div>
      </div>
    </div>

    <!--我的课程2-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 module-title">
          <span>我的课程</span>
          <i class="iconfont icon-jiahao fr">添加课程</i>
        </div>
      </div>
    </div>

    <div class="container-fluid mylesson-bg">
      <div class="row">
        <div class="col-xs-12 col-md-12 mylesson-2">
          <p><i class="iconfont icon-jiahao1">定制课程</i></p>
          <p>你还没参加训练</p>
          <p>马上选择适合自己的课程</p>
        </div>
      </div>
    </div>

    <div class="space-8">
      
    </div>


    <!--仿平安金管家效果-->
    <!--蓝色固定条-->
   <!--  <div class="container-fluid">
     <div class="row">
       <div class="col-xs-12 col-md-12 fixed-bottom-bar" id="fixed-bottom-bar">
         <span>点我，打开精彩金融生活！</span>
       </div>
     </div>
   </div>
   
   底部固定滑动
   <div class="swiper-container fixed-bottom-slidebox" id="fixed-bottom-slidebox">
     <div class="swiper-wrapper" id="swiper-wrapper">
     
       <div class="swiper-slide"><a href="http://<?php?>/weixin/index/product.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/weishangcheng.png" width="88" height="80"></a></div> 
       <div class="swiper-slide"><a href="http://<?php?>/weixin/index/invest.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/jinronglicai.png" width="88" height="80"></a></div> 
       <div class="swiper-slide"><a href="http://<?php?>/weixin/index/medicine.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/qiuyiwenyao.png" width="88" height="80"></a></div>        
       <div class="swiper-slide"><a href="http://<?php ?>/weixin/index/education.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/zaixianzaojiao.png" width="88" height="80"></a></div> 
   
      
     </div>
   </div>
   
   从左侧滑出来的容器
   
   <div class="container-fluid swipe-right-container" id="swipe-right-container">
     <div class="row margin-top-16 margin-bottom-16">
     
       <div class="col-xs-4 col-md-4 margin-top-8" >
         <a href="http://<?php?>/weixin/index/product.html"  data-ajax="false"><span style="font-size:13px;position:absolute;color:#fff;text-align:center;bottom:0;width:100%;left:0"></span><img src="/new_lgx/Public/weixin/index/images/weishangcheng.png" width="88" height="80"></a>
       </div>        
       <div class="col-xs-4 col-md-4 margin-top-8 ">
         <a href="http://<?php?>/weixin/index/invest.html" data-ajax="false"><span style="font-size:13px;position:absolute;color:#fff;text-align:center;bottom:0;width:100%;left:0"></span><img src="/new_lgx/Public/weixin/index/images/jinronglicai.png" width="88" height="80"></a>
       </div>        
       <div class="col-xs-4 col-md-4 margin-top-8" >
         <a href="http://<?php?>/weixin/index/medicine.html"  data-ajax="false"><span style="font-size:13px;position:absolute;color:#fff;text-align:center;bottom:0;width:100%;left:0"></span><img src="/new_lgx/Public/weixin/index/images/qiuyiwenyao.png" width="88" height="80"></a>
       </div>        
       <div class="col-xs-4 col-md-4 margin-top-8 ">
         <a href="http://<?php?>/weixin/index/education.html"  data-ajax="false"><span style="font-size:13px;position:absolute;color:#fff;text-align:center;bottom:0;width:100%;left:0"></span><img src="/new_lgx/Public/weixin/index/images/zaixianzaojiao.png" width="88" height="80"></a>
       </div>        
      
     </div>
   </div>
   
   从右侧滑出来的点击按钮
   <div class="slide-right-button" style="background:#ccc;text-align:center" >
     <a href="#" style="font-size:11px;line-height:44px;font-weight:bold;color:#333">切换视图</a>
   </div>
   
   点击按钮后出现的容器
   <div class="container-fluid bottom-click-container" >
     <div class="row  bottom-click-container-row">
        
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="http://<?php?>/weixin/index/product.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/weishangcheng.png" width="88" height="80"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="http://<?php ?>/weixin/index/invest.html" data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/jinronglicai.png" width="88" height="80"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="http://<?php ?>/weixin/index/medicine.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/qiuyiwenyao.png" width="88" height="80"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="http://<?php?>/weixin/index/education.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/zaixianzaojiao//.png" width="88" height="80"></a>
       </div>
      
     </div>
   </div> -->
  <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-height"  style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
          <a href="<?php echo U('education');?>" data-ajax="false">    <i class="iconfont icon-xunlian1"></i>
              <p style="font-size:13px;">训练</p></a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
             <a href="<?php echo U('education_faxian');?>" data-ajax="false"> <i class="iconfont icon-faxian"></i>
              <p style="font-size:13px;">发现</p></a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
              <i class="iconfont icon-dongtai"></i>
              <p style="font-size:13px;">动态</p>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
              <i class="iconfont icon-wode"></i>
              <p style="font-size:13px;">我的</p>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/hehe/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/hehe/js/swiper-3.4.2.min.js"></script>
   
   <!--  <script src="js/index.js"></script> -->
    <script src="/new_lgx/Public/weixin/index/js/index2.js"></script>
  </body>
</html>