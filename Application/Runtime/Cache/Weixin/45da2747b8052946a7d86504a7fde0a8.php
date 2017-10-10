<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>设置</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_set/css/settings.css" rel="stylesheet">
  </head>
  <body>
<style type="text/css">
  .nav-container .back {
    display: inline-block;
    width: 18px;
    height: 18px;
    position: absolute;
    left: 20px;
    bottom: 13px;
    background: url(/new_lgx/Public/weixin/new_message/images/icon/back.png) left center no-repeat;
    text-indent: -9999px;
}
</style>
    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
           <i class="back"></i>
            <h3>设置</h3>
          </div>
        </div>
      </div>
    </nav>

    <!--设置选项-->
    <div class="container-fluid">
      <div class="row settings"><a href="<?php echo U('new_mydata');?>"> 
        <div class="col-xs-12 options">
         <h4 class="fl">个人资料</h4>
          <!-- <div class="touxiang">
            <img src="/new_lgx/Public/weixin/new_set/images/ceshitouxiang.png" class="img-responsive">
          </div> -->
          
        </div></a>
        <div class="col-xs-12 options">
          <h4>账号管理</h4>
        </div>
        <a href="<?php echo U('new_bind');?>">
        <div class="col-xs-12 options">
          <h4>账号绑定</h4>
        </div>
        </a>
        <div class="col-xs-12 options">
          <h4>隐私设置</h4>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
<a href="<?php echo U('new_push');?>">
        <div class="col-xs-12 options">
          <h4>消息推送</h4>
        </div>
        </a>
        <div class="col-xs-12 options">
          <h4>缓存管理</h4>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
        <a href="<?php echo U('new_aboutus');?>">
        <div class="col-xs-12 options">
          <h4>关于我们</h4>
        </div>
        </a>
        <div class="col-xs-12 options">
          <h4>我的公约</h4>
        </div>
        <div class="col-xs-12 options">
          <h4>我的规范</h4>
        </div>
        <div class="col-xs-12 options">
          <h4>检查更新</h4>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_set/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_set/js/settings.js"></script>
       <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
    </script>
  </body>
</html>