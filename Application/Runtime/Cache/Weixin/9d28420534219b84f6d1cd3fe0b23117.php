<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>金融页面</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/invest/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/invest/css/swiper-3.4.2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/invest/css/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/invest/css/font_zsx3fiuk32fbt9.css">
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/invest/css/font_at4nh6q3wp39dx6r.css">
    <link href="/new_lgx/Public/weixin/invest/css/index.css" rel="stylesheet">

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
 
      text-decoration: none;
}
</style>
  <body>
    <div id="anchor">

    </div>
    <!-- 头部 -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom" >
      <div class="container-fluid" >
        <a href="#" class="navbar-brand" style="width:100%;text-align:center">金融理财</a>
      </div>
    </nav>

<!--     <div class="space-8">
      
    </div> -->

    <!-- 轮播 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
      </ol>

      <div class="carousel-inner" role="listbox">
        <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:200px;">
        </div><?php endforeach; endif; ?>
      </div>

      <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
    </div>

    <!--金融页面列表页-->
    <?php if(is_array($licai)): foreach($licai as $key=>$v): ?><div class="container-fluid finance-border-bottom">
      <div class="row">
        <div class="col-xs-12 col-md-12 finance-border-bottom">
        <a href="<?php echo U('invest_licai');?>">
          <i class="iconfont icon-xinshouzhuanqu finance-title-icon"></i>
          <p class="finance-title-title"><?php echo ($v["title"]); ?></p>
          <i class="iconfont icon-jiantou finance-title-jiantou"></i>
</a>
        </div>
        <?php $re=M('weixin_invest')->where(array('pid'=>$v['id']))->select(); if($re){ foreach($re as $key=>$value){ ?>
   <div class="col-xs-8 col-md-8 margin-top-8">
          <p class="finance-xinshou"><a href="#"><?php echo ($value["title"]); ?></a></p>
          <div class="finance-shouyi">
            <span>
              <span class="finance-shouyi-shu"><?php echo ($value["invest_earnings"]); ?></span>历史收益
            </span>
            <span>
              <span class="finance-shouyi-shu"><?php echo ($value["invest_time"]); ?></span>期限
            </span>
            <br>
            <span>
             起投 <span class="finance-shouyi-shu">100元</span>
            </span>
             <span>
             融资 <span class="finance-shouyi-shu"><?php echo ($value["invest_financing"]); ?></span>
            </span>
          </div>
          <p class="finance-shouyi-remark">预期收益不承诺等于实际收益</p>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <p class="finance-qiangdan"><a href="#"><i class="iconfont icon-qiangdan"></i></a></p>
        </div>
             <?php } } ?>
     

      </div>
    </div><?php endforeach; endif; ?>



    <!--仿平安金管家效果-->
    <!--蓝色固定条-->
    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 fixed-bottom-bar" id="fixed-bottom-bar">
          <span>点我，打开精彩金融生活！</span>
        </div>
      </div>
    </div>
    
     <div class="swiper-container fixed-bottom-slidebox" id="fixed-bottom-slidebox">
      <div class="swiper-wrapper" id="swiper-wrapper">
      
        <div class="swiper-slide"><a href="http://<?php ?>/weixin/index/product.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/weishangcheng.png" width="88" height="80"></a></div> 
        <div class="swiper-slide"><a href="http://<?php ?>/weixin/index/invest.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/jinronglicai.png" width="88" height="80"></a></div> 
        <div class="swiper-slide"><a href="http://<?php ?>/weixin/index/medicine.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/qiuyiwenyao.png" width="88" height="80"></a></div>        
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
          <a href="http://<?php?>/weixin/index/education.html"  data-ajax="false"><span style="font-size:13px;position:ab//solute;color:#fff;text-align:center;bottom:0;width:100%;left:0"></span><img src="/new_lgx/Public/weixin/index/images/zaixianzaojiao.png" width="88" height="80"></a>
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
          <a href="http://<?php?>/weixin/index/invest.html" data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/jinronglicai.png" width="88" height="80"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="http://<?php?>/weixin/index/medicine.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/qiuyiwenyao.png" width="88" height="80"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="http://<?php?>/weixin/index/education.html"  data-ajax="false"><img src="/new_lgx/Public/weixin/index/images/zaixianzaojiao.png" width="88" height="80"></a>
        </div>
       
      </div>
    </div>
       -->


  <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-height"  style="background:#fff;">
      <div class="container">
        <div class="row navbar-bottom-height">
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
         <a href="<?php echo U('invest');?>" data-ajax="false">    <i class="iconfont icon-xunlian1"></i>
              <p style="font-size:13px;">推荐</p> </a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
          <a href="<?php echo U('invest_licai');?>" data-ajax="false">      <i class="iconfont icon-faxian"></i>
              <p style="font-size:13px;">理财</p> </a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
              <i class="iconfont icon-dongtai"></i>
              <p style="font-size:13px;">借贷</p>
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
    <script src="/new_lgx/Public/weixin/invest/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/invest/js/swiper-3.4.2.min.js"></script>
   <!--  <script src="js/index.js"></script> -->
  
    <script src="/new_lgx/Public/weixin/invest/js/index2.js"></script>
  </body>
</html>