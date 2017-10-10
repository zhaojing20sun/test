<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html>
<head>
<title>动态</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
         <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css?v1.0" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_dongtai/css/dongtai02.css?v1.0" rel="stylesheet">
      <link rel="stylesheet" href="/new_lgx/Public/common/css/swiper.min.css?v1.0">

       <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_ilv0dcvq48nz5mi.css">
<link href="/new_lgx/Public/weixin/new_index/css/mui.min.css" rel="stylesheet">
<link rel="stylesheet" href="/new_lgx/Public/weixin/common/css/pullToRefresh.css"/>
     <script src="/new_lgx/Public/weixin/common/js/iscroll.js"></script>
<script src="/new_lgx/Public/weixin/common/js/pullToRefresh.js"></script>   
<style type="text/css" media="all">
body, html {
    padding: 0;
    margin: 0;
    height: 100%;
    font-family: Arial, Microsoft YaHei;
    color: #111;
    background: white;
}
 .navbar-bottom-item {
    display: inline-block;
    width: 24%;
    margin-top: 8px;
    text-align: center;
}
#box .tab-content .tab-content-item{
  margin-bottom:120px;
  }
  li {
    /*border-bottom: 1px #CCC solid;*/
    text-align: left;
  
}
  .col-xs-6 h4{
    min-width: 90px;
  }
  .spacing {
    height: 16px;
    background: #e5e5e5;
}
a{
  color: #666;
}

  a:link { 
 color: #666;
text-decoration: none; 
} 
a:visited { 
color: #666;
text-decoration: none; 
} 
a:hover { 
 color: #666;
text-decoration: none; 
} 

.media-body{
  padding-top: 2%
}
.media-body p{
  font-size: 13px;
  padding-left: 2%;
}
  .swiper-container {
    margin-right: 17%;
        width: 70%;
       
    }
     .swiper-slide a {
      color:#fff;
     }
    .swiper-slide{
        text-align: center;
        font-size: 18px;
      opacity: 0.5;
        width: 60px;
        height:50px;
   
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
  border-bottom: 4px solid #fff;
}
 .new_div{
     display: inline-block;
     width: 49%;
  }
  .new_left{

  }
  .new_content{
    padding:5% 0;
  }
  .new_right{
    margin-left: 2%;
   
  }
  .touxiang{
    width: 50px;
    border-radius: 50%;
  }
  .follow{
    height:25px;
    line-height: 24px;
    font-size: 15px;
    width: 60px;
        border: 1px solid green;
        background:green;
        color:white;
        border-radius: 20px;
  }
  .col-xs-4{
    text-align: center;
  }

.am-share { font-size: 14px; border-radius: 0; bottom: 0; left: 0; position: fixed; text-align: center; -webkit-transform: translateY(100%); -ms-transform: translateY(100%); transform: translateY(100%); -webkit-transition: -webkit-transform 300ms; transition: transform 300ms ; width: 100%; z-index: 1110; }
.am-modal-active { transform: translateY(0px);  -webkit-transform: translateY(0); -ms-transform: translateY(0); transform: translateY(0) }
.am-modal-out { z-index: 1109; -webkit-transform: translateY(100%); -ms-transform: translateY(100%); transform: translateY(100%) }

.am-share-title { background-color: #f8f8f8; border-bottom: 1px solid #fff; border-top-left-radius: 2px; border-top-right-radius: 2px; color: #555; font-weight: 400; margin: 0 10px; padding: 10px 0 0; text-align: center; }
.am-share-title::after { border-bottom: 1px solid #dfdfdf; content: ""; display: block; height: 0; margin-top: 10px; width: 100%; }

.am-share-footer { margin: 10px; }
.am-share-footer .share_btn { color: #555;  display: block; width: 100%; background-color: #e6e6e6; border: 1px solid #e6e6e6; border-radius: 0; cursor: pointer;  font-size: 16px; font-weight: 400; line-height: 1.2; padding: 0.625em 0; text-align: center; transition: background-color 300ms ease-out 0s, border-color 300ms ease-out 0s; vertical-align: middle; white-space: nowrap;font-family:"微软雅黑";  }

.am-share-sns {padding-left: 0; background-color: #f8f8f8; border-radius: 0 0 2px 2px; margin: 0 10px; padding-top: 15px; height:auto; zoom:1; overflow:auto; }

.am-share-sns li { margin-bottom: 15px; display: block; float: left; height: auto;  width: 25%; }

.am-share-sns a { color: #555; display: block; text-decoration:none; }
.am-share-sns span { display: block; }

.am-share-sns li i { background-position: center 50%; background-repeat: no-repeat; background-size: 36px 36px; background-color: #ccc; color: #fff; display: inline-block; font-size: 18px; height: 36px; line-height: 36px; margin-bottom: 5px; width: 36px; }
.am-share-sns .share-icon-weibo { background-image: url(); }

.sharebg { background-color: rgba(0, 0, 0, 0.6); bottom: 0; height: 100%; left: 0; opacity: 0; position: fixed; right: 0; top: 0; width: 100%; z-index: 1100; display:none; }
.sharebg-active { opacity: 1; display:block; }
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
.pinglun img{
  width:22px;
  height: 22px;
}
.contentimg img{
  width:22px;
  height: 22px;
}
.new_content a span img{
    width:17px;
  height: 17px;
}
</style>
</head>
<body>
   <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xs-12 nav-container">
              <a href="<?php echo U('new_addfriend');?>">  <img src="/new_lgx/Public/weixin/new_dongtai/images/tianjia.png" style="width:25px;float:left;margin-top:3.2%;margin-left:4%"></a>
                <div class="swiper-container banner">
        <div class="swiper-wrapper" <?php $count=count($nav); if($_GET['num']==0 or $_GET['num']==''){ echo "style='transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);'"; }elseif($_GET['num']+4>$count ){ $num=($_GET['num']+1)*48; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; }else{ $num=($_GET['num']+1)*50; echo "style='transition-duration: 0ms; transform: translate3d(".-$num."px, 0px, 0px);'"; } ?>

           
        >
          <div class="swiper-slide <?php if($_GET['type']=='' and $_GET['wid']=='') echo 'selected' ?>"><a href="<?php echo U('new_dongtai',array('id'=>$_SESSION['uid']));?>">热门</a></div>
          <div class="swiper-slide <?php if($_GET['type']=='0' and $_GET['wid']=='') echo 'selected' ?>"><a href="<?php echo U('new_dongtai',array('id'=>$_SESSION['uid'],'type'=>'0'));?>">微聊</a></div>
          <div class="swiper-slide <?php if($_GET['wid']!='') echo 'selected' ?>"><a href="<?php echo U('new_dongtai',array('wid'=>$_SESSION['wid'],'id'=>$_SESSION['uid']));?>">关注</a></div>  
         <?php if(is_array($nav)): foreach($nav as $k1=>$v1): if($v1['title']!='热门' and $v1['title']!='关注'){ ?>
              <div class="swiper-slide <?php if($_GET['type']==$v1['id'] ){ echo 'selected';}elseif ($k1==0 and $_GET['type']==$v1['id']) { echo 'selected'; } ?> "><a href="<?php echo U('new_dongtai',array('type'=>$v1['id'],'num'=>$k1,'id'=>$_SESSION['uid']));?>"><?php echo ($v1["title"]); ?></a></div>
           <?php } endforeach; endif; ?>
        </div>
    </div>
             <a href="<?php echo U('new_write',array('type'=>$_GET['type']));?>">  <img src="/new_lgx/Public/weixin/new_dongtai/images/fabu.png" style="width:24px;position:absolute;top:13px;right:4%"></a>
              </div>
            </div>
          </div>
        </nav>
<!--must content ul li,or shoupi-->
 
<div id="wrapper" style="margin-top:50px;">
 <?php if(!$dongtai){ ?>
 <div style="text-align:center; padding:15px 0;"> <img src="/new_lgx/Public/common/images/arclist/1.gif"> 暂无用户发布动态！ </div>
  <?php }else{ ?>
  <ul>
  <!-- 轮播图 -->
   
    <?php if($_GET['wid']=='' and $_GET['type']!='0'){ ?>
    <li style="">     
         
             <!--轮播图-->
    <div id="slider" class="mui-slider" style="height: 150px;">
      <div class="mui-slider-group mui-slider-loop">
        <!-- 额外增加的一个节点(循环轮播：第一个节点是最后一张轮播) -->
        <?php $count=count($huodong)-1; ?>
           <div class="mui-slider-item mui-slider-item-duplicate">
              <?php if($huodong[$count]['url']!=''){ ?>
         <a href="<?php echo $huodong[$count]['url'] ?>">
          <img src="/new_lgx/<?php echo ($huodong[$count]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($huodong[$count]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
         
        </div>
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="mui-slider-item">
           <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
        </div><?php endforeach; endif; ?>
        <!-- 额外增加的一个节点(循环轮播：最后一个节点是第一张轮播) -->
          <div class="mui-slider-item mui-slider-item-duplicate">
               <?php if($huodong[0]['url']!=''){ ?>
         <a href="<?php echo $huodong[0]['url'] ?>">
          <img src="/new_lgx/<?php echo ($huodong[0]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($huodong[0]["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:150px;">
         <?php } ?>
          
        </div>
      </div>
      <div class="mui-slider-indicator">
       <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="mui-indicator  <?php if($k==0) echo "mui-active"?>"></div><?php endforeach; endif; ?>
      </div>
    </div>
    <!--轮播结束-->
            
  </li>
      <?php } ?>




    <li style="margin-bottom:50px;">
     <!-- 微聊的页面 -->
    <?php if($_GET['type']=='0'){ ?>

    <!-- 导航关注的页面 -->
    <div style="padding:0 2%" >
            

           
            <?php if(is_array($dongtai)): foreach($dongtai as $k4=>$v4): ?><!--有关注人时 -->
<div class="container-fluid recommended-conten1t" style="margin-top:10px;padding-left:0;">
  <div class="row">
       <a href="<?php echo U('new_zone',array('wid'=>$v4['wid']));?>">
                <div class="col-xs-8">
                  <div class="media-left" style="padding-right:0;">
                    <img class="media-object touxiang" src="<?php echo M('weixin_man')->where(array('id'=>$v4['wid']))->getfield('headimgurl') ?>" style="width:35px;height:35px;border-radius:50%;margin-left:10px;">
                  </div>
                  <div class="media-body" style="line-height:40px;padding:0;">
                    <p style="margin:0;font-size:14px;padding-left:5%"><?php echo M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v4['wid']))->getfield('nickname') ?></p>
                  
                  </div>
                </div>
        </a>
     <div class="col-xs-4" style="line-height:40px;font-size:13px;color:gray;text-align:right;margin-top:1%;">
                  <span class="updatetime"><?php $time=time()-$v4['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
              
     </div>
<style type="text/css">
 .img-responsive{display: inline-block;}
</style>
        <div class="container-fluid" style="">
              <div class="row follow-content">
            
  
              <div class="col-xs-12">
              <a href="<?php echo U('new_release',array('nid'=>$v4['id'],'id'=>$_SESSION['uid']));?>">
              <div style="width:100%;height:auto;text-align:center;position:relative">
              <?php $img=M('weixin_release_pic')->where(array('aid'=>$v4['id']))->select(); foreach($img as $key=>$value){ ?>
                 <img class="img-responsive" src="/new_lgx<?php echo ($value["showpic"]); ?>" style="max-height:100%;max-width:100%;<?php if($key!=0) echo 'display:none' ?>"  >
                 <?php } ?>
                 </div>
                
                <span class="contentimg" style="margin-top:5px;font-size:13px;display:inline-block;height:40px;overflow:hidden"><?php  echo htmlspecialchars_decode($v4['content']); ?></span>

                 </a>
                 <div class="guanzhuhou-icons" style="padding:0 3px;">
                   <span style="margin-right:15px;"> 
                   <i class="icon iconfont icon-dianzan zan1 zan11"  style="font-size:18px;<?php
 $like=M('weixin_release_message')->where(array('aid'=>$v4['id'],'wid'=>$_GET['wid'],'type'=>2))->getfield('like'); if($like=='1') echo 'display:none' ?>"></i> 
   <i class="icon iconfont icon-dianzan1 zan2" style="font-size:18px;color:red;<?php if($like=='2' or $like=='') echo 'display:none' ?>"></i>   </span>
                   <input type="hidden" value="<?php echo ($v4["id"]); ?>">
                   <span style="margin-right:15px;"> <i class="icon iconfont icon-ttpodicon xin1"  style="font-size:18px;<?php
 $xin=M('weixin_release_message')->where(array('aid'=>$v4['id'],'wid'=>$_GET['wid'],'type'=>3))->getfield('xin'); if($xin=='1') echo 'display:none' ?>"></i> 
<i class="icon iconfont icon-dianzanhongxincaise xin2"  style="font-size:17px;color:red;position:relative;bottom: -1px;<?php if($xin=='2' or $xin=='') echo 'display:none' ?>"></i>
                   </span>
                   <span style="margin-right:15px;"><i class="icon iconfont icon-fenxiang" style="font-size:22px;position:relative;bottom: -1px;" onclick="toshare()"></i></span>
                  
                 </div>
                
       <a href="<?php echo U('new_release',array('nid'=>$v4['id'],'id'=>$_SESSION['uid']));?>">
                 <div class="guanzhushuliang" style="margin:5px 0;font-size:13px;color:#666;background:#E0E0E0;padding:0 3px;">
                 <?php $re3=M('weixin_release_message')->where(array('aid'=>$v4['id'],'type'=>2,'like'=>1))->order('addtime desc')->limit('30')->select(); $count10=count($re3); ?>
                 <div style="<?php if($count10==0) echo 'display:none' ?>" class="guanzhua">
                  <i class="icon iconfont icon-dianzan zan1"  style="font-size:18px;"></i>
                   <span class="num"><?php  if($count10>10000){ echo round($count10/10000,1).'w'; }else{ echo $count10; } ?></span>
                   <?php if(is_array($re3)): foreach($re3 as $k10=>$v10): ?><span style="color:#6495ED;margin-left:2px;" class="<?php echo ($v10["wid"]); ?>">
                        
                        <?php  echo M('weixin_mydata')->where(array('wid'=>$v10['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v10['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v10['wid']))->getfield('nickname') ?>
                        <?php if($k10+1<$count10) echo '<span style="color:#000">,</span>' ?>
                      </span><?php endforeach; endif; ?>
             </div> 
       
                     <?php  $liuyan=M('weixin_release_message')->where(array('aid'=>$v4['id'],'type'=>1))->order('addtime desc')->select(); $count11=count($liuyan); if($count11>6){ $shu=6; }else{ $shu=$count11; } if($liuyan){ if($count10>0){ echo '<hr style="color:#C4C4C4;margin:2px 0;border-top: 1px solid #C4C4C4;" >'; } foreach ($liuyan as $key => $value) { if($shu>$key){ ?>
               <div class="pinglun" style="color:#666;margin:0px 0;padding:2px 0;">
               <?php if($value['rwid']>0){ ?>
                
                  <a href="<?php echo U('new_zone',array('wid'=>$value['wid']));?>" style="color:#6495ED"> <span class="pinglunren"><?php echo M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$value['wid']))->getfield('nickname') ?></span></a>

                   <span style="fonte-size:13px;">回复</span>

                    <a href="<?php echo U('new_zone',array('wid'=>$value['rwid']));?>" style="color:#6495ED"> <span class="pinglunren"><?php  $rwid=M('weixin_release_message')->where(array('id'=>$value['rwid']))->getfield('wid'); echo M('weixin_mydata')->where(array('wid'=>$rwid))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$rwid))->getfield('nickname'):M('weixin_man')->where(array('id'=>$rwid))->getfield('nickname'); ?></span></a>:
                   <span class="pinglunneirong"><?php echo (htmlspecialchars_decode($value["content"])); ?></span>
                    
                 <?php }else{ ?>
             
                  <a href="<?php echo U('new_zone',array('wid'=>$value['wid']));?>" style="color:#6495ED"> <span class="pinglunren"><?php echo M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$value['wid']))->getfield('nickname') ?></span></a>:
                   <span class="pinglunneirong"><?php echo (htmlspecialchars_decode($value["content"])); ?></span>
                
                  <?php } ?>
                  </div>
                 <?php
 } } ?>
                <?php if($shu==6){ ?>
                <hr style="color:#C4C4C4;margin:2px 0;border-top: 1px solid #C4C4C4;">
                 <div class="pinglun" style="color:gray;padding:1px 0;">
                 <a href="<?php echo U('new_release',array('nid'=>$v4['id'],'id'=>$_SESSION['uid']));?>">     <p style="margin:0">查看全部<?php echo M('weixin_release_message')->where(array('aid'=>$v4['id'],'type'=>1))->count(); ?>条评论</p>
                 </a>
                 </div>
                 <?php
 } } ?>

                 </div>

                </a>


               </div>


              </div>


            </div>
             <div class="col-xs-12 spacing" style="height:2px;float:none;margin-left:1.8%;padding:0;margin-top:5px;margin-bottom:5px;">
              
            </div>
        
  </div>
</div><?php endforeach; endif; ?> 
    </div><!-- 导航关注的页面end -->


    <!-- 导航关注以外的页面 -->
     <?php }elseif($_GET['wid']==''){ ?>

  <div style="padding:2%;height:auto;width:100%;text-align:left;background-color:#fff" >
           <?php if(is_array($dongtai)): foreach($dongtai as $k3=>$v3): ?><div class="new_div <?php if($k3%2==0){ echo 'new_left' ;}else{ echo 'new_right'; }?>">
              <a href="<?php echo U('new_release',array('nid'=>$v3['id'],'id'=>$_SESSION['uid']));?>">
           <img src="<?php $re=M('weixin_release_pic')->where(array('aid'=>$v3['id']))->select(); echo '/new_lgx'.$re[0]['showpic'] ?>" style="width:100%;height:200px;"> 
             
             <div class="new_content">
                 <span style="font-size:13px;display:inline-block;height:40px;overflow:hidden"><?php  echo htmlspecialchars_decode($v3['content']); ?></span>
                
                  </a>
              <a href="<?php echo U('new_zone',array('wid'=>$v3['wid']));?>">
               <p style="margin-top:5%"><img src="<?php echo M('weixin_man')->where(array('id'=>$v3['wid']))->getfield('headimgurl') ?>" style="width:25px;border-radius:50%">&nbsp;
               <span style="font-size:12px;color:gray;width:45%;height:16px;display:inline-block;overflow-x:hidden">
               <?php echo M('weixin_mydata')->where(array('wid'=>$v3['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v3['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v3['wid']))->getfield('nickname') ?>
               </span>  
               <span style="margin-right:2%;font-size:12px;line-height:27px;float:right;color:gray" ><?php if($v3['view']>=10000){ echo round($v3['view']/10000,1).'w';}else{ echo $v3['view']; } ?></span>
                <i class="icon iconfont icon-liulan" style="margin-right:2%;font-size:12px;line-height:27px;float:right;color:gray" ></i></p>
                </a>
             </div>
             </div><?php endforeach; endif; ?>
     </div>

    <?php }else{ ?>
     <!-- 导航关注的页面 -->
    <div style="padding:0 2%" >
                <!--推荐标题-->
                    <?php if(!$arr){ ?>
                        <div class="container-fluid recommend">
                          <div class="row">
                            <div class="col-xs-6">
                              <h4>推荐用户</h4>
                            </div>
                            <div class="col-xs-6 text-align-right">
                              <h4 id="change">换一批</h4>
                            </div>
                          </div>
                        </div>
                    <?php } ?>

           
            <?php if(is_array($dongtai)): foreach($dongtai as $k4=>$v4): ?><!--无关注人时-->
            <?php if(!$arr){ ?>      

             <div class="container-fluid recommended-content">
              <div class="row">
              <a href="<?php echo U('new_zone',array('wid'=>$v4['wid']));?>">
                <div class="col-xs-8" style="width:81%;">
                  <div class="media-left" style="padding-right:3px;">
                    <img style="width:40px;height:40px;border-radius:50%" class="media-object touxiang" src="<?php echo M('weixin_man')->where(array('id'=>$v4['wid']))->getfield('headimgurl') ?>">
                  </div>
                  <div class="media-body">
                    <p style="margin:0"><?php echo M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v4['wid']))->getfield('nickname') ?></p>
                    <p style="color:gray"><?php $sign=M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('sign'); if($sign==''){ ?>暂无个性签名<?php }else{ if(mb_strlen($sign,'utf-8')>25){ echo mb_substr($sign,0,23,'utf-8' ).'...'; }else{ echo $sign;} } ?></p>
                  </div>
                </div>
             </a>
                <div class="col-xs-4" style="width:15%;padding:0;right:0">
                  <span class="follow guanzhu">关注</span>
                  <input type="hidden" value="<?php echo ($v4["wid"]); ?>">
                </div>
              </div>
            </div>

            <div class="container-fluid" style="padding:2% 1%;">
              <div class="row follow-content" style="margin:0;padding:0;">
              <?php $re1=M('weixin_release_pic')->where(array('wid'=>$v4['wid']))->order('id desc')->limit('3')->select(); ?>
              <?php if(is_array($re1)): foreach($re1 as $key=>$v5): ?><div class="col-xs-4 padding-0 padding-right-8" style="padding:0;padding-left:2px;">
                  <img class="img-responsive" src="/new_lgx<?php echo ($v5["showpic"]); ?>" style="width:120px;height:120px;">
                </div><?php endforeach; endif; ?>
              </div>
            </div>
            <hr style="border:1px solid #ccc;opacity:0.5;margin:14px 0">
            <!--无关注人时结束 -->
            <?php }else{ ?>    
         
              <!--有关注人时 -->
<div class="container-fluid recommended-content" style="margin-top:10px;padding-left:0;">
  <div class="row">
       <a href="<?php echo U('new_zone',array('wid'=>$v4['wid']));?>">
                <div class="col-xs-8">
                  <div class="media-left" style="padding-right:0;">
                    <img class="media-object touxiang" src="<?php echo M('weixin_man')->where(array('id'=>$v4['wid']))->getfield('headimgurl') ?>" style="width:35px;height:35px;border-radius:50%;margin-left:10px;">
                  </div>
                  <div class="media-body" style="line-height:40px;padding:0;">
                    <p style="margin:0;font-size:14px;padding-left:5%"><?php echo M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v4['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v4['wid']))->getfield('nickname') ?></p>
                  
                  </div>
                </div>
        </a>
     <div class="col-xs-4" style="line-height:40px;font-size:13px;color:gray;text-align:right;margin-top:1%;">
                  <span class="updatetime"><?php $time=time()-$v4['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
              
     </div>

        <div class="container-fluid" style="">
              <div class="row follow-content">
            
  
              <div class="col-xs-12">
              <a href="<?php echo U('new_release',array('nid'=>$v4['id'],'id'=>$_SESSION['uid']));?>">
              <div style="width:100%;max-height:200px;">
              <?php $img=M('weixin_release_pic')->where(array('aid'=>$v4['id']))->select(); foreach($img as $key=>$value){ ?>
                 <img class="img-responsive" src="/new_lgx<?php echo ($value["showpic"]); ?>" style="height:200px;width:100%;<?php if($key!=0) echo 'display:none' ?>"  >
                 <?php } ?>
                 </div>
                
                <span class="contentimg" style="margin-top:5px;font-size:13px;display:inline-block;height:40px;overflow:hidden"><?php  echo htmlspecialchars_decode($v4['content']); ?></span>

                 </a>
                 <div class="guanzhuhou-icons" style="padding:0 3px;">
                   <span style="margin-right:15px;"> 
                   <i class="icon iconfont icon-dianzan zan1 zan11"  style="font-size:18px;<?php
 $like=M('weixin_release_message')->where(array('aid'=>$v4['id'],'wid'=>$_GET['wid'],'type'=>2))->getfield('like'); if($like=='1') echo 'display:none' ?>"></i> 
   <i class="icon iconfont icon-dianzan1 zan2" style="font-size:18px;color:red;<?php if($like=='2' or $like=='') echo 'display:none' ?>"></i>   </span>
                   <input type="hidden" value="<?php echo ($v4["id"]); ?>">
                   <span style="margin-right:15px;"> <i class="icon iconfont icon-ttpodicon xin1"  style="font-size:18px;<?php
 $xin=M('weixin_release_message')->where(array('aid'=>$v4['id'],'wid'=>$_GET['wid'],'type'=>3))->getfield('xin'); if($xin=='1') echo 'display:none' ?>"></i> 
<i class="icon iconfont icon-dianzanhongxincaise xin2"  style="font-size:17px;color:red;position:relative;bottom: -1px;<?php if($xin=='2' or $xin=='') echo 'display:none' ?>"></i>
                   </span>
                   <span style="margin-right:15px;"><i class="icon iconfont icon-fenxiang" style="font-size:22px;position:relative;bottom: -1px;" onclick="toshare()"></i></span>
                  
                 </div>
                
       <a href="<?php echo U('new_release',array('nid'=>$v4['id'],'id'=>$_SESSION['uid']));?>">
                 <div class="guanzhushuliang" style="margin:5px 0;font-size:13px;color:#666;background:#E0E0E0;padding:0 3px;">
                 <?php $re3=M('weixin_release_message')->where(array('aid'=>$v4['id'],'type'=>2,'like'=>1))->order('addtime desc')->limit('30')->select(); $count10=count($re3); ?>
                 <div style="<?php if($count10==0) echo 'display:none' ?>" class="guanzhua">
                  <i class="icon iconfont icon-dianzan zan1"  style="font-size:18px;"></i>
                   <span class="num"><?php  if($count10>10000){ echo round($count10/10000,1).'w'; }else{ echo $count10; } ?></span>
                   <?php if(is_array($re3)): foreach($re3 as $k10=>$v10): ?><span style="color:#6495ED;margin-left:2px;" class="<?php echo ($v10["wid"]); ?>">
                        
                        <?php  echo M('weixin_mydata')->where(array('wid'=>$v10['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v10['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v10['wid']))->getfield('nickname') ?>
                        <?php if($k10+1<$count10) echo '<span style="color:#000">,</span>' ?>
                      </span><?php endforeach; endif; ?>
             </div> 
       
                     <?php  $liuyan=M('weixin_release_message')->where(array('aid'=>$v4['id'],'type'=>1))->order('addtime desc')->select(); $count11=count($liuyan); if($count11>6){ $shu=6; }else{ $shu=$count11; } if($liuyan){ if($count10>0){ echo '<hr style="color:#C4C4C4;margin:2px 0;border-top: 1px solid #C4C4C4;" >'; } foreach ($liuyan as $key => $value) { if($shu>$key){ ?>
               <div class="pinglun" style="color:#666;margin:0px 0;padding:2px 0;">
               <?php if($value['rwid']>0){ ?>
                
                  <a href="<?php echo U('new_zone',array('wid'=>$value['wid']));?>" style="color:#6495ED"> <span class="pinglunren"><?php echo M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$value['wid']))->getfield('nickname') ?></span></a>

                   <span style="fonte-size:13px;">回复</span>

                    <a href="<?php echo U('new_zone',array('wid'=>$value['rwid']));?>" style="color:#6495ED"> <span class="pinglunren"><?php  $rwid=M('weixin_release_message')->where(array('id'=>$value['rwid']))->getfield('wid'); echo M('weixin_mydata')->where(array('wid'=>$rwid))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$rwid))->getfield('nickname'):M('weixin_man')->where(array('id'=>$rwid))->getfield('nickname'); ?></span></a>:
                   <span class="pinglunneirong"><?php echo (htmlspecialchars_decode($value["content"])); ?></span>
                    
                 <?php }else{ ?>
             
                  <a href="<?php echo U('new_zone',array('wid'=>$value['wid']));?>" style="color:#6495ED"> <span class="pinglunren"><?php echo M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$value['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$value['wid']))->getfield('nickname') ?></span></a>:
                   <span class="pinglunneirong"><?php echo (htmlspecialchars_decode($value["content"])); ?></span>
                
                  <?php } ?>
                  </div>
                 <?php
 } } ?>
                <?php if($shu==6){ ?>
                <hr style="color:#C4C4C4;margin:2px 0;border-top: 1px solid #C4C4C4;">
                 <div class="pinglun" style="color:gray;padding:1px 0;">
                 <a href="<?php echo U('new_release',array('nid'=>$v4['id'],'id'=>$_SESSION['uid']));?>">     <p style="margin:0">查看全部<?php echo M('weixin_release_message')->where(array('aid'=>$v4['id'],'type'=>1))->count(); ?>条评论</p>
                 </a>
                 </div>
                 <?php
 } } ?>

                 </div>

                </a>


               </div>


              </div>


            </div>
             <div class="col-xs-12 spacing" style="height:2px;float:none;margin-left:1.8%;padding:0;margin-top:5px;margin-bottom:5px;">
              
            </div>
             <!-- 有关注人时推荐用户开始 -->
<?php  $count1=count($dongtai); if($count1>2){ $re6=2; }else{ $re6=0; } if($k4==$re6){ ?>
<style type="text/css">
  .case{
    margin:0;
    width: 100%;
    padding:5% 2%;
  }
  .case .swiper-slide{
   border: 1px solid #ccc;
   margin-right: 2%;
   height:160px;
       opacity: 1;
  }
  .case .swiper-slide img{
    position: absolute;
    top: 15%;
    left:28%;
    width: 60px;
    height: 60px;
    border-radius: 50%;
  }
</style>
<div class="swiper-container case " style="margin-left:1.8%;">
       <div> <span>推荐用户</span> <a href="<?php echo U('new_addfriend');?>"><span style="float:right;font-size:18px;margin-right:3%;color:#ccc">></span></a></div>


        <div class="swiper-wrapper">
        <?php if($tuijian and count($tuijian)>1){ ?>
        <?php if(is_array($tuijian)): foreach($tuijian as $key=>$v7): if($v7['wid']!=$_SESSION['wid']){ ?>
            <div class="swiper-slide" >
                         <span style="position:absolute;top:0;right:5%;color:#ccc" class="quxiao" >x</span>
<a href="<?php echo U('new_zone',array('wid'=>$v7['wid']));?>">
                         <img src="<?php echo M('weixin_man')->where(array('id'=>$v7['wid']))->getfield('headimgurl') ?>">
                         <span style="position:absolute;left:28%;top:58%;font-size:14px;color:black"><?php echo M('weixin_mydata')->where(array('wid'=>$v7['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v7['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v7['wid']))->getfield('nickname') ?></span>
                       </a>  
                       <div style=" opacity: 0.8;border-radius:15px;font-size:13px;position:absolute;top:75%;padding:5px 0;width:90%;background:green;color:white" class="guanzhu"> 关注 </div>  <input type="hidden" value="<?php echo ($v7['wid']); ?>">
            </div>
<?php } endforeach; endif; ?>
      <?php }else{ ?>    
        <div style="padding: 0;text-align:center">暂无可推荐的用户</div>
      <?php } ?>  
        </div>
       
    </div>
    <div class="col-xs-12 spacing" style="height:2px;float:none;margin-left:1.8%;padding:0;">
              
            </div>
<?php }?>

             <!--有关注人时推荐用户结束 -->
  </div>
</div>
             <!--有关注人时结束 -->
            <?php } endforeach; endif; ?> 
    </div><!-- 导航关注的页面end -->
    <?php } ?>


    </li>
    
<input type="hidden" id="wid" value="<?php echo ($_GET['wid']); ?>">





  </ul>
  <?php } ?>
</div>
 <div class="am-share">
  <h3 class="am-share-title">分享到</h3>
  <ul class="am-share-sns" style="    margin: 0 10px;padding-top: 15px;">
    <li style="    text-align: center;"><div class="bshare-custom"><a title="分享到微信" class="bshare-weixin">微信</a></div> </li>
    <li style="text-align: center;"><div class="bshare-custom"><a title="分享到QQ好友" class="bshare-qqim">QQ好友</a> </div></li>
    <li style="text-align: center;"><div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone">QQ空间</a></div></li>
    <li style="text-align: center;"><div class="bshare-custom"><a title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a></div></li>
  </ul>
 <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
  <div class="am-share-footer"><button class="share_btn">取消</button></div>
</div>

  <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_index',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-zhuye" style="font-size:25px;" ></i> <p>首页</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_faxian',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-faxian" style="font-size:24px;" ></i> <p>发现</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_dongtai',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><i class="icon iconfont icon-pengyou" style="font-size:25px;color:red" ></i><p style="color:red">动态</p></a>
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
      <script src="/new_lgx/Public/weixin/new_index/js/mui.min.js"></script>
      <script type="text/javascript">
   $(function(){
      $("a").attr('data-ajax','false')
   
   })

    var slider = mui("#slider");
        slider.slider({
          interval: 2000
        });
       
        });
</script>
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
   $(function(){
    $(".quxiao").click(function(){
      $(this).parent().remove()

    })

    $("#change").click(function(){
      location.reload()
    })
    var wid=$("#wid").val()
    $(".guanzhu").click(function(){
      var guanzhu=$(this)
         var rid=guanzhu.next().val()
       // alert(rid)
        //die
               $.ajax({
          url:"<?php echo U('attention_status');?>",
          type:'post',
          data:"wid="+wid+"&aid="+rid,
          success:function(msg){
            //alert(msg)
             if(msg=='1'){
             
                 guanzhu.html('关注')
                 guanzhu.css({'background':'green','color':'white'})
             }else if(msg=='2'){
               guanzhu.html('已关注')
                 guanzhu.css({'background':'white','color':'green'})
                 location.reload()
             }
          }
        })
    })

    $(".zan11").click(function(){
    var hehe=$(this)
  hehe.hide()
  hehe.next().show()
  var aid=$(this).parent().next().val()
  
    $.ajax({
         url:"<?php echo U('zan1');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=1",
         success:function(msg){
            var guan=hehe.parent().parent().next().find(".guanzhua")
            guan.show()
            var num=guan.find('.num')
              var num1=parseInt(num.html())+1
              num.html(num1)
              if(num1==1){
num.after("<span style='color:#6495ED;margin-left:5px;' class='"+wid+"'><?php  echo M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getfield('nickname') ?></span>")
              }else if(num1>1){
num.after("<span style='color:#6495ED;margin-left:5px;' class='"+wid+"'><?php  echo M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getfield('nickname') ?><span style='color:#000;margin-left:2px;'>,</span></span>")
              }
              
              
                     
                      
         }
      })
 })

     $(".zan2").click(function(){
       var hehe=$(this)
  hehe.hide()
  hehe.prev().show()
   var aid=$(this).parent().next().val()
   $.ajax({
         url:"<?php echo U('zan1');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=2",
         success:function(msg){
            var guan=hehe.parent().parent().next().find(".guanzhua")
             var num=guan.find('.num')
              var num1=parseInt(num.html())-1
             // alert(num1)
              num.html(num1)
              if(num1<1){
                 $("span[class='"+wid+"']").remove()
                guan.hide()
              }else{
               // guanzhu.next().hide()
                $("span[class='"+wid+"']").remove()
              }
              
         }
      })
 })
 $(".xin1").click(function(){
       $(this).hide()
      $(this).next().show()
       var aid=$(this).parent().prev().val()
      $.ajax({
         url:"<?php echo U('shoucang1');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=1",
         success:function(msg){
              if(msg=='1'){
                alert('已收藏')
               
                
              }
         }
      })
 })

  $(".xin2").click(function(){
      $(this).hide()
      $(this).prev().show()
       var aid=$(this).parent().prev().val()
      $.ajax({
         url:"<?php echo U('shoucang1');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=2",
         success:function(msg){
              if(msg=='2'){
                alert('取消收藏')
              }
         }
      })
 })
  $(".icon-pinglun").click(function(){
 var hehe=$(this).next()
 hehe.show()
  hehe.focus()
  })

   })
     </script>
    <script type="text/javascript">
  function toshare(){
    $(".am-share").addClass("am-modal-active"); 
    if($(".sharebg").length>0){
      $(".sharebg").addClass("sharebg-active");
    }else{
      $("body").append('<div class="sharebg"></div>');
      $(".sharebg").addClass("sharebg-active");
    }
    $(".sharebg-active,.share_btn").click(function(){
      $(".am-share").removeClass("am-modal-active");  
      setTimeout(function(){
        $(".sharebg-active").removeClass("sharebg-active"); 
        $(".sharebg").remove(); 
      },300);
    })
  } 
</script>
    <script type="text/javascript">
        $(function(){
         var myswiper = $('.banner').swiper({
    pagination: '.banner .swiper-pagination',
    slidesPerView: 4,
  
    paginationClickable: true,
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
          var swiper = $('.case').swiper({
   
    slidesPerView: 3,
   
    paginationClickable: true,
    spaceBetween: 0,
      breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            768: {
                slidesPerView:3,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            320: {
                slidesPerView:3,
                spaceBetween: 0
            }
        }
 });
 
        })

    </script>
<!-- <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
</div> -->
</body>
</html>