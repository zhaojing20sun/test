<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>动态02</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_focus/css/swiper-3.4.2.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_focus/css/guanzhuhou.css" rel="stylesheet">
  </head>
  <body>


    <div class="tab-container">
      <div id="box">
        <!--顶部导航，tab选项卡-->
        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 nav-container">
               <a href="<?php echo U('new_addfriend');?>"> <i class="addpeople"></i></a>
                <ul id="tab-btn">
                  <li>热门</li>
                  <li  class="selected" id="follow">关注</li>
                  <li>风景</li>
                  <li>健身</li>
                  <li>美食</li>
                </ul>
               <a href="<?php echo U('new_write');?>">  <i class="bianji">搜索</i></a>
              </div>
            </div>
          </div>
        </nav>
        <!--模块-->
        <div class="tab-content">
          <!--模块1热门-->
          <div class="tab-content-item">
            <!--轮播图-->
            <div id="carousel1" class="carousel slide slide-container margin-bottom-8" data-ride="carousel">
              <ol class="carousel-indicators buttons">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
                <li data-target="#carousel1" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="1.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="2.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="3.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="4.jpg">
                </div>
              </div>
            </div>

            <!--轮播图下面的版块-->
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--模块2关注-->
          <div class="tab-content-item margin-top-160" style="display: block;" >
            <!--推荐标题-->
            <div class="container-fluid recommend">
              <div class="row">
                <div class="col-xs-6">
                  <h4>推荐用户</h4>
                </div>
              </div>
            </div>

            <!--推荐内容-->
            <div class="container-fluid recommended-content">
              <div class="row">
                <div class="col-xs-8">
                  <div class="media-left">
                    <img class="media-object touxiang" src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
                  </div>
                  <div class="media-body">
                    <p>用户名</p>
                    <p>所在城市</p>
                  </div>
                </div>
                <div class="col-xs-4">
                  <span class="updatetime">更新时间</span>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row follow-content">
                <div class="col-xs-12">
                  <img class="img-responsive" src="/new_lgx/Public/weixin/new_focus/images/ceshitupian.png">
                  <p>图片或视频的相关介绍配文</p>
                  <div class="guanzhuhou-icons">
                    <span>铃铛</span>
                    <span>评论</span>
                    <span>分享</span>
                    <span>...</span>
                  </div>
                  <div class="guanzhushuliang">
                    <span class="guanzhushuliang-icon">图</span>
                    <span>0000 关注</span>
                  </div>
                  <div class="pinglun">
                    <span class="pinglunren">评论人名：</span>
                    <span class="pinglunneirong">评论内容</span>
                  </div>
                  <div class="pinglun">
                    <span class="pinglunren">评论人名：</span>
                    <span class="pinglunneirong">评论内容</span>
                  </div>
                  <div class="pinglun">
                    <p>查看全部000评论</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 spacing">
              
            </div>


            <!--推荐内容-->
            <div class="container-fluid recommended-content">
              <div class="row">
                <div class="col-xs-8">
                  <div class="media-left">
                    <img class="media-object touxiang" src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
                  </div>
                  <div class="media-body">
                    <p>用户名</p>
                    <p>所在城市</p>
                  </div>
                </div>
                <div class="col-xs-4">
                  <span class="updatetime">更新时间</span>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row follow-content">
                <div class="col-xs-12">
                  <img class="img-responsive" src="/new_lgx/Public/weixin/new_focus/images/ceshitupian.png">
                  <p>图片或视频的相关介绍配文</p>
                  <div class="guanzhuhou-icons">
                    <span>铃铛</span>
                    <span>评论</span>
                    <span>分享</span>
                    <span>...</span>
                  </div>
                  <div class="guanzhushuliang">
                    <span class="guanzhushuliang-icon">图</span>
                    <span>0000 关注</span>
                  </div>
                  <div class="pinglun">
                    <span class="pinglunren">评论人名：</span>
                    <span class="pinglunneirong">评论内容</span>
                  </div>
                  <div class="pinglun">
                    <span class="pinglunren">评论人名：</span>
                    <span class="pinglunneirong">评论内容</span>
                  </div>
                  <div class="pinglun">
                    <p>查看全部000评论</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 spacing">
              
            </div>


            <!--推荐内容-->
            <div class="container-fluid recommended-content">
              <div class="row">
                <div class="col-xs-8">
                  <div class="media-left">
                    <img class="media-object touxiang" src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
                  </div>
                  <div class="media-body">
                    <p>用户名</p>
                    <p>所在城市</p>
                  </div>
                </div>
                <div class="col-xs-4">
                  <span class="updatetime">更新时间</span>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row follow-content">
                <div class="col-xs-12">
                  <img class="img-responsive" src="/new_lgx/Public/weixin/new_focus/images/ceshitupian.png">
                  <p>图片或视频的相关介绍配文</p>
                  <div class="guanzhuhou-icons">
                    <span>铃铛</span>
                    <span>评论</span>
                    <span>分享</span>
                    <span>...</span>
                  </div>
                  <div class="guanzhushuliang">
                    <span class="guanzhushuliang-icon">图</span>
                    <span>0000 关注</span>
                  </div>
                  <div class="pinglun">
                    <span class="pinglunren">评论人名：</span>
                    <span class="pinglunneirong">评论内容</span>
                  </div>
                  <div class="pinglun">
                    <span class="pinglunren">评论人名：</span>
                    <span class="pinglunneirong">评论内容</span>
                  </div>
                  <div class="pinglun">
                    <p>查看全部000评论</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 spacing">
              
            </div>
          </div>

          <!--模块3风景-->
          <div class="tab-content-item">
            <!--轮播图-->
            <div id="carousel1" class="carousel slide slide-container margin-bottom-8" data-ride="carousel">
              <ol class="carousel-indicators buttons">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
                <li data-target="#carousel1" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="1.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="2.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="3.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="4.jpg">
                </div>
              </div>
            </div>

            <!--轮播图下面的版块-->
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态2</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态2</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态2</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态2</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--模块4健身-->
          <div class="tab-content-item">
            <!--轮播图-->
            <div id="carousel1" class="carousel slide slide-container margin-bottom-8" data-ride="carousel">
              <ol class="carousel-indicators buttons">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
                <li data-target="#carousel1" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="1.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="2.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="3.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="4.jpg">
                </div>
              </div>
            </div>

            <!--轮播图下面的版块-->
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态3</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态3</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态3</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态3</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--模块5美食-->
          <div class="tab-content-item">
            <!--轮播图-->
            <div id="carousel1" class="carousel slide slide-container margin-bottom-8" data-ride="carousel">
              <ol class="carousel-indicators buttons">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
                <li data-target="#carousel1" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="1.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="2.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="3.jpg">
                </div>
                <div class="item">
                  <img src="/new_lgx/Public/weixin/new_focus/images/slide_banner.png" alt="4.jpg">
                </div>
              </div>
            </div>

            <!--轮播图下面的版块-->
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态4</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态4</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-offset-1 col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态4</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/Public/weixin/new_focus/images/user-trends.png" class="img-responsive" alt="推荐网友">
              </div>
              <div class="caption">
                <h5>关注最多人的动态4</h5>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="/new_lgx/Public/weixin/new_focus/images/wangyoutouxiang.png" alt="网友头像" class="media-object margin-top-8">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name">用户名</span>
                      <p>个性签名</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--底部导航-->
    <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3 navbar-bottom-item">
            <a  href="<?php echo U('new_index');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_focus/images/icon/shouye.png"><p>首页</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a  href="<?php echo U('new_faxian');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_focus/images/icon/faxian.png"><p>发现</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a  href="<?php echo U('new_dongtai');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_focus/images/icon/dongtai.png"><p>动态</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a  href="<?php echo U('new_my');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_focus/images/icon/wo.png"><p>我</p></a>
          </div>
        </div>
      </div>
    </nav>


    <!--底部固定滑动-->
    <div class="swiper-container" id="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <span class="shutdown">x</span>
          <img src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
          <p class="margin-top-8">人物名</p>
          <p>人物简介信息</p>
          <span class="follow">+ 关注</span>
        </div>
        <div class="swiper-slide">
          <span class="shutdown">x</span>
          <img src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
          <p class="margin-top-8">人物名</p>
          <p>人物简介信息</p>
          <span class="follow">+ 关注</span>
        </div>
        <div class="swiper-slide">
          <span class="shutdown">x</span>
          <img src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
          <p class="margin-top-8">人物名</p>
          <p>人物简介信息</p>
          <span class="follow">+ 关注</span>
        </div>
        <div class="swiper-slide">
          <span class="shutdown">x</span>
          <img src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
          <p class="margin-top-8">人物名</p>
          <p>人物简介信息</p>
          <span class="follow">+ 关注</span>
        </div>
        <div class="swiper-slide">
          <span class="shutdown">x</span>
          <img src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
          <p class="margin-top-8">人物名</p>
          <p>人物简介信息</p>
          <span class="follow">+ 关注</span>
        </div>
        <div class="swiper-slide">
          <span class="shutdown">x</span>
          <img src="/new_lgx/Public/weixin/new_focus/images/touxiang.png">
          <p class="margin-top-8">人物名</p>
          <p>人物简介信息</p>
          <span class="follow">+ 关注</span>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_focus/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_focus/js/swiper-3.4.2.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_focus/js/guanzhuhou.js"></script>
    <script type="text/javascript">
      

    </script>
  </body>
</html>