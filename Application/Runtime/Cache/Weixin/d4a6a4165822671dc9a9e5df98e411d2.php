<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/new_index/css/bootstrap.min.css?v1.0" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_index/css/swiper-3.4.2.min.css?v1.0" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_index/css/index.css?v1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_s7n5nkjexmg9cnmi.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_18mogr7g839s5rk9.css">
      <link href="/new_lgx/Public/weixin/new_index/css/mui.min.css" rel="stylesheet">
  </head>
  <body>

<style type="text/css">
  .news-content{
    border:0;
  }

</style>
    <div id="anchor">

    </div>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
          
            <iframe width="110" scrolling="no" height="50" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=17&color=%23FF0000&bgc=%23&icon=4&num=1&site=12" style="position:absolute;left:0"> </iframe>
            <h3 style="margin:0">首页</h3>
    <a href="<?php echo U('new_search');?>">
     <i class="icon iconfont icon-chazhao" style="font-size:25px;color:white;position:absolute;right:2%;top:30%"></i>
     </a>
    
          </div>
        </div>
      </div>
    </nav>
 <!--轮播图-->
    <div id="slider1" class="mui-slider" style="height: 150px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
            <img src="/new_lgx/Public/weixin/education/images/1.jpg">
          </a>
        </div>
        <!-- 第一张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Public/weixin/education/images/1.jpg">
          </a>
        </div>
        <!-- 第二张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Public/weixin/education/images/1.jpg">
          </a>
        </div>
        <!-- 第三张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Public/weixin/education/images/1.jpg">
          </a>
        </div>
        <!-- 第四张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Public/weixin/education/images/1.jpg">
          </a>
        </div>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
              <img src="/new_lgx/Public/weixin/education/images/1.jpg">
          </a>
        </div>
      </div>
      <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
      </div>
    </div>
    <!--轮播结束-->
    <!--轮播图-->
    <!--<div id="carousel1" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
      <?php if(is_array($zonghe)): foreach($zonghe as $k=>$v): ?><li data-target="#carousel1" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
      <!--   <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
      <li data-target="#carousel1" data-slide-to="3"></li> -->
      <!--</ol>

      <div class="carousel-inner" role="listbox">
      <?php if(is_array($zonghe)): foreach($zonghe as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
        </div><?php endforeach; endif; ?>-->
      <!--   <div class="item active">
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
      </div> -->
      <!--</div>
    </div>-->

    <!--每日签到-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 sign_bg">
          <a href="<?php echo U('new_sign');?>">每日签到</a>
          <p>今日知识一则或心灵鸡汤一句</p>
        </div>
      </div>
    </div>
<style type="text/css">
  .classify ul li a img{
    width: 45px;
    height: 45px;
  }
  .classify{
    margin-bottom: 15px;
  }
</style>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 classify">
          <ul>
            <li><a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/xinwen.png"><p>新闻</p></a></li>
 <li><a href="<?php echo U('new_guangbo',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/guangbo.png"><p>广播</p></a></li>
           <li><a href="<?php echo U('new_tv',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/icon/tv.png"><p>电视</p></a></li>
            
          
            <li><a href="<?php echo U('new_video_list',array('id'=>$_SESSION['uid']));?>"  data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/shipin.png"><p>视频</p></a></li>
             
               <li><a href="<?php echo U('');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/jiaoyou.png"><p>交友</p></a></li>
               <li><a href="<?php echo U('');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/huodong.png"><p>活动</p></a></li>

              
            
           
          
            
            <li><a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/jiaoyu.png"><p>教育</p></a></li>
            <li><a href="<?php echo U('product',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/shangcheng.png"><p>商城</p></a></li>
            <li><a href="<?php echo U('invest',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/jinrong.png"><p>金融</p></a></li>
             <li><a href="<?php echo U('');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/common/images/gengduo.png"><p>更多</p></a></li>
          </ul>
        </div>
      </div>
    </div>


    <!--轮播图-->
    <!--<div id="carousel2" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
       <?php if(is_array($guangdian)): foreach($guangdian as $k=>$v): ?><li data-target="#carousel2" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
        <!-- <li data-target="#carousel2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel2" data-slide-to="1"></li>
        <li data-target="#carousel2" data-slide-to="2"></li>
        <li data-target="#carousel2" data-slide-to="3"></li> -->
      <!--</ol>

      <div class="carousel-inner" role="listbox">
         <?php if(is_array($guangdian)): foreach($guangdian as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
        </div><?php endforeach; endif; ?>-->
      <!--   <div class="item active">
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
      </div> -->
      <!--</div>
    </div>-->
     <div id="slider1" class="mui-slider"  style="height: 80px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
            <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第一张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第二张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第三张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第四张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
      </div>
      <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
      </div>
    </div>

    <!--今日要闻-->
    <div class="container-fluid">
      <div class="row">
       <a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>" data-ajax="false">
        <div class="col-xs-12 news-title">
          <h3>今日要闻</h3>
          <i></i>
        </div>
        </a>
      </div>
    </div>

    <!--今日要闻内容-->
     
    <div class="container-fluid">
      <div class="row">
      <?php if(is_array($news)): foreach($news as $k=>$v): ?><a href="<?php echo U('new_news_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"> 
        <div class="col-xs-12 news-content" style="padding-bottom:0;<?php if($k!=0) echo 'padding-top:0' ?>">
          <div class="media">
           <?php $re=M('weixin_pic')->where(array('aid'=>$v['id']))->select(); $count=count($re); if($count==3){ ?>
            <div class="media-body news-content-right">
              <p style="font-size:13px"><?php echo ($v["title"]); ?></p>
            
            <?php if(is_array($re)): foreach($re as $key=>$v1): ?><img src="/new_lgx/<?php echo ($v1["pic"]); ?>" style="width:122px;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
    <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
            <?php }else {?>

 <div class="media-body news-content-right">
    <p style="font-size:16px;width:60%;float:left;font-size:13px;"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:122px;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:55%;bottom:18px;position: absolute;">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
             
           <?php }?>

          </div>
        </div>
        </a><?php endforeach; endif; ?>
      </div>
    </div>
 


    <!--轮播图-->
    <!--<div id="carousel3" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><li data-target="#carousel3" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
       <!--  <li data-target="#carousel3" data-slide-to="0" class="active"></li>
       <li data-target="#carousel3" data-slide-to="1"></li>
       <li data-target="#carousel3" data-slide-to="2"></li>
       <li data-target="#carousel3" data-slide-to="3"></li> -->
      <!--</ol>

      <div class="carousel-inner" role="listbox">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
        </div><?php endforeach; endif; ?>-->
       <!--  <div class="item active">
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
       </div> -->
      <!--</div>
    </div>-->
    <div id="slider1" class="mui-slider"  style="height: 80px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
            <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第一张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第二张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第三张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第四张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
      </div>
      <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
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
    <div class="media-body-one">
            <p>您可能感兴趣的人</p>
          </div>


    <!--我们项目的推广轮播图-->
    <!--<div id="carousel3" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><li data-target="#carousel3" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
       <!--  <li data-target="#carousel3" data-slide-to="0" class="active"></li>
       <li data-target="#carousel3" data-slide-to="1"></li>
       <li data-target="#carousel3" data-slide-to="2"></li>
       <li data-target="#carousel3" data-slide-to="3"></li> -->
      <!--</ol>

      <div class="carousel-inner" role="listbox">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
        </div><?php endforeach; endif; ?>-->
       <!--  <div class="item active">
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
       </div> -->
      <!--</div>
    </div>-->
      <div id="slider1" class="mui-slider"  style="height: 80px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
            <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第一张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第二张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第三张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第四张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
      </div>
      <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
      </div>
    </div>
    <!--结束我们的推广轮播图-->
    <!--热门广播预告-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 recommended">
          <h3>广播预告</h3>
        </div>
          <div class="col-xs-12 news-title guanbo">
          <img class="Gtobiao" src="/new_lgx/Public/weixin/common/images/FM.png">
          <h3>播出时间：栏目名称</h3>
          <br>
          <h3>主持人</h3>
          <i></i>
        </div>
         <div class="col-xs-12 news-title guanbo">
          <img class="Gtobiao" src="/new_lgx/Public/weixin/common/images/FM.png">
          <h3>播出时间：栏目名称</h3>
          <br>
          <h3>主持人</h3>
          <i></i>
        </div>
      </div>
    </div>
  <!--结束热门广播预告-->
   <!--综合类推广轮播图-->
    <!--<div id="carousel3" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><li data-target="#carousel3" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
       <!--  <li data-target="#carousel3" data-slide-to="0" class="active"></li>
       <li data-target="#carousel3" data-slide-to="1"></li>
       <li data-target="#carousel3" data-slide-to="2"></li>
       <li data-target="#carousel3" data-slide-to="3"></li> -->
      <!--</ol>

      <div class="carousel-inner" role="listbox">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
        </div><?php endforeach; endif; ?>-->
       <!--  <div class="item active">
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
       </div> -->
      <!--</div>
    </div>-->
     <div id="slider1" class="mui-slider"  style="height: 80px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
            <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第一张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第二张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第三张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第四张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
      </div>
      <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
      </div>
    </div>
    <!--结束综合类推广轮播图-->
    <!--热门电视预告-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 recommended">
          <h3>电视预告</h3>
        </div>
          <div class="col-xs-12 news-title guanbo">
          <p>XX台</p>
          <h3>播出时间：栏目名称</h3>
          <br>
          <h3>主持人/栏目简介</h3>
          <i></i>
        </div>
         <div class="col-xs-12 news-title guanbo">
          <p>XX台</p>
          <h3>播出时间：栏目名称</h3>
          <br>
          <h3>主持人/栏目简介</h3>
          <i></i>
        </div>
      </div>
    </div>
  <!--结束热门电视预告-->
  
  <!--腾讯推广轮播图-->
    <!--<div id="carousel3" class="carousel slide slide-container" data-ride="carousel">
      <ol class="carousel-indicators buttons">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><li data-target="#carousel3" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
       <!--  <li data-target="#carousel3" data-slide-to="0" class="active"></li>
       <li data-target="#carousel3" data-slide-to="1"></li>
       <li data-target="#carousel3" data-slide-to="2"></li>
       <li data-target="#carousel3" data-slide-to="3"></li> -->
      <!--</ol>

      <div class="carousel-inner" role="listbox">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
        </div><?php endforeach; endif; ?>-->
       <!--  <div class="item active">
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
       </div> -->
      <!--</div>
    </div>-->
     <div id="slider1" class="mui-slider"  style="height: 80px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
            <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第一张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第二张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第三张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 第四张 -->
        <div class="mui-slider-item">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
        <div class="mui-slider-item mui-slider-item-duplicate">
          <a href="#">
              <img src="/new_lgx/Uploads/weixin/images/2017-05-10/5912639562ef4.jpg">
          </a>
        </div>
      </div>
      <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
      </div>
    </div>
    <!--结束腾讯活动推广轮播图-->
    
    <!--热门活动-->
    <div class="container-fluid">
      <div class="row">
       <a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>" data-ajax="false">
        <div class="col-xs-12 news-title">
          <h3>热门活动</h3>
          <i></i>
        </div>
        </a>
      </div>
    </div>
    <!--热门活动结束-->
    
     <div class="item">
        <img style="width: 100%; height: 120px;" src="/new_lgx/Public/weixin/new_index/images/slide_banner.png" alt="2.jpg">
      </div>
       <div class="item">
        <img style="width: 100%; height: 120px;" src="/new_lgx/Public/weixin/new_index/images/slide_banner.png" alt="2.jpg">
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
        <div class="swiper-slide"><a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>"><img src="/new_lgx/Public/weixin/new_index/images/education.png"></a></div>
        <div class="swiper-slide"><a href="<?php echo U('invest',array('id'=>$_SESSION['uid']));?>"><img src="/new_lgx/Public/weixin/new_index/images/invest.png"></a></div>
        <div class="swiper-slide"><a href="<?php echo U('medicine',array('id'=>$_SESSION['uid']));?>"><img src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a></div>
        <div class="swiper-slide"><a href="<?php echo U('');?>"><img src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a></div>
        <div class="swiper-slide"><a href="<?php echo U('');?>"><img src="/new_lgx/Public/weixin/new_index/images/video.png"></a></div>
       <!--  <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/video.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/education.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/finance.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/video.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/education.png"></a></div>
       <div class="swiper-slide"><a href="<?php echo U('education');?>"><img src="/new_lgx/Public/weixin/new_index/images/finance.png"></a></div> -->
      </div>
    </div>

    <!--从左侧滑出来的容器-->

    <div class="container-fluid swipe-right-container" id="swipe-right-container">
      <div class="row swipe-right-container-row margin-bottom-8">
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
        </div>
          <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('invest',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/invest.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('medicine',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/video.png"></a>
        </div>
     <!--    <div class="col-xs-4 col-md-4 margin-top-8">
       <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/video.png"></a>
     </div>
     <div class="col-xs-4 col-md-4 margin-top-8">
       <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
     </div>
     <div class="col-xs-4 col-md-4 margin-top-8">
       <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/finance.png"></a>
     </div> -->
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
          <a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('invest',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/invest.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('medicine',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>
        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="<?php echo U('');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/video.png"></a>
        </div>
       <!--  <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/video.png"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/education.png"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/finance.png"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/medicine.png"></a>
       </div>
       <div class="col-xs-4 col-md-4 margin-top-8">
         <a href="<?php echo U('education');?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
       </div> -->
      </div>
    </div>
<style type="text/css">
  .navbar-bottom-item a p{
    margin:0; 
    position: relative;
    top: -3px;
  }
  .navbar-bottom-custom {
    padding-top: 0; 
     border-top: 1px solid #ccc; 
    height: 45px;
    background: white;
    color: #fff;
}
.fixed-bottom-bar{
      height: 30px;
    line-height: 30px;
    text-align: center;
    background: darkblue;
    color: #fff;
    position: fixed;
    left: 0;
    bottom: 50px;
}
.fixed-bottom-slidebox {
    position: fixed;
    left: 0;
    bottom: 50px;
}
.swipe-right-container {
    display: none;
    position: fixed;
    left: 0;
    bottom: 50px;
    z-index: 2;
    background: rgba(0,0,0,0.5);
}
.bottom-click-container {
    /* height: 168px; */
    height: 0;
    position: fixed;
    bottom: 50px;
    left: 0;
    z-index: 3;
    background: rgba(0,0,0,0.5);
}
.slide-right-button {
    width: 50px;
    height: 50px;
    position: fixed;
    right: -50px;
    bottom: 132px;
}
.media-body-one p{
  padding-left: 10px;
}
.guanbo h3{
  font-size: 14px;
}
.guanbo p{
  display: inline-block;
    height: 30px;
    float: left;
    margin: 10px;
    padding: 0px;
    font-size: 12px;
}
.Gtobiao{
  display: inline-block;
    height: 40px;
    float: left;
    margin: 0px;
    padding: 0px;
}
</style>

    <!--底部导航-->
    <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_index',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-zhuye1" style="font-size:25px;color:red" ></i> <p style="color:red;">首页</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_faxian',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-faxian" style="font-size:24px;" ></i> <p>发现</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_dongtai',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-pengyouquan" style="font-size:25px;" ></i><p>动态</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_my',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-wo" style="font-size:25px;" ></i><p>我</p></a>
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
      <script src="/new_lgx/Public/weixin/new_index/js/mui.min.js"></script>
    <script type="text/javascript">
   $(function(){
      $("a").attr('data-ajax','false')
   
   })

    var slider = mui("#slider1");
        slider.slider({
          interval: 2000
        });
</script>

  </body>
</html>