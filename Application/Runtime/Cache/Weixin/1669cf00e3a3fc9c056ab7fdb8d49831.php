<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo ($video["title"]); ?></title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
      <link href="/new_lgx/Public/weixin/video/css/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_at4nh6q3wp39dx6r.css">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
    <link href="/new_lgx/Public/weixin/detial/css/index.css" rel="stylesheet">
<script src="/new_lgx/Public/weixin/js/video/video.js"></script>
<script src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:white">
<style type="text/css">
  .release-time span{
    font-size: 14px;
    color: #ccc;
    padding-left: 10%
  }
.iconfont{
  margin-left: 3%
}
.news_top p{
  color:#000;
      letter-spacing: 0;
    text-indent: 0;
}
.message p{
  letter-spacing: 0;
    text-indent: 0;
}
</style>
 <style type="text/css">

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
.col-md-12{padding: 0;}
.spacing {
    height: 16px;
    background: #e5e5e5;
    margin-bottom: 10px;
}
</style> 
    <!-- 头部 -->
<!--     <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-12 icon-container">
        <em>&lt;</em>
        <span class="back" onclick="history.go(-1)">返回</span>
     
        <i style="margin-right:80px"><?php echo ($news["title"]); ?></i>
      </div>
    </div>
  </div>
</nav> -->
<!-- 
    <div class="space-8">
      
    </div> -->

    <div class="container-fluid" style="margin-bottom:50px">
      <div class="row">
        <div class="col-xs-12 col-md-12">
         
         <?php if($video['url']==''){ ?>

 <div style="width:100%;height:260px">
   <div style="width:100%;height:200px">
   <video id="my-video" title="<?php echo ($v["id"]); ?>" src="/new_lgx/<?php echo ($video["video"]); ?>" class="video-js  vjs-big-play-centered" controls preload="none" style="width:100%" height="200"
     poster="/new_lgx/<?php echo ($video["logo"]); ?>" >
     <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/mp4">
     <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/webm">
     <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/ogg">
      
     </video> 

   </div>
    <div style="width:100%;padding:5px">
     <span style="z-index:99;color:#000;font-size:15px;" class="my-video-<?php echo ($v["id"]); ?>"><?php echo ($video["title"]); ?></span>
  
  </div> 
   
    
   

<div  style="width:100%;height:50px">
  <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
  <span style="text-align:center"><?php echo ($view1); ?>次播放</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
 
    <i class="icon iconfont icon-dianzan" class="zan1" style="font-size:18px;float:left;margin-left:26%;"></i>
 <!--  <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="float:left;margin-top:11%;margin-left:26%;" /> -->
   <span  style="float:left;margin-right:15%"><?php if($zan>0){ echo '&nbsp;'.$zan; }else{echo '点赞';} ?></span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  
  <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
  <span style="float:left;margin-right:15%"><?php if($pinglun>0){ echo '&nbsp;'.$pinglun; }else{echo '评论';} ?></span>
  </div>

</div>
 </div>

<div class="col-xs-12 spacing">
          
        </div>
   <?php }else{ ?>


 <div style="width:100%;height:260px">
   <iframe style="width:100%;height:200px;" src="<?php echo ($video["url"]); ?>" frameborder=0 'allowfullscreen' class="tx"></iframe>
      <div style="width:100%;padding:5px">
     <span style="z-index:99;color:#000;font-size:15px;" class="my-video-<?php echo ($v["id"]); ?>"><?php echo ($video["title"]); ?></span>
  
  </div> 
<div  style="width:100%;height:50px">
  <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
  <span style="text-align:center"><?php echo ($view1); ?>次播放</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
 
    <i class="icon iconfont icon-dianzan" class="zan1" style="font-size:18px;float:left;margin-left:26%;"></i>
 <!--  <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="float:left;margin-top:11%;margin-left:26%;" /> -->
   <span  style="float:left;margin-right:15%"><?php if($zan>0){ echo '&nbsp;'.$zan; }else{echo '点赞';} ?></span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  
  <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
  <span style="float:left;margin-right:15%"><?php if($pinglun>0){ echo '&nbsp;'.$pinglun; }else{echo '评论';} ?></span>
  </div>

</div>
 </div>
 <div class="col-xs-12 spacing">
          
        </div>
   <?php } ?>

                       
            

            
             <span style="font-size:15px;padding-left:15px;border-left:4px solid red;display:inline-block;line-height:25px;height:25px;">精彩推荐</span>
             
              <div style="background:#e5e5e5;width:100%;margin:10px 0;height:auto;padding:3% 1%;">
              <?php if(is_array($about)): foreach($about as $k=>$v): ?><a href="<?php echo U('new_video_end',array('id'=>$_SESSION['uid'],'nid'=>$v['id']));?>"> 

              <div class="news_top" style="display:inline-block;width:47%;position:relative;margin-left:6px;">
       
     
                   <?php if($v['url']==''){ ?>

 <div style="width:100%;height:120px;background:white;">
 <span style="color:white;position:absolute;bottom:2px;left:3px;font-size:12px;"><?php if($v['view']>10000){ echo round($v['view']/10000,1).'w次播放'; }else{echo $v['view'].'次播放';} ?> </span>
  <img src="/new_lgx/<?php echo ($v["logo"]); ?>" style="width:100%;height:100%;">
    <div style="width:100%;background:white;border-bottom:1px solid #ccc;padding:3px 2px;height:46px;overflow:hidden">
     <span style="z-index:99;color:#000;font-size:14px;" class="my-video-<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></span>
  
  </div> 
   
 </div>


   <?php }else{ ?>


 
  <div style="width:100%;height:120px;background:white;">
  <span style="color:white;position:absolute;bottom:2px;left:3px;font-size:12px;"><?php if($v['view']>10000){ echo round($v['view']/10000,1).'w次播放'; }else{echo $v['view'].'次播放';} ?> </span>
  <img src="/new_lgx/<?php echo ($v["logo"]); ?>" style="width:100%;height:100%;">
    <div style="width:100%;background:white;border-bottom:1px solid #ccc;padding:3px 2px;height:46px;overflow:hidden">
     <span style="z-index:99;color:#000;font-size:14px;" class="my-video-<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></span>
  
  </div> 
 </div> 
   <?php } ?>


              </div>
            </a><?php endforeach; endif; ?>
</div>

            <!--   <hr style="border-top:15px solid #e5e5e5;margin-top:10px;margin-bottom:10px;"> -->
              <span style="font-size:15px;padding-left:15px;border-left:4px solid red;display:inline-block;line-height:25px;height:25px;">评论</span>
              
            
              <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
              <?php if($liuyan){ ?>
           <?php if(is_array($liuyan)): foreach($liuyan as $k=>$v): ?><div style="width:100%;" class='pinglun'> 
              <?php if($v['rwid']==0){ ?>
              <img src="<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getField('headimgurl') ?>"
              style="width:40px;border-radius:50%;display:inline-block" onerror="this.src='/new_lgx/Public/common/images/nopic.gif'"><span style="margin-left:2%"><?php echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getField('nickname') ?></span>
             
              <div style="margin-top:5px;padding-left:14%;padding-right:4%">
                <?php echo ($v["content"]); ?>
             
                <br><br>
                  <?php echo ($k+1); ?>楼 <?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?>   <input type="hidden" value="<?php echo ($v["id"]); ?>"><i class="icon iconfont icon-pinglun" style="font-size:18px;float:right;"></i>       
              </div>
             
             </div> 
            <?php
 }else{ ?>  
 <img src='<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getField('headimgurl') ?>'  onerror="this.src='/new_lgx/Public/common/images/nopic.gif'"    style='width:40px;border-radius:50%;display:inline-block'><span style='margin-left:5px;'><?php echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getField('nickname') ?></span><br>
<div class="message" style="background:lightgrey;min-height:70px;width:80%;margin-left:14%;border-radius:8px;padding:2%">
  <p style="color:gray;font-size:13px;"> <?php $wida=M('weixin_video_message')->where(array('id'=>$v['rwid']))->find(); echo M('weixin_mydata')->where(array('wid'=>$wida['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$wida['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$wida['wid']))->getField('nickname') ?> 发表于 <?php echo date('Y-m-d H:i:s',$wida['addtime']) ?></p>
<?php $count1=mb_strlen($wida['content']);if($count1>50){ echo mb_substr($wida['content'], 0,50).'...';}else{echo $wida['content'];} ?>
</div>
<i class="icon iconfont icon-daosanjiao"  style="font-size:12px;color:lightgrey;position:relative;left:17%;top:-5px"></i> 
 <div style="margin-top:5px;padding-left:14%;padding-right:4%">
                <?php echo ($v["content"]); ?>
             
                <br><br>
                  <?php echo ($k+1); ?>楼 <?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?>   <input type="hidden" value="<?php echo ($v["id"]); ?>"><i class="icon iconfont icon-pinglun" style="font-size:18px;float:right;"></i>       
              </div></div> 


               <?php
 } ?>
             <?php  $count=count($liuyan); if($k+1<$count){ ?>
 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
              <?php
 } endforeach; endif; ?>


 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;" id="pinglun_hr">
              <p  style="text-align:center">没有更多了</p>

<?php }else{ ?>
<div style="width:100%;text-align:center;padding:3% 0" id="shafa">
<i class="icon iconfont icon-shafa" style="font-size:24px;"></i>
<br>
<span>暂无评论，快来抢沙发</span>  
   </div>    
   <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;" id="pinglun_hr">    
<?php } ?>
               
          </div>
        
       
        </div>
      </div>
    </div>

  <nav class=" navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height" style="height:45px;padding:2% 10px">

     <input type="text" id="content"  placeholder="回个话鼓励一下" style="width:65%;border-radius:8px;border:1px solid #ccc;">
      <input type="button" id="send" value="发送" style="border-radius:8px;margin-left:1%;height:24px;">
      <input type="button" id="rsend" value="发送" style="border-radius:8px;margin-left:1%;height:24px;display:none">
  

    <i class="icon iconfont icon-dianzan" id="zan1" style="font-size:18px;<?php if($like=='1') echo 'display:none' ?>"></i> 
     


   <i class="icon iconfont icon-dianzan1" id="zan2" style="font-size:18px;color:red;<?php if($like=='2' or $like=='') echo 'display:none' ?>"></i>   

         <i class="icon iconfont icon-fenxiang" style="font-size:18px" onClick="toshare()"></i>        
 
    </nav>
<div class="am-share">
  <h3 class="am-share-title">分享到</h3>
  <ul class="am-share-sns">
    <li><div class="bshare-custom"><a title="分享到微信" class="bshare-weixin">微信</a></div> </li>
    <li><div class="bshare-custom"><a title="分享到QQ好友" class="bshare-qqim">QQ好友</a> </div></li>
    <li><div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone">QQ空间</a></div></li>
    <li><div class="bshare-custom"><a title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a></div></li>
  </ul>
 <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
  <div class="am-share-footer"><button class="share_btn">取消</button></div>
</div>
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
<input type="hidden" value="<?php echo ($_GET['nid']); ?>" id="aid">
<input type="hidden" value="<?php echo $_SESSION['wid'] ?>" id="wid">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/detial/js/bootstrap.min.js"></script>
     <script src="http://vjs.zencdn.net/5.18.4/video.min.js"></script>  
   <script type="text/javascript">
      $(function(){
        var aid=$("#aid").val()
        var wid=$("#wid").val()
       //alert(1)
        //var rsend=1;
       var img="this.src='/new_lgx/Public/common/images/nopic.gif'"
        $("#send").click(function(){
         // alert(rsend)
           var content=$("#content").val()
          if(content==''){
            alert('您还没有输入内容')
          }else{
           // alert(1)
                 $.ajax({
                    url:"<?php echo U('video_liuyan');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&content="+content,
         success:function(msg){
          //alert(msg)
                if(msg>0){
                  $("#content").val('')
                  var num=$("div[class='pinglun']").size()
                
                 $("#shafa").hide()
                 if(num<1){
                  $("#pinglun_hr").before("<div class='pinglun' style='width:100%;'><img src='<?php echo M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getField('headimgurl') ?>'  onerror="+img+"    style='width:40px;border-radius:50%;display:inline-block'><span style='margin-left:5px;'><?php echo M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getField('nickname') ?></span><div style='margin-top:5px;padding-left:14%;padding-right:4%'>"+content+"<br><br>我的留言</div></div>");
                }else{
                     $("#pinglun_hr").before("<hr style='border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;'><div class='pinglun' style='width:100%;'><img src='<?php echo M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getField('headimgurl') ?>'   onerror="+img+"       style='width:40px;border-radius:50%;display:inline-block'><span style='margin-left:5px;'><?php echo M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$_SESSION['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getField('nickname') ?></span><div style='margin-top:5px;padding-left:14%;padding-right:4%'>"+content+"<br><br>我的留言</div></div>");
                  }
   /*$("#pinglun_hr").before("<div style='width:100%;'><img src='http://wx.qlogo.cn/mmopen/vv8lLNoNRezEBGbR0EuSzvL0quvquX4Bwu6NKico0Av2QPvx68MFXs5DxibEXmX6JoDXM6vpTGdib3yfzP5fDPiaaEzcia7Xeiblp3/0'
               style='width:50px;border-radius:50%;display:inline-block'><span>流星星</span><div style='margin-top:5px;padding-left:14%;padding-right:4%'>"+content+"<br><br>1楼4分钟前<i class='icon iconfont icon-pinglun' style='font-size:18px;float:right;'></i></div></div>")*/
                }
         }

             })
          }
        
        })
            




 $("#zan1").click(function(){
  $(this).hide()
  $("#zan2").show()
    $.ajax({
         url:"<?php echo U('video_zan');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=1",
         success:function(msg){
            
         }
      })
     
 })

 $("#zan2").click(function(){
  $(this).hide()
  $("#zan1").show()
   $.ajax({
         url:"<?php echo U('video_zan');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=2",
         success:function(msg){
            
         }
      })
 })


           
            $('.icon-pinglun').click(function(){
              $("#rwid").attr('id','')
              $(this).prev().attr('id','rwid')
              // rwid=$(this).prev().val()
                
               $("#content").focus()
              
                $("#content").attr('placeholder','回复一下')
               $("#send").hide()
               $("#rsend").show()
            })



              $("#rsend").click(function(){

          var content=$("#content").val()
           if(content==''){
            alert('您还没有输入回复内容')
          }else{
            var rwid=$("#rwid").val()
           
                   $.ajax({
                    url:"<?php echo U('video_huifu');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&content="+content+"&rwid="+rwid,
         success:function(msg){
          //alert(msg)
                if(msg>0){
                  $("#content").val('')
                  var num=$("div[class='pinglun']").size()
                 // var lou=parseInt(num)+1
                 $("#shafa").hide()
                alert('回复成功')
                location.reload()
                }
         }

             })
           } 
        }) 

$("#content").blur(function(){
                $("#content").attr('placeholder','回个话鼓励一下')
               
               })
$("#content").focus(function(){
                $("#content").attr('placeholder','回个话鼓励一下')
                $("#send").show()
               $("#rsend").hide()
               })

      })
     </script>
        <script type="text/javascript">
        $(function(){
     
          var play='my-video'
          //alert(play)
          var play=videojs("my-video")

         play.on('play',function(){
         
        
          })
          play.on('pause',function(){
          
          })
          
     
         

        })
  
    </script>

  
  </body>
</html>