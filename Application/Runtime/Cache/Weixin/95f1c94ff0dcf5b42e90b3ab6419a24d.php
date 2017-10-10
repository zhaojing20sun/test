<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>电视</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_tv/css/dianshi.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/weixin/list/css/swiper-3.4.2.min.css">
  </head>
  <body>
<style type="text/css">
  
  a{
    color:#000;
  }
  a:hover,
a:focus {
  color: #000;
  text-decoration: none;
}
  .swiper-container {
   margin-left: 13%;
        width: 72%;
       
    }
     .swiper-slide a {
      color:white;
     }
    
    .swiper-slide{
        text-align: center;
        font-size: 16px;
      opacity: 0.6;
        width: 80px;
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
      
      
    }
    .active_li{
  opacity: 1;

  border-bottom: 3px solid white;
}
.nav-container .back {
    display: inline-block;
    width: 16px;
    height: 16px;
   
    left: 18px;
    bottom: 17px;
   
    text-indent: -9999px;
}
.nav-container .search {
    display: inline-block;
    width: 18px;
    height: 18px;
   right:18px;
    bottom: 16px;
  
}
</style>

    <div class="tab-container">
      <div id="box">
        <!--顶部导航，tab选项卡-->
        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 nav-container">
               <a href="<?php echo U('new_index');?>">  <i class="back"></i></a>
             
<div class="swiper-container" style="position:fixed;z-index:99">
        <div class="swiper-wrapper" <?php  $count=count($column); if($_GET['num']<2 or $_GET['num']==''){ echo "style='transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);'"; }elseif($_GET['num']+4>$count){ $num=($_GET['num']-2)*79.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; }else{ $num=($_GET['num']+1)*62.5; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; } ?>>
            <div class="swiper-slide <?php if($_GET['vid']=='') echo 'active_li'?>"><a href="<?php echo U('new_tv');?>">推荐</a></div>
              <?php if(is_array($column)): foreach($column as $k=>$v): ?><div   class="swiper-slide <?php if($_GET['vid']==$v['id']) echo 'active_li'?>"><a href="<?php echo U('new_tv',array('vid'=>$v['id'],'num'=>$k));?>"><?php echo ($v["title"]); ?></a></div><?php endforeach; endif; ?>
           
           
        </div>
    </div>


                <i class="search">搜索</i>
              </div>
            </div>
          </div>
        </nav>
        <!--模块-->
        <div class="tab-content">
          <!--模块1-->
          <div class="tab-content-item" style="display: block;">
           <?php if(is_array($video)): foreach($video as $key=>$v): ?><div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 items">
                  <div class="media">
                    <div class="media-left">
                    <a href="<?php echo U('new_video_detial',array('nid'=>$v['id'],'type'=>'show','id'=>$_SESSION['uid']));?>">  <img src="/new_lgx/<?php echo ($v["logo"]); ?>" class="media-object" style="width:50px;height:50px"></a>
                    </div>
                    <div class="media-body" style="padding-top:8px;">
                   <a href="<?php echo U('new_video_detial',array('nid'=>$v['id'],'type'=>'show','id'=>$_SESSION['uid']));?>">    <h4><?php echo ($v["title"]); ?></h4></a>
                      <span>00:00</span><span>现时播出的节目名</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><?php endforeach; endif; ?>
          </div>
          
          
         
        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_tv/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_tv/js/dianshi.js"></script>

<script src="/new_lgx/Public/weixin/product/js/swiper-3.4.2.min.js"></script>
<script>
$(function(){
    var mySwiper = new Swiper('.swiper-container',{
    slidesPerView:3.5,
    spaceBetween:5
  })

})

</script>
  
  </body>
</html>