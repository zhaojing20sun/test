<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/new_index/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_index/css/swiper-3.4.2.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_index/css/index.css" rel="stylesheet">
  </head>
  <body>


    <div id="anchor">

    </div>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="me">我</i>
            <i class="yun">天气</i>
            <h3>首页</h3>
            <i class="search">搜索</i>
          </div>
        </div>
      </div>
    </nav>

    <!--轮播图-->
    <div id="carousel1" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
        <li data-target="#carousel1" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner.png" alt="1.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner.png" alt="2.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner.png" alt="3.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner.png" alt="4.jpg">
        </div>
      </div>
    </div>

    <!--每日签到-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 sign_bg">
          <a href="#">每日签到</a>
          <p>今日知识一则或心灵鸡汤一句</p>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 classify">
          <ul>
            <li><a href="<?php echo U('video_list');?>"  data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/video.png"><p>视频</p></a></li>
             <li><a href="<?php echo U('show_list');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/tv.png"><p>电视</p></a></li>
            
               <li><a href="<?php echo U('friend_list');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/friends.png"><p>交友</p></a></li>
               <li><a href="<?php echo U('activity_list');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/active.png"><p>活动</p></a></li>

               <li><a href="<?php echo U('news_list');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/news.png"><p>新闻</p></a></li>

            
            <li><a href="#" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/broadcast.png"><p>广播</p></a></li>
           
          
          
            
            <li><a href="#" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/education.png"><p>教育</p></a></li>
            <li><a href="#" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/mall.png"><p>商城</p></a></li>
            <li><a href="#" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/finance.png"><p>金融</p></a></li>
             <li><a href="<?php echo U('faxian');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/icon/more.png"><p>更多</p></a></li>
          </ul>
        </div>
      </div>
    </div>


    <!--轮播图-->
    <div id="carousel2" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
        <li data-target="#carousel2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel2" data-slide-to="1"></li>
        <li data-target="#carousel2" data-slide-to="2"></li>
        <li data-target="#carousel2" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner2.png" alt="1.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner2.png" alt="2.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner2.png" alt="3.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner2.png" alt="4.jpg">
        </div>
      </div>
    </div>

    <!--今日要闻-->
    <div class="container-fluid">
      <div class="row">
       <a href="<?php echo U('news_list');?>" data-ajax="false">
        <div class="col-xs-12 news-title">
          <h3>今日要闻</h3>
          <i></i>
        </div>
        </a>
      </div>
    </div>

    <!--今日要闻内容-->
     <?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 news-content">
          <div class="media">
            <div class="media-left news-content-left">
              <img class="media-object" src="/new_lgx/<?php echo ($v["pic"]); ?>"  onerror="this.src='/new_lgx/Public/common/images/nopic.gif'" style="width:100px;height:75px">
            </div>
            <div class="media-body news-content-right">
              <p><?php echo ($v["title"]); ?></p>
              <div class="news-content-right-detail">
                <span>出处</span>
                <span>000评</span>
                <span>广告</span>
                <span>荐</span>
                <span>热</span>
                <span>顶</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><?php endforeach; endif; ?>

    <!--新闻标题内容-->
    <div class="container-fluid news-content">
      <div class="row">
        <div class="col-xs-12 news-content-right">
          <p>新闻标题内容</p>
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-4 media-left padding-0 padding-right-4">
                <img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/news_content_img.png">
              </div>
              <div class="col-xs-4 media-left padding-0 padding-right-4">
                <img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/news_content_img.png">
              </div>
              <div class="col-xs-4 media-left padding-0 padding-right-4">
                <img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/news_content_img.png">
              </div>
            </div>
          </div>
          <div class="news-content-right-detail margin-top-8">
            <span>出处</span>
            <span>000评</span>
            <span>广告</span>
            <span>荐</span>
            <span>热</span>
            <span>顶</span>
          </div>
        </div>
      </div>
    </div>

    <!--轮播图-->
    <div id="carousel3" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
        <li data-target="#carousel3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel3" data-slide-to="1"></li>
        <li data-target="#carousel3" data-slide-to="2"></li>
        <li data-target="#carousel3" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner3.png" alt="1.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner3.png" alt="2.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner3.png" alt="3.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_index/images/slide_banner3.png" alt="4.jpg">
        </div>
      </div>
    </div>

    <!--好友推荐-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 recommended">
          <h3>好友推荐</h3>
          <i>换一批</i>
        </div>
      </div>
    </div>

    <!--推荐内容-->
    <div class="container-fluid recommended-content">
      <div class="row">
        <div class="col-xs-8">
          <div class="media-left">
            <img class="media-object" src="/new_lgx/Public/weixin/new_index/images/touxiang.png">
          </div>
          <div class="media-body">
            <p>用户名</p>
            <p>话题内容简介</p>
          </div>
        </div>
        <div class="col-xs-4">
          <span class="follow">+ 关注</span>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row follow-content">
        <div class="col-xs-4 padding-0 padding-right-8">
          <img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/180-180.png">
        </div>
        <div class="col-xs-4 padding-0 padding-right-8">
          <img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/180-180.png">
        </div>
        <div class="col-xs-4 padding-0 padding-right-8">
          <img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/180-180.png">
        </div>
      </div>
    </div>


    <!--仿平安金管家效果-->
    <!--蓝色固定条-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 fixed-bottom-bar" id="fixed-bottom-bar">
          <span>点我，打开精彩金融生活！</span>
        </div>
      </div>
    </div>

    <!--底部固定滑动-->
    <div class="swiper-container fixed-bottom-slidebox" id="fixed-bottom-slidebox">
      <div class="swiper-wrapper" id="swiper-wrapper">
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/education.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/finance.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/video.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/education.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/finance.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/video.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/education.png"></a></div>
        <div class="swiper-slide"><a href="#"><img src="/new_lgx/Public/weixin/new_index/images/finance.png"></a></div>
      </div>
    </div>

    <!--从左侧滑出来的容器-->

    <div class="container-fluid swipe-right-container" id="swipe-right-container">
      <div class="row swipe-right-container-row margin-bottom-8">
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/video.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/finance.png"></a>
        </div>
      </div>
    </div>

    <!--从右侧滑出来的点击按钮-->
    <div class="slide-right-button">
      <a href="#"><img src="/new_lgx/Public/weixin/new_index/images/button.png"></a>
    </div>

    <!--点击按钮后出现的容器-->
    <div class="container-fluid bottom-click-container">
      <div class="row bottom-click-container-row">
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/finance.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/video.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/finance.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="#"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>
      </div>
    </div>


    <!--底部导航-->
    <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3 navbar-bottom-item">
            <a href="#"><img src="/new_lgx/Public/weixin/new_index/images/icon/shouye.png"><p>首页</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a href="#"><img src="/new_lgx/Public/weixin/new_index/images/icon/faxian.png"><p>发现</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a href="#"><img src="/new_lgx/Public/weixin/new_index/images/icon/dongtai.png"><p>动态</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a href="#"><img src="/new_lgx/Public/weixin/new_index/images/icon/wo.png"><p>我</p></a>
          </div>
        </div>
      </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_index/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_index/js/swiper-3.4.2.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_index/js/jquery.mobile.js"></script>
    <script src="/new_lgx/Public/weixin/new_index/js/index.js"></script>
  </body>
</html>