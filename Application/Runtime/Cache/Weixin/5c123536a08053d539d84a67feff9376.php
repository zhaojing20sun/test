<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>最新活动</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/list/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/list/css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">

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
            <h3>最新活动</h3>
          </div>
        </div>
      </div>
    </nav>
<?php if(is_array($activity)): foreach($activity as $key=>$v): ?><div class="media">
      <div class="media-left">
        <a href="#"><img class="media-object" src="/new_lgx/<?php echo ($v["logo"]); ?>" width="100" height="85" alt="测试用图"></a>
      </div>
      <div class="media-body">
        <p class="goods-list-title"><?php echo ($v["title"]); ?></p>
        <div class="goods-list-price">
          <!-- <span>￥</span>
          <span>129</span>
          <span>.00</span>
          <span>商家免邮</span> -->
        活动时间：<?php echo (date('Y-m-d',$v["start_time"])); ?>至<?php echo (date('Y-m-d',$v["end_time"])); ?>
        </div>
        <div class="goods-list-judge">
          <span>616人评价 </span>
          <span>好评率100%</span>
          <span>...</span>
        </div>
      </div>
    </div><?php endforeach; endif; ?>
   





    <!--底部导航-->
   <!--  <nav class="navbar navbar-default navbar-fixed-bottom">
     <div class="container">
       <div class="row">
         <div class="col-xs-3 col-md-3">
           <div class="thumbnail custom-thumbnail">
             <i class="iconfont icon-shouye-copy-copy"></i>
             <p>首页</p>
           </div>
         </div>
         <div class="col-xs-3 col-md-3">
           <div class="thumbnail custom-thumbnail">
             <i class="iconfont icon-faxian"></i>
             <p>商品</p>
           </div>
         </div>
         <div class="col-xs-3 col-md-3">
           <div class="thumbnail custom-thumbnail">
             <i class="iconfont icon-dongtai"></i>
             <p>购物车</p>
           </div>
         </div>
         <div class="col-xs-3 col-md-3">
           <div class="thumbnail custom-thumbnail">
             <i class="iconfont icon-wode"></i>
             <p>我的</p>
           </div>
         </div>
       </div>
     </div>
   </nav> -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/list/js/bootstrap.min.js"></script>
  </body>
</html>