<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>关于我们</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_aboutus/css/aboutus.css" rel="stylesheet">
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <h3>关于我们</h3>
          </div>
        </div>
      </div>
    </nav>

    <!--设置选项-->
    <div class="container-fluid">
      <div class="row settings">
        <div class="col-xs-12 options banbenbianhao">
          <img src="/new_lgx/Public/weixin/new_aboutus/images/ceshitouxiang.png">
          <h4>版本编号</h4>
        </div>
        <div class="col-xs-12 options">
          <h4>邮箱 <span style="float:right"><?php echo ($us["email"]); ?></span></h4>

        </div>
        <div class="col-xs-12 options">
          <h4>电话<span style="float:right"><?php echo ($us["tel"]); ?></span></h4>
        </div>
        <div class="col-xs-12 options" id="service">
          <h4>服务条款</h4>
        </div>
        <div class="col-xs-12 options" title="hide" style="height:auto;display:none">
          <h3 style="text-indent:2em;padding:2px 0"><?php echo ($us["service"]); ?></h3>
        </div>
        <div class="col-xs-12 options" id="privacy">
          <h4>隐私条款</h4>
        </div>
        <div class="col-xs-12 options" title="hide" style="height:auto;display:none">
          <h3 style="text-indent:2em;padding:2px 0"><?php echo ($us["privacy"]); ?></h3>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_aboutus/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_aboutus/js/aboutus.js"></script>
         <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
    </script>
    <script type="text/javascript">
      $(function(){
       $("#service").click(function(){
           var status=$(this).next().attr('title')
           if(status=='hide'){
            $(this).next().slideDown()
            $(this).next().attr('title','show')
           }else{
            $(this).next().slideUp()
            $(this).next().attr('title','hide')
           }
       })
         $("#privacy").click(function(){
           var status=$(this).next().attr('title')
           if(status=='hide'){
            $(this).next().slideDown()
            $(this).next().attr('title','show')
           }else{
            $(this).next().slideUp()
            $(this).next().attr('title','hide')
           }
       })
      })
    </script>
  </body>
</html>