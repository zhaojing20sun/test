<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>新闻</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_tuijian/css/tuijian.css" rel="stylesheet">
     <link rel="stylesheet" href="/new_lgx/Public/common/css/swiper.min.css">
 <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_s7n5nkjexmg9cnmi.css">
 <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_cuy2246m25ku766r.css">
  </head>
  <body>
<style type="text/css">

  
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#fff;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
    margin-right: 13%;
        width: 70%;
       
    }
     .swiper-slide a {
      color:white;
     }
    .swiper-slide{
        text-align: center;
        font-size: 18px;
      opacity: 0.6;
        width: 60px;
        height:50px;
   line-height: 50px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .selected{
  opacity: 1;

  border-bottom: 3px solid white;
}
.selected a{
  color:white;
}
</style>
    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
 <a href="<?php echo U('new_zone',array('wid'=>$_SESSION['wid'],'id'=>$_SESSION['uid']));?>"> <img src="<?php echo M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getfield('headimgurl') ?>" onerror="this.src='/new_lgx/Public/common/images/job_male.jpg'" style="width:35px;border-radius:50%;border:1px solid red;position:absolute;left:2.5%;top:16%"></a>

            <div class="swiper-container">
        <div class="swiper-wrapper" <?php $count=count($nav); if($_GET['num']<3 or $_GET['num']==''){ echo "style='transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);'"; }elseif($_GET['num']+4>$count){ $num=($_GET['num']-2)*72.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; }else{ $num=($_GET['num']+1)*72.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; } ?>

           
        >
         <div class="swiper-slide <?php if($_GET['type']=='') echo 'selected' ?>"><a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>">推荐</a></div>
         <?php if(is_array($nav)): foreach($nav as $k1=>$v1): ?><div class="swiper-slide <?php if($_GET['type']==$v1['id']) echo 'selected' ?> "><a href="<?php echo U('new_news',array('type'=>$v1['id'],'num'=>$k1,'id'=>$_SESSION['uid']));?>"><?php echo ($v1["title"]); ?></a></div><?php endforeach; endif; ?>
        </div>
    </div>
     <!--  <i class="jia"></i> -->
           <a href="<?php echo U('new_baoliao',array('id'=>$_SESSION['wid']));?>"> <i class="icon iconfont icon-bianji" style="font-weight:bold;font-size:20px;color:red;position:absolute;top:24%;right:4%" ></i></a>
          
          </div>
        </div>
      </div>
    </nav>

    <!--轮播图-->
    <div id="carousel1" class="carousel slide slide-container" data-ride="carousel" style="margin-top:50px">
      <ol class="carousel-indicators buttons">
      <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><li data-target="#carousel1" data-slide-to="<?php echo ($k); ?>" <?php if($k==0) echo "class='active'"?> style="margin:2px;"></li><?php endforeach; endif; ?>
        <!-- <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
        <li data-target="#carousel1" data-slide-to="3"></li> -->
      </ol>

      <div class="carousel-inner" role="listbox">
        <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><div class="item <?php if($k==0) echo 'active'?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:200px;">
        </div><?php endforeach; endif; ?>
        <!-- <div class="item active">
          <img src="/new_lgx/Public/weixin/new_tuijian/images/slide_banner.png" alt="1.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_tuijian/images/slide_banner.png" alt="2.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_tuijian/images/slide_banner.png" alt="3.jpg">
        </div>
        <div class="item">
          <img src="/new_lgx/Public/weixin/new_tuijian/images/slide_banner.png" alt="4.jpg">
        </div> -->
      </div>
    </div>

    <!--新闻内容-->
  
    <div class="container-fluid">
      <div class="row">
   
        <?php if(is_array($news)): foreach($news as $k=>$v): ?><a href="<?php echo U('new_news_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"> 
        <div class="col-xs-12 news-content" style="padding-bottom:0;<?php if($k!=0) echo 'padding-top:0' ?>">
          <div class="media">
           <?php $re=M('weixin_pic')->where(array('aid'=>$v['id']))->select(); $count=count($re); if($count==3){ ?>
            <div class="media-body news-content-right">
              <p style="font-size:16px"><?php echo ($v["title"]); ?></p>
            
            <?php if(is_array($re)): foreach($re as $key=>$v2): ?><img src="/new_lgx/<?php echo ($v2["pic"]); ?>" style="width:122px;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail">
            <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>    <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
    <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
            <?php }else {?>

 <div class="media-body news-content-right">
    <p style="font-size:16px;width:65%;float:left"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:122px;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:62%;bottom:18px;position: absolute;">
         <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>        <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
             
           <?php }?>

          </div>
        </div>
        </a><?php endforeach; endif; ?>
       
            </div> 
</div>
<div style="height:100px;"></div>
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
    bottom: 70px;
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
</style>
    <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_index',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-zhuye1" style="font-size:25px;color:red" ></i> <p style="color:red">首页</p></a>
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
  <script src="/new_lgx/Public/common/js/swiper.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_tuijian/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_tuijian/js/tuijian.js"></script>
     <script type="text/javascript">
     var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 4,
        spaceBetween: 0,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            768: {
                slidesPerView:4,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            320: {
                slidesPerView:4,
                spaceBetween: 0
            }
        }
    });
    </script>
  </body>
</html>