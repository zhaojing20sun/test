<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>账号绑定</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_bind/css/zhanghaobangding.css" rel="stylesheet">
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <h3>账号绑定</h3>
          </div>
        </div>
      </div>
    </nav>

    <!--设置选项-->
    <div class="container-fluid">
      <div class="row settings">
        <div class="col-xs-12 options">
          <h4>微信</h4>
          <div id="div1" class="open1">
            <div id="div2" class="open2">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>微博</h4>
          <div id="div3" class="open3">
            <div id="div4" class="open4">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>QQ</h4>
          <div id="div5" class="open5">
            <div id="div6" class="open6">
              
            </div>
          </div>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
        <div class="col-xs-12">
          <p>绑定第三方账号后后可以直接登录</p>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_bind/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_bind/js/zhanghaobangding.js"></script>
     <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
    </script>
  </body>
</html>