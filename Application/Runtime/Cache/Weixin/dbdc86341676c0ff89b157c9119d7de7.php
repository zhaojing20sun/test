<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>新闻</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
         <!-- Bootstrap -->
   <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css?v1.0" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_tuijian/css/tuijian.css?v1.0" rel="stylesheet">
     <link rel="stylesheet" href="/new_lgx/Public/common/css/swiper.min.css?v1.0">
 <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_s7n5nkjexmg9cnmi.css?v1.0">
 <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_cuy2246m25ku766r.css?v1.0">
<link rel="stylesheet" href="/new_lgx/Public/weixin/common/css/pullToRefresh.css"/>
     <script src="/new_lgx/Public/weixin/common/js/iscroll.js"></script>
<script src="/new_lgx/Public/weixin/common/js/pullToRefresh.js"></script>   
<style type="text/css" media="all">

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#fff;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
    margin-right: 16%;
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
.scroller li{
    padding:0;
}
</style>
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
.swiper-pagination-bullet-active {
    opacity: 1;
    background: #fff;
}
</style>
</head>
<body>
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
 <a href="<?php echo U('new_index');?>"><i class="back"></i></a>

            <div class="swiper-container daohang">
        <div class="swiper-wrapper" <?php $count=count($nav); if($_GET['num']<3 or $_GET['num']==''){ echo "style='transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);'"; }elseif($_GET['num']+4>$count){ $num=($_GET['num']-2)*72.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; }else{ $num=($_GET['num']+1)*72.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; } ?>

           
        >
         <div class="swiper-slide <?php if($_GET['type']=='') echo 'selected' ?>"><a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>">推荐</a></div>
          <div class="swiper-slide <?php if($_GET['type']=='catch') echo 'selected' ?>"><a href="<?php echo U('new_news',array('id'=>$_SESSION['uid'],'type'=>'catch'));?>">要闻</a></div>
         <?php if(is_array($nav)): foreach($nav as $k1=>$v1): ?><div class="swiper-slide <?php if($_GET['type']==$v1['id']) echo 'selected' ?> "><a href="<?php echo U('new_news',array('type'=>$v1['id'],'num'=>$k1,'id'=>$_SESSION['uid']));?>"><?php echo ($v1["title"]); ?></a></div><?php endforeach; endif; ?>
        </div>
    </div>
     <!--  <i class="jia"></i> -->
           <!-- <a href="<?php echo U('new_baoliao');?>"> <i class="icon iconfont icon-bianji" style="font-weight:bold;font-size:20px;color:white;position:absolute;top:24%;right:4%" ></i></a>
           -->
           <a href="<?php echo U('new_baoliao');?>">  <img src="/new_lgx/Public/weixin/new_dongtai/images/fabu.png" style="width:24px;position:absolute;top:13px;right:4%"></a>
          </div>
        </div>
      </div>
    </nav>
<!--must content ul li,or shoupi-->
<div id="wrapper" style="margin-top:50px;">
  <ul>
  <!-- 轮播图 -->
   
    
    <li style="">     
    <!--     
          <div class="carousel-inner" role="listbox">
    <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><div class="item <?php?>">
      <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
    </div><?php endforeach; endif; ?>
    <div class="item active">
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
    </div>
          </div>
        <div class=" spacing">
                </div> -->
                <div class="swiper-container lunbo1" style="width:100%;height:150px;">
      
        <div class="swiper-wrapper">
            
           
           <?php if(is_array($pic)): foreach($pic as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:150px;opacity:1"> 
          <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
            </div><?php endforeach; endif; ?>
       
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination" style="text-align:right"></div>
      
    </div>
  </li>
   
 



    <li style="margin-bottom:50px;">
   
    <div class="container-fluid">
      <div class="row">
   
        <?php if(is_array($news)): foreach($news as $k=>$v): if($_GET['type']=='catch'){ ?>
         <a href="<?php echo U('new_news_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid'],'type'=>$_GET['type']));?>"> 
          
           <?php }else{ ?>
           <a href="<?php echo U('new_news_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"> 
          <?php }?>
        <div class="col-xs-12 news-content" style="padding-bottom:0;<?php if($k!=0) echo 'padding-top:0' ?>">
          <div class="media">
           <?php $re=M('weixin_pic')->where(array('aid'=>$v['id']))->select(); $count=count($re); if($count==3){ ?>
            <div class="media-body news-content-right" style="">
              <p style="font-size:14px"><?php echo ($v["title"]); ?></p>
            
            <?php if(is_array($re)): foreach($re as $key=>$v2): ?><img src="/new_lgx/<?php echo ($v2["pic"]); ?>" style="width:31%;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail" style="margin-top:10px;">
            <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>    <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:20%;color:#ccc"><?php echo mb_strlen($v['source'],'utf-8')>10?mb_substr($v['source'],0,10,'utf-8'):$v['source'] ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
    <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
            <?php }elseif($count>0) {?>

 <div class="media-body news-content-right">
    <p style="font-size:14px;width:60%;float:left"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:122px;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:55%;bottom:18px;position: absolute;">
         <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>        <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
               
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
            <?php }elseif($count==0) {?> 
            <div class="media-body news-content-right">
    <p style="font-size:14px;width:100%;"><?php echo mb_strlen($v['title'],'utf-8')>50?mb_substr($v['title'],0,50,'utf-8').'...':$v['title'] ?></p>
  
      <div class="news-content-right-detail" style="width:100%;position:relative;height:22px;line-height:22px;margin-top:10px;text-align:center;">
         <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>        <span style="color:#ccc;position:absolute;left:0"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:5%;color:#ccc"><?php echo mb_strlen($v['source'],'utf-8')>10?mb_substr($v['source'],0,10,'utf-8'):$v['source'] ?></span>
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
    </li>
    






  </ul>
</div>

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




   <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_dongtai/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_dongtai/js/dongtai02.js"></script>
     <script src="/new_lgx/Public/common/js/swiper.min.js"></script>
<script>

refresher.init({
    id:"wrapper",//<------------------------------------------------------------------------------------┐
    pullDownAction:Refresh                                              
    });                                                                                     
 var generatedCount = 0;                                                                  
function Refresh() {                                                                
    setTimeout(function () {    
        location.reload()
    
    },100);

}
$(".pullUp").remove()
</script>
     <script type="text/javascript">
     var swiper = new Swiper('.daohang', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 4,
        spaceBetween: 0,
        breakpoints: {
            1024: {
                slidesPerView: 4.5,
                spaceBetween: 0
            },
            768: {
                slidesPerView:4.5,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 4.5,
                spaceBetween: 0
            },
            320: {
                slidesPerView:4.5,
                spaceBetween: 0
            }
        }
    });
        var swiper1 = new Swiper('.lunbo1', {
        pagination: '.swiper-pagination',
        loop : true,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
    });
    </script>
<!-- <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
</div> -->
</body>
</html>