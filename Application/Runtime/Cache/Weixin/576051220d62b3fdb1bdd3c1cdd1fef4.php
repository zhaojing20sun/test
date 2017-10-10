<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>动态</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/new_bendi/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_bendi/css/dongtai.css" rel="stylesheet">
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <ul>
              <li>推荐</li>
              <li>热点</li>
              <li>视频</li>
              <li class="selected">本地</li>
            </ul>
            <i class="jia"></i>
            <i class="bianji"></i>
          </div>
        </div>
      </div>
    </nav>

    <!--轮播图-->
    <div id="carousel1" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
       <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><li data-target="#carousel1" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
       <!--  <li data-target="#carousel1" data-slide-to="0" class="active"></li>
       <li data-target="#carousel1" data-slide-to="1"></li>
       <li data-target="#carousel1" data-slide-to="2"></li>
       <li data-target="#carousel1" data-slide-to="3"></li> -->
      </ol>

      <div class="carousel-inner" role="listbox">
        <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:200px;">
        </div><?php endforeach; endif; ?>
       <!--  <div class="item active">
         <img src="/new_lgx/Public/weixin/new_bendi/images/slide_banner.png" alt="1.jpg">
       </div>
       <div class="item">
         <img src="/new_lgx/Public/weixin/new_bendi/images/slide_banner.png" alt="2.jpg">
       </div>
       <div class="item">
         <img src="/new_lgx/Public/weixin/new_bendi/images/slide_banner.png" alt="3.jpg">
       </div>
       <div class="item">
         <img src="/new_lgx/Public/weixin/new_bendi/images/slide_banner.png" alt="4.jpg">
       </div> -->
      </div>
    </div>

    <!--新闻内容-->
    
    <div class="container-fluid">
      <div class="row">
     

        <div class="col-xs-12 news-content">
          <div class="media">
            <div class="media-left news-content-left">
              <img class="media-object" src="/new_lgx/Public/weixin/new_bendi/images/news_content_img.png">
            </div>
            <div class="media-body news-content-right">
              <p>新闻标题内容</p>
              <div class="news-content-right-detail">
                <span>出处</span>
                <span>000评</span>
                <span class="ding">顶</span>
              </div>
            </div>
          </div>
        </div>

  <div class="col-xs-12 news-content2">
        <div class="media">
          <div class="media-left news-content-left2">
            <img class="media-object" src="/new_lgx/Public/weixin/new_bendi/images/news_content_img.png">
          </div>
          <div class="media-body news-content-right2">
            <p>新闻标题内容</p>
            <div class="news-content-right-detail2">
              <span>出处</span>
              <span>000评</span>
              <span class="hot">热</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-xs-12 news-content">
        <div class="media">
          <div class="media-left news-content-left">
            <img class="media-object" src="/new_lgx/Public/weixin/new_bendi/images/news_content_img.png">
          </div>
          <div class="media-body news-content-right">
            <p>新闻标题内容</p>
            <div class="news-content-right-detail">
              <span>出处</span>
              <span>000评</span>
              <span class="jian">荐</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-xs-12 news-content2">
        <div class="media">
          <div class="media-left news-content-left2">
            <img class="media-object" src="/new_lgx/Public/weixin/new_bendi/images/news_content_img.png">
          </div>
          <div class="media-body news-content-right2">
            <p>新闻标题内容</p>
            <div class="news-content-right-detail2">
              <span>出处</span>
              <span>000评</span>
              <span class="hot">热</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-xs-12 news-content">
        <div class="media">
          <div class="media-left news-content-left">
            <img class="media-object" src="/new_lgx/Public/weixin/new_bendi/images/news_content_img.png">
          </div>
          <div class="media-body news-content-right">
            <p>新闻标题内容</p>
            <div class="news-content-right-detail">
              <span>出处</span>
              <span>000评</span>
              <span class="ding">顶</span>
            </div>
          </div>
        </div>
      </div> 
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_bendi/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_bendi/js/dongtai.js"></script>
     <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
    </script>
  </body>
</html>