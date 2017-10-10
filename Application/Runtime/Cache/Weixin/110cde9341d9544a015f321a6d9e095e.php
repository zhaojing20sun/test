<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/index/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">

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
<style type="text/css">
  .thumbnail .caption {
    padding: 9px 0;
    color: #333;
}
</style>
    <!-- 头部 -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-2 col-md-2 icon-container">
            <i class="iconfont icon-ren1"></i>
          </div>
          <div class="col-xs-10 col-md-10 title-container">
            <h3>新发现</h3>
            <a href="#" class="fr"><i class="iconfont icon-saoyisao"></i></a>
          </div>
        </div>
      </div>
    </nav>

    <!--标题-->
    <?php if(is_array($column)): foreach($column as $key=>$v): ?><div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 model-title">
          <i class="iconfont icon-shuxian"></i>
          <span><?php echo ($v["title"]); ?></span>
        </div>
      </div>
    </div>   
     <?php $re= M('weixin_easy')->where(array('userid'=>$_SESSION['uid'],'pid'=>$v['id']))->select(); if($re){ ?>
      <div class="container-fluid">
      <div class="row">
      <?php foreach($re as $key=>$value){ ?>
        <div class="col-xs-3 col-md-3">
          <div class="thumbnail">
        <a href="http://<?php echo ($value["url"]); ?>">    <img src="/new_lgx/<?php echo ($value["logo"]); ?>" width="50" height="50" style="border-radius:25px;"></a>
            <div class="caption">
        <a href="<?php echo ($value["url"]); ?>">      <h5><?php echo ($value["title"]); ?></h5></a>
            </div>
          </div>
        </div>
    <?php } ?>
 <?php } ?>
       </div>
    </div>
    <div class="space-8">
    </div><?php endforeach; endif; ?> 
    <!--上icon下文字-->



   

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