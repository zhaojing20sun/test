<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>新闻-<?php echo ($news["title"]); ?></title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_at4nh6q3wp39dx6r.css">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
    <link href="/new_lgx/Public/weixin/detial/css/index.css" rel="stylesheet">

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
          <h3 class="detail-title" style="font-size:18px;"><?php echo ($news["title"]); ?></h3>
          <hr style="border-top: 1px solid #ccc;width:100%;margin-top:10px;margin-bottom:10px;">
          <div class="release-time">
          <?php if($news['wid']=='' || $news['wid']=='0' ){ ?>
            <span>来源：<?php echo ($news["source"]); ?></span>
            <span><?php echo (date('Y-m-d H:i:s',$news["addtime"])); ?></span>
           <?php }else{ ?>

               <img src="<?php echo M('weixin_man')->where(array('id'=>$news['wid']))->getField('headimgurl') ?>" style="display:inline-block;width:40px;border-radius:50%">

          <div style="font-size:13px;position:relative;width:70%;display:inline-block;top:-12px;color:dimgray;left:3px;">
           <span><?php echo M('weixin_mydata')->where(array('id'=>$news['wid']))->getField('nickname')?M('weixin_mydata')->where(array('id'=>$news['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$news['wid']))->getField('nickname') ?></span>
           </div>

           <div style="font-size:12px;left:12%;position:relative;width:70%;display:inline-block;top:-17px;color:dimgray;">
           <span>楼主</span> &nbsp;<span><?php $time=time()-$news['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo date('Y-m-d H:i:s',$news['addtime']); } ?></span>
           </div>
           <?php if($news['wid']!=$_SESSION['wid']){ ?>
<span style="position:relative;top:-35px;color:window;float:right;background-color:red;border: 1px solid red;padding: 2px 10px;border-radius:3px;" class="guanzhu" title="<?php echo ($news["wid"]); ?>"><?php $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$news['wid']))->find(); if($re){ echo "已关注"; }else{ echo "关 注"; } ?></span>

      <?php } ?>

            <?php } ?>
          </div>
        <!--   <div class="detail-video">
          <video src="" controls="controls" class="center-block"></video>
          <img src="">
        </div> -->
          <div class="detail-article" style="margin-top:5px;">
           <?php echo (htmlspecialchars_decode($news["content"])); ?>
           <br>

                       <span>  <i class="icon iconfont icon-liulan" style="font-size:18px"></i>   浏览<?php echo ($news["view"]); ?>人</span>

                         <span style="position:relative;left:56%">   <i class="icon iconfont icon-dianzan" style="font-size:18px;"></i> <?php
 if($like_man>10000){ echo round($like_man/10000,1).'w'; }else{ echo $like_man; } ?>人</span>
                    
                       
            

             <hr style="border-top:15px solid #ccc;margin-top:10px;margin-bottom:10px;">
             <span style="font-size:16px;">相关阅读</span>
             
              
              <?php if(is_array($about)): foreach($about as $k=>$v): ?><hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
               <a href="<?php echo U('new_news_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"> 

              <div class="news_top" style="padding-bottom:0;<?php if($k!=0) echo 'padding-top:0' ?>">
        
           <?php $re=M('weixin_pic')->where(array('aid'=>$v['id']))->select(); $count=count($re); if($count==3){ ?>
            <div class="media-body news-content-right">
              <p style="font-size:15px"><?php echo ($v["title"]); ?></p>
            
            <?php if(is_array($re)): foreach($re as $key=>$v1): ?><img src="/new_lgx/<?php echo ($v1["pic"]); ?>" style="display:inline-block;width:31%;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail" style="margin-top:15px;">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
  
            <?php }elseif($count>0) {?>
  
 <div class="media-body news-content-right" style="position:relative">
    <p style="font-size:15px;width:65%;float:left"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:31%;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:62%;position:absolute;bottom:0">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>

             
           <?php }elseif($count==0){ ?>

         <div class="media-body news-content-right" style="">
    <p style="font-size:15px;width:100%;float:left"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
  
      <div class="news-content-right-detail" style="width:100%;margin-top:5px;">
                <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:24%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>  
            
   <?php }?>
              </div>
            </a><?php endforeach; endif; ?>


              <hr style="border-top:15px solid #ccc;margin-top:10px;margin-bottom:10px;">
              
              <span style="font-size:16px;">评论</span>
            
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
  <p style="color:gray;font-size:13px;"> <?php $wida=M('weixin_article_message')->where(array('id'=>$v['rwid']))->find(); echo M('weixin_mydata')->where(array('wid'=>$wida['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$wida['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$wida['wid']))->getField('nickname') ?> 发表于 <?php echo date('Y-m-d H:i:s',$wida['addtime']) ?></p>
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

     <input type="text" id="content"  placeholder="回个话鼓励一下" style="width:55%;border-radius:8px;border:1px solid #ccc;">
      <input type="button" id="send" value="发送" style="border-radius:8px;margin-left:1%;height:24px;">
      <input type="button" id="rsend" value="发送" style="border-radius:8px;margin-left:1%;height:24px;display:none">
    <i class="icon iconfont icon-ttpodicon" id="xin1" style="font-size:18px;<?php if($xin=='1') echo 'display:none' ?>"></i> 
<i class="icon iconfont icon-dianzanhongxincaise" id="xin2" style="font-size:17px;color:red;position:relative;bottom: -2px;<?php if($xin=='2' or $xin=='') echo 'display:none' ?>"></i>
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
     <script type="text/javascript">
      $(function(){
        var aid=$("#aid").val()
        var wid=$("#wid").val()
       
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
                    url:"<?php echo U('liuyan');?>",
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
            

 $("#xin1").click(function(){
       $(this).hide()
       $("#xin2").show()
      $.ajax({
         url:"<?php echo U('shoucang');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=1",
         success:function(msg){
              if(msg=='1'){
                alert('已收藏')
               
                
              }
         }
      })
 })

  $("#xin2").click(function(){
      $(this).hide()
      $("#xin1").show()
      $.ajax({
         url:"<?php echo U('shoucang');?>",
         type:'post',
         data:"aid="+aid+"&wid="+wid+"&status=2",
         success:function(msg){
              if(msg=='2'){
                alert('取消收藏')
              }
         }
      })
 })

 $("#zan1").click(function(){
  $(this).hide()
  $("#zan2").show()
    $.ajax({
         url:"<?php echo U('zan');?>",
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
         url:"<?php echo U('zan');?>",
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
                    url:"<?php echo U('huifu');?>",
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
$(".guanzhu").click(function(){
        var guanzhu=$(this)
         var aid=guanzhu.attr('title')
        $.ajax({
          url:"<?php echo U('attention_status1');?>",
          type:'post',
          data:"wid="+wid+"&aid="+aid,
          success:function(msg){
              if(msg=='1'){
              alert('操作成功')
                 guanzhu.html('关 注')
                 
             }else if(msg=='2'){
              alert('操作成功')
              guanzhu.html('已关注')
             }
          }
        })
    })
      })
     </script>
  </body>
</html>