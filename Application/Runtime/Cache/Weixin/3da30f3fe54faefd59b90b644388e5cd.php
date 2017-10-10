<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>消息推送</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_push/css/xiaoxituisong.css" rel="stylesheet">
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <h3>消息推送</h3>
          </div>
        </div>
      </div>
    </nav>

    <!--设置选项-->
    <div class="container-fluid">
      <div class="row settings">
        <div class="col-xs-12 options">
          <h4>评论</h4>
          <div id="div1" class="open1">
            <div id="div2" class="open2">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>@</h4>
          <div id="div3" class="open3">
            <div id="div4" class="open4">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>点赞</h4>
          <div id="div5" class="open5">
            <div id="div6" class="open6">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>系统通知</h4>
          <div id="div7" class="open7">
            <div id="div8" class="open8">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>活动消息</h4>
          <div id="div9" class="open9">
            <div id="div10" class="open10">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options2">
          <h4>开启选项，你会收到推送</h4>
        </div>
        <div class="col-xs-12 options">
          <span class="fl">00:00</span>
          <span class="fr">每天</span>
        </div>
        <div class="col-xs-12 options">
          <h4>签到提醒</h4>
          <div id="div11" class="open11">
            <div id="div12" class="open12">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options2">
          <h4>定时提醒</h4>
          <div id="div13" class="open13">
            <div id="div14" class="open14">
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_push/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_push/js/xiaoxituisong.js"></script>
          <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
    </script>
  </body>
</html>