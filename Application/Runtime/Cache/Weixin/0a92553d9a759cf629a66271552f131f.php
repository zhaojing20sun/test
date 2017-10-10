<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo ($news["title"]); ?></title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_at4nh6q3wp39dx6r.css">
    <link href="/new_lgx/Public/weixin/detial/css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- 头部 -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 icon-container">
            <em>&lt;</em>
            <span class="back" onclick="history.go(-1)">返回</span>
         
            <!-- <i style="margin-right:80px"><?php echo ($news["title"]); ?></i> -->
          </div>
        </div>
      </div>
    </nav>

    <div class="space-8">
      
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3 class="detail-title"><?php echo ($news["title"]); ?></h3>
          <div class="release-time">
            <span>2017-03-13</span>
            <span>新闻媒体中心</span>
            <a href="#">釜山电视台</a> 
          </div>
        <!--   <div class="detail-video">
          <video src="" controls="controls" class="center-block"></video>
          <img src="">
        </div> -->
          <div class="detail-article">
           <?php echo (htmlspecialchars_decode($news["content"])); ?>
          </div>
          <div class="detail-erweima">
            <img src="/new_lgx/Public/weixin/detial/images/erweima.png">
          </div>
          <div class="detail-remark">
            <span>觉得不错，请<em>留言，</em></span>
            <span>有事没事，请<em>点赞！</em></span>
            <span class="pull-right">投诉！</span>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/detial/js/bootstrap.min.js"></script>
  </body>
</html>