<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>活动-<?php echo ($news["title"]); ?></title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_at4nh6q3wp39dx6r.css">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
    <link href="/new_lgx/Public/weixin/detial/css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:white">
<style type="text/css">
  .release-time span{
    font-size: 14px;
    color: #ccc;
    padding-left: 10%
  }
.iconfont{
  margin-left: 3%
}
.news_top p{
  color:#000;
      letter-spacing: 0;
    text-indent: 0;
}
.message p{
  letter-spacing: 0;
    text-indent: 0;
}
</style>
 
    <!-- 头部 -->
<!--     <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-12 icon-container">
        <em>&lt;</em>
        <span class="back" onclick="history.go(-1)">返回</span>
     
        <i style="margin-right:80px"><?php echo ($news["title"]); ?></i>
      </div>
    </div>
  </div>
</nav> -->
<!-- 
    <div class="space-8">
      
    </div> -->

    <div class="container-fluid" style="margin-bottom:50px">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <h3 class="detail-title" style="font-size:18px;"><?php echo ($activity["title"]); ?></h3>
          <hr style="border-top: 1px solid #ccc;width:100%;margin-top:10px;margin-bottom:10px;">
        
            
 
        
          <div class="detail-article" style="margin-top:5px;">
           <?php echo (htmlspecialchars_decode($activity["content"])); ?>
           

               
          
        
       
        </div>
      </div>
    </div>


    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/detial/js/bootstrap.min.js"></script>
     
  </body>
</html>