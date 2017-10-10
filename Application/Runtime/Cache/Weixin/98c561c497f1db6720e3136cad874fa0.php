<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>首页</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/new_index/css/bootstrap.min.css?v=1.1" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_index/css/swiper-3.4.2.min.css?v=1.1" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_index/css/index.css?v=1.1" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_05awnujgybsxlxr.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_18mogr7g839s5rk9.css">
  
  </head>
  <body>

<style type="text/css">
  .news-content{
    border:0;
  }
 h3 {
    font-size: 17px;
}
.swiper-pagination-bullet-active {
    opacity: 1;
    background: white;
}
.swiper-pagination{
  text-align: right;
}

  .media-object{
    border-radius: 50%;
  }
  .guanzhu {
    padding: 3px 6px;
    background: red;
    color: white;
    border: 1px solid red;
    border-radius: 4px;
    font-size: 12px;
}
.recommended-content a:link { 
 color: #333;
text-decoration: none; 
} 
.recommended-content a:visited { 
 color: #333;
text-decoration: none; 
} 
.recommended-content a:hover { 
  color: #333;
text-decoration: none; 
} 
</style>
    <div id="anchor">

    </div>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
       <!--    <a href="<?php echo U('new_tianqi');?>">获取ip</a> -->
            <iframe width="110" scrolling="no" height="50" frameborder="0" allowtransparency="true" src="<?php echo U('new_tianqi');?>" style="position:absolute;left:1%"> </iframe>
            <h3 style="margin:0">首页</h3>
    <a href="<?php echo U('new_search');?>">
     <i class="icon iconfont icon-chazhao" style="font-size:25px;color:white;position:absolute;right:2%;top:17%"></i>
     </a>
    
          </div>
        </div>
      </div>
    </nav>
 <!--轮播图1-->
 <div class="swiper-container lunbo1" style="width:100%;height:150px;">
      
        <div class="swiper-wrapper">
            
           
           <?php if(is_array($ding)): foreach($ding as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:150px;">   
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
        <div class="swiper-pagination"></div>
      
    </div>
    <!--轮播结束-->


  


    <!--每日签到-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 sign_bg">
          <a href="<?php echo U('new_sign');?>">每日签到</a>
          <p style="width:60%;margin-right:5%;font-size:15px;"><marquee scrolldelay="200">天行健，君子以自强不息；地势坤，君子以厚德载物。</marquee> </p>
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
            <li><a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/xinwen.png"><p>新闻</p></a></li>
 <li><a href="<?php echo U('new_guangbo',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/guangbo.png"><p>广播</p></a></li>
           <li><a href="<?php echo U('new_tv',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/tv.png"><p>电视</p></a></li>
            
          
            <li><a href="https://v.qq.com"  data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/video.png"><p>视频</p></a></li>
             
               <li><a href="<?php echo U('new_dongtai');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/jiaoyou.png"><p>交友</p></a></li>
               <li><a href="<?php echo U('new_huodong');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/huodong.png"><p>活动</p></a></li>

              
            
           
          
            
            <li><a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/education.png"><p>教育</p></a></li>
            <li><a href="http://www.vvsvip.com" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/shangcheng.png"><p>商城</p></a></li>
            <li><a href="https://wbs.zyebank.com/pweixin/weixin/index.html?page=uz0TG5NcEjUM5dh+CrCOUhWBH1AnH++q2pzOOvgV1+QqgVm9Q6XtGMNyExl0QwTN/rlZt9RkL8s=" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/invest.png"><p>金融</p></a></li>
             <li><a href="<?php echo U('new_gengduo');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_index/images/gengduo.png"><p>更多</p></a></li>
          </ul>
        </div>
      </div>
    </div>


    <!--轮播图2-->
  <div class="tuwai" style="padding:1%;background:#F2F2F2" >
  <?php $yaowen1=count($yaowen); if($yaowen1>1){ ?>
    <div class="swiper-container lunbo2" style="width:100%;height:80px;border-radius:6px;">
      
        <div class="swiper-wrapper" >
            
          
           <?php if(is_array($yaowen)): foreach($yaowen as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:80px;">
 <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
         <?php } ?>
           

             </div><?php endforeach; endif; ?>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      
    </div>
       <?php }else{ ?>
           <?php if(is_array($yaowen)): foreach($yaowen as $k=>$v): ?><img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;color:#ccc"><?php endforeach; endif; ?>
       <?php } ?> 
</div>
    <!--今日要闻-->
    <div class="container-fluid">
      <div class="row">
       <a href="<?php echo U('new_news',array('id'=>$_SESSION['uid']));?>" data-ajax="false">
        <div class="col-xs-12 news-title">
          <h3>今日要闻</h3>
          <img src="/new_lgx/Public/weixin/new_index/images/icon/jiantou.png" style="float:right;width:10px">
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
            
            <?php if(is_array($re)): foreach($re as $key=>$v1): ?><img src="/new_lgx/<?php echo ($v1["pic"]); ?>" style="width:31%;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
    <hr style="border-top:1px solid #ccc;margin-top:5px;margin-bottom:5px;">
            <?php }elseif($count>0){?>

 <div class="media-body news-content-right">
    <p style="font-size:16px;width:60%;float:left;font-size:13px;"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:122px;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:55%;bottom:18px;position: absolute;">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
               
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:5px;margin-bottom:5px;">
             
           <?php }elseif(!$count){ ?>
       <div class="media-body news-content-right" style="position:relative;">
    <p style="font-size:16px;width:100%;float:left;font-size:13px;"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   
      <div class="news-content-right-detail" style="width:100%;bottom:18px;margin-top:10px;">
      <p style="font-size:16px;width:100%;float:left;font-size:13px;color:#ccc;text-indent:1em"><?php
 $content1=strip_tags(htmlspecialchars_decode($v['content'])); echo mb_strlen($content1,'utf-8')>80?mb_substr($content1,0,80,'utf-8').'...':$content1 ?></p>
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="position:absolute;left:42%;color:#ccc;width:15%;"><?php echo ($v["source"]); ?></span>
                <span style="position:absolute;right:6%;color:#ccc;border:0;width:auto;"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:5px;margin-bottom:5px;">
          
            <?php }?>
          </div>
        </div>
        </a><?php endforeach; endif; ?>
      </div>
    </div>
 


    <!--轮播图3-->
  <div class="tuwai" style="padding:1%;background:#F2F2F2" >
  <?php $haoyou1=count($haoyou); if($haoyou1>1){ ?>
 <div class="swiper-container lunbo3" style="width:100%;height:80px;border-radius:6px;">
      
        <div class="swiper-wrapper">
            
           
           <?php if(is_array($haoyou)): foreach($haoyou as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:80px;"> 
 <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
         <?php } ?></div><?php endforeach; endif; ?>
       
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      
    </div>
  <?php }else{ ?>
           <?php if(is_array($haoyou)): foreach($haoyou as $k=>$v): ?><img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;color:#ccc"><?php endforeach; endif; ?>
       <?php } ?> 
</div> 

    <!--好友推荐-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 recommended">
          <h3 style="line-height:0">好友推荐</h3>
      <span style="float:right;font-size:17px;" id="change">  换一批 <img src="/new_lgx/Public/weixin/new_index/images/icon/recommended.png" style="width:20px"></span> 
        </div>
      </div>
    </div>

    <!--推荐内容-->
  <?php if(is_array($tuijian)): foreach($tuijian as $k2=>$v2): ?><div class="container-fluid recommended-content">
      <div class="row">
<a href="<?php echo U('new_zone',array('wid'=>$v2['wid']));?>" class="changezone<?php echo ($k2+1); ?>">
        <div class="col-xs-8">
          <div class="media-left">
            <img class="media-object changeheader<?php echo ($k2+1); ?>" title="<?php echo ($v2["wid"]); ?>" src="<?php echo M('weixin_man')->where(array('id'=>$v2['wid']))->getfield('headimgurl') ?>">
          </div>
          <div class="media-body" style="width:200px;">
            <p class="changep1_<?php echo ($k2+1); ?>"><?php  echo M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v2['wid']))->getfield('nickname') ?></p>
            <p class="changep2_<?php echo ($k2+1); ?>" style="height:20px;overflow:hidden"><?php  echo M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('sign')?M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('sign'):'暂无签名' ?></p>
          </div>
        </div>
 </a>
        <div style="float:right;margin-right:10%">
         <a href="<?php echo U('attention_add',array('aid'=>$v2['wid']));?>" style="color:#000" class="changea<?php echo ($k2+1); ?>">
          <span class="guanzhu">+ 关注</span>
          </a>
        </div>
      </div>
    </div>
<a href="<?php echo U('new_zone',array('wid'=>$v2['wid']));?>" class="changezone<?php echo ($k2+1); ?>">
    <div class="container-fluid" style="<?php if($k2==1) echo 'margin-bottom:10px;'?>">
      <div class="row follow-content " style="padding-right:0;padding-left:5%;">
      <?php $re=M('weixin_release_pic')->where(array('wid'=>$v2['wid']))->limit('3')->select(); foreach ($re as $key => $value) { ?>
        <div class="col-xs-4 padding-0 padding-right-8" style="width:33%">
          <img class="img-responsive changeimg<?php echo ($k2+1); echo ($key); ?>" src="/new_lgx<?php echo ($value["pic"]); ?>" style="width:100%;height:100%" >
        </div>
          <?php
 } ?>
       
       
      </div>
    </div>
   </a>
   <?php if($k2<1){ ?>
 <hr>
   <?php } endforeach; endif; ?>
    


    <!--我们项目的推广轮播图-->
     <!--轮播图4-->
   <div class="tuwai" style="padding:1%;background:#F2F2F2" >
  <?php $guangbo1=count($guangbo); if($guangbo1>1){ ?> 
    <div class="swiper-container lunbo4" style="width:100%;height:80px;border-radius:6px;">
      
        <div class="swiper-wrapper">
            
           
           <?php if(is_array($guangbo)): foreach($guangbo as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:80px;">  

           <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
         <?php } ?></div><?php endforeach; endif; ?>
       
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      
    </div>
    <?php }else{ ?>
           <?php if(is_array($guangbo)): foreach($guangbo as $k=>$v): ?><img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;color:#ccc"><?php endforeach; endif; ?>
       <?php } ?> 
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
   <!--轮播图5-->
       <div class="tuwai" style="padding:1%;background:#F2F2F2" >
  <?php $dianshi1=count($dianshi); if($dianshi1>1){ ?>   
    <div class="swiper-container lunbo5" style="width:100%;height:80px;border-radius:6px;">
      
        <div class="swiper-wrapper">
            
           
           <?php if(is_array($dianshi)): foreach($dianshi as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:80px;">   <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
         <?php } ?></div><?php endforeach; endif; ?>
       
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      
    </div>
      <?php }else{ ?>
           <?php if(is_array($dianshi)): foreach($dianshi as $k=>$v): ?><img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;color:#ccc"><?php endforeach; endif; ?>
       <?php } ?> 
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
  <!--轮播图6-->
        <div class="tuwai" style="padding:1%;background:#F2F2F2" >
  <?php $huodong1=count($huodong); if($huodong1>1){ ?>  
    <div class="swiper-container lunbo6" style="width:100%;height:80px;border-radius:6px;">
      
        <div class="swiper-wrapper">
            
           
           <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><div class="swiper-slide" style="width:100%;height:80px;">   <?php if($v['url']!=''){ ?>
         <a href="<?php echo $v['url'] ?>">
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
          </a>
         <?php }else{ ?>
          <img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;">
         <?php } ?></div><?php endforeach; endif; ?>
       
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      
    </div>
       <?php }else{ ?>
           <?php if(is_array($huodong)): foreach($huodong as $k=>$v): ?><img src="/new_lgx/<?php echo ($v["logo"]); ?>" alt="<?php echo ($k+1); ?>.jpg" style="width:100%;height:80px;color:#ccc"><?php endforeach; endif; ?>
       <?php } ?> 
</div> 
    <!--结束腾讯活动推广轮播图-->
    
    <!--热门活动-->
    <div class="container-fluid">
      <div class="row">
       <a href="<?php echo U('new_huodong',array('id'=>$_SESSION['uid']));?>" data-ajax="false">
        <div class="col-xs-12 news-title">
          <h3>热门活动</h3>
          <img src="/new_lgx/Public/weixin/new_index/images/icon/jiantou.png" style="float:right;width:10px">
        </div>
        </a>
      </div>
    </div>
    <!--热门活动结束-->
    
      <?php if(is_array($activity)): foreach($activity as $k=>$v): if($k!=0){ ?>
       <div style="height:5px;width:100%;background:#ccc"></div>
       <?php } ?>

                               <?php if($v['type']==0){ ?>
                              <a href="<?php echo U('new_huodong_detial',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
                              <?php }elseif($v['type']==1){ ?>
                             
                      <a href="<?php echo U('new_baoming',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
                             
                              
                                <?php }elseif($v['type']==2){ ?>
                                
                                <?php if($v['moban']==1){ ?>
                      <a href="<?php echo U('new_toupiao',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
                                  <?php }elseif($v['moban']==2){ ?>

                      <a href="<?php echo U('new_huodong1',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">
                                   <?php }elseif($v['moban']==3) { ?>
                              <a href="<?php echo U('new_huodong2',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>">   
                                 <?php } ?>
                            


                                <?php } ?>  
     <div class="item">
        <img style="width: 100%; height: 120px;" src="/new_lgx/<?php echo ($v["logo"]); ?>">
      </div>
</a><?php endforeach; endif; ?> 

    <!--仿平安金管家效果-->
    <!--蓝色固定条-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-12 fixed-bottom-bar" id="fixed-bottom-bar">
          <span>点我，打开精彩生活！</span>
        </div>
      </div>
    </div>

    <!--底部固定滑动-->
    <div class="swiper-container fixed-bottom-slidebox" id="fixed-bottom-slidebox">
      <div class="swiper-wrapper" id="swiper-wrapper">
        <div class="swiper-slide" style="    background: rgba(0,0,0,0.5);">

        <a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>"><img src="/new_lgx/Public/weixin/new_index/images/jiaoyu.png"></a>

        </div>
        <div class="swiper-slide" style="    background: rgba(0,0,0,0.5);">
        <a href="https://wbs.zyebank.com/pweixin/weixin/index.html?page=uz0TG5NcEjUM5dh+CrCOUhWBH1AnH++q2pzOOvgV1+QqgVm9Q6XtGMNyExl0QwTN/rlZt9RkL8s="><img src="/new_lgx/Public/weixin/new_index/images/jinrong.png"></a>
        </div>

        <div class="swiper-slide" style="    background: rgba(0,0,0,0.5);">
        <a href="http://m.800pharm.com"><img src="/new_lgx/Public/weixin/new_index/images/yiliao.png"></a>
        </div>

        <div class="swiper-slide" style="    background: rgba(0,0,0,0.5);">
        <a href="http://www.vvsvip.com"><img src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>

        <div class="swiper-slide" style="    background: rgba(0,0,0,0.5);">
        <a href="https://v.qq.com"><img src="/new_lgx/Public/weixin/new_index/images/shipin.png"></a>
        </div>
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
<style type="text/css">
  .col-xs-4 {
    width: 72px;
    height: 72px;
}
.img-responsive{
  width: 72px;height:72px;
}
.bottom-click-container-row div {
    padding-right: 0;
    padding-left: 2px;
}
.swipe-right-container-row div {
    padding-right: 0;
    padding-left: 2px;
}
.margin-top-4 {
    margin-top: 4px;
}
</style>
    <div class="container-fluid swipe-right-container" id="swipe-right-container" style="width:100%">
      <div class="row swipe-right-container-row margin-bottom-8" style="bottom:124px;position:absolute;">

      <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="http://m.800pharm.com"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/yiliao.png"></a>
        </div>


        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="https://v.qq.com"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/shipin.png"></a>
        </div>
        <div style="height:80px;"></div>

        <div class="col-xs-4 col-md-4 margin-top-4">
          <a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/jiaoyu.png"></a>
        </div>
        
          <div class="col-xs-4 col-md-4 margin-top-4">
          <a href="https://wbs.zyebank.com/pweixin/weixin/index.html?page=uz0TG5NcEjUM5dh+CrCOUhWBH1AnH++q2pzOOvgV1+QqgVm9Q6XtGMNyExl0QwTN/rlZt9RkL8s="><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/jinrong.png"></a>
        </div>

        

        <div class="col-xs-4 col-md-4 margin-top-4">
          <a href="http://www.vvsvip.com"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
        </div>
      </div>

<div style="bottom:52px;background:#1E90FF;height:72px;width:100%;position:absolute;left:-10%;text-align:center;line-height:70px;">
      <a href="<?php echo U('new_zone',array('wid'=>$_SESSION['wid']));?>">  <i class="icon iconfont icon-wo1" style="font-size:30px;color:white"></i> <span style="position:relative;top:-6%;color:white">个人中心</span>
      </a>
     </div>

    </div>

    <!--从右侧滑出来的点击按钮-->
    <div class="slide-right-button" style="z-index:111;width:25px;height:25px;bottom:133px;">
      <a href="#"><img src="/new_lgx/Public/weixin/new_index/images/button.png" style="width:25px;height:25px;"></a>
    </div>

    <!--点击按钮后出现的容器-->
    <div class="container-fluid bottom-click-container" style="width:100%">
      <div class="row bottom-click-container-row">
         <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="http://m.800pharm.com"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/yiliao.png"></a>
        </div>


        <div class="col-xs-4 col-md-4 margin-top-8">
          <a href="https://v.qq.com"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/shipin.png"></a>
        </div>
        <div style="height:80px;"></div>

        <div class="col-xs-4 col-md-4 margin-top-4">
          <a href="<?php echo U('education',array('id'=>$_SESSION['uid']));?>"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/jiaoyu.png"></a>
        </div>
        
          <div class="col-xs-4 col-md-4 margin-top-4">
          <a href="https://wbs.zyebank.com/pweixin/weixin/index.html?page=uz0TG5NcEjUM5dh+CrCOUhWBH1AnH++q2pzOOvgV1+QqgVm9Q6XtGMNyExl0QwTN/rlZt9RkL8s="><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/jinrong.png"></a>
        </div>

        

        <div class="col-xs-4 col-md-4 margin-top-4">
          <a href="http://www.vvsvip.com"><img class="img-responsive" src="/new_lgx/Public/weixin/new_index/images/weipin.png"></a>
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
  z-index: 2;
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


.slide-right-button {
    width: 50px;
    height: 50px;
    position: fixed;
    right: -50px;
    bottom: 133px;
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
   
    <script type="text/javascript">
   $(function(){
      $("a").attr('data-ajax','false')
   
   $("#change").click(function(){
       var wid1=$(".changeheader1").attr('title')
       var wid2=$(".changeheader2").attr('title')
       $.ajax({
          url:"<?php echo U('change');?>",
          type:'post',
          data:'wid1='+wid1+'&wid2='+wid2,
          success:function(msg){
            $(".changeheader1").attr('title',msg['wid'][0])
             $(".changeheader1").attr('src',msg['src'][0])
             $(".changep1_1").html(msg['nickname'][0])
              $(".changep2_1").html(msg['sign'][0])
              $(".changea1").attr('href','attention_add?aid='+msg['wid'][0])
               $(".changezone1").attr('href','new_zone?wid='+msg['wid'][0])
              $(".changeimg10").attr('src','/new_lgx'+msg['img'][0][0]['pic'])
              $(".changeimg11").attr('src','/new_lgx'+msg['img'][0][1]['pic'])
              $(".changeimg12").attr('src','/new_lgx'+msg['img'][0][2]['pic'])
            $(".changeheader2").attr('title',msg['wid'][1])
            $(".changeheader2").attr('src',msg['src'][1])
            $(".changep1_2").html(msg['nickname'][1])
            $(".changep2_2").html(msg['sign'][1])
             $(".changea2").attr('href','attention_add?aid='+msg['wid'][1])
               $(".changeimg20").attr('src','/new_lgx'+msg['img'][1][0]['pic'])
              $(".changeimg21").attr('src','/new_lgx'+msg['img'][1][1]['pic'])
              $(".changeimg22").attr('src','/new_lgx'+msg['img'][1][2]['pic'])
               $(".changezone2").attr('href','new_zone?wid='+msg['wid'][1])
          }
       })
   })



   })

 
</script>
  <script>
  //setTimeout("swiper2()", 3000 )
    var swiper1 = new Swiper('.lunbo1', {
        pagination: '.swiper-pagination',
        loop : true,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
    });
    
            var swiper2 = new Swiper('.lunbo2', {
        pagination: '.swiper-pagination',
       loop : true,
       slidesPerView : 1,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
    
        });
    
 
        var swiper3 = new Swiper('.lunbo3', {
        pagination: '.swiper-pagination',
        loop : true,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
    });
          var swiper4 = new Swiper('.lunbo4', {
        pagination: '.swiper-pagination',
        loop : true,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false
    });
            var swiper5 = new Swiper('.lunbo5', {
        pagination: '.swiper-pagination',
        loop : true,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });
              var swiper6 = new Swiper('.lunbo6', {
        pagination: '.swiper-pagination',
      loop : true,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 7000,
        autoplayDisableOnInteraction: false
    });
    </script>
  </body>
</html>