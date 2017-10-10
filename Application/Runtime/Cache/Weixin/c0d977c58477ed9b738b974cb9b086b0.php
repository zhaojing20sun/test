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
    <link href="/new_lgx/Public/weixin/new_video_detial/css/video.css" rel="stylesheet">
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <h3><?php echo ($title); ?></h3>
            <i class="share"></i>
          </div>
        </div>
      </div>
    </nav>

    <!--视频-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 padding-0 video-container">
          <div class="embed-responsive embed-responsive-16by9">
           <!--  <video style="background: #ccc;" class="embed-responsive-item" src="">
             您的浏览器不支持video标签
           </video> -->
           <?php if($video['url']==''){ ?>
 <div style="position: fixed;top: 50px;width:100%;height:auto">
   <div style="width:100%;height:auto">
   <span style="float:left;z-index:99;color:white;position:relative;font-size:13px;padding:1% 1%" class="my-video-<?php echo ($video["id"]); ?>"><?php echo ($video["title"]); ?></span>
    <video id="my-video-<?php echo ($video["id"]); ?>" title="<?php echo ($video["id"]); ?>" src="/new_lgx/<?php echo ($video["video"]); ?>" autoplay="autoplay" class="video-js  vjs-big-play-centered" controls preload="none" style="position: fixed;top: 40px; width:100%;height:240px;" 
      poster="/new_lgx/<?php echo ($video["logo"]); ?>" >
      <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/mp4">
      <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/webm">
      <source src="/new_lgx/<?php echo ($video["video"]); ?>" type="video/ogg">
   
      </video>
   

   </div>
<!-- <div  style="width:100%;height:50px">
   <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
   <span style="text-align:center">24次播放</span>
   </div>
   <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
   <span style="float:left">|</span>
   <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="float:left;margin-top:11%;margin-left:26%;" />
   <span  style="float:left;margin-right:15%">点赞</span>
   </div>
   <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
   <span style="float:left">|</span>
   <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
   <span style="float:left;margin-right:15%">评论</span>
   </div>
 
 </div>
  --> </div>
   <?php }else{ ?>


 <div style="width:100%;height:100%;">
   <iframe style="z-index:999;width:100%;height:240px;position:fixed;top:40px" src="<?php echo ($video["url"]); ?>" frameborder=0 'allowfullscreen'></iframe>
<!-- <div  style="width:100%;height:50px">
  <div style="width:33%;float:left;text-align:center;height:100%;line-height:50px;color:#8B8B83">
  <span style="text-align:center">24次播放</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  <span style="float:left">|</span>
  <img src="/new_lgx/Public/weixin/index/images/zan.png" width="18" height="18" style="float:left;margin-top:11%;margin-left:26%;" />
  <span  style="float:left;margin-right:15%">点赞</span>
  </div>
  <div style="width:33%;float:left;height:100%;line-height:50px;color:#8B8B83;text-align:center;height:100%;">
  <span style="float:left">|</span>
  <img src="/new_lgx/Public/weixin/index/images/pinglun.png" width="25" height="20" style="float:left;margin-top:12%;margin-left:24%" />
  <span style="float:left;margin-right:15%">评论</span>
  </div>

</div> -->
 </div>
   <?php } ?>

           <!--  <div id="yugao-btn">
             <span></span>
           </div> -->

        <!--     <div id="yugao-content">
          <span id="close">关闭</span>
          <ul>
            <li>节目名 00:24</li>
            <li>节目名 00:24</li>
            <li>节目名 00:24</li>
            <li>节目名 00:24</li>
            <li>节目名 00:24</li>
            <li>节目名 00:24</li>
            <li>节目名 00:24</li>
          </ul>
        </div> -->

          </div>
        </div>
      </div>
    </div>

    <!--评论内容-->
    <div id="test" style="width: 100%; height: 220px; position:absolute; top:300px;overflow: scroll; background: #fff;">
      <div class="container-fluid">
        <div class="row" id="content_row" style="position:relative;overflow-y:hidden;">
          
  <!-- 
         <div class="col-xs-12 comment">
           <div class="media">
             <div class="media-left">
               <img src="/new_lgx/Public/weixin/new_video_detial/images/touxiang.png" >
             </div>
             <div class="media-body">
               <p class="username">人名</p>
               <div class="comment-content">
                 
               </div>
             </div>
           </div>
         </div>  -->

          

         
        </div>
      </div>
    </div>
  


    <!--进行评论-->
    <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom" id="navbar-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-1">
            <div class="input-group">
              <input type="text" class="form-control comment-input" placeholder="输入内容" id="content">
            </div>
          </div>
          <div class="col-xs-1">
            <button class="btn btn-default btn-send">发送</button>
          </div>
        </div>
      </div>
    </nav>
<input type="hidden" name='image' value="<?php echo ($man["headimgurl"]); ?>">
<input type="hidden" name='nickname' value="<?php echo ($man["nickname"]); ?>">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_video_detial/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_video_detial/js/video.js"></script>
       <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
      $("button").click(function(){
       var myDate = new Date();  
       var mytime=myDate.getHours()+":"
       var men=myDate.getMinutes()
       var miao=myDate.getSeconds()
       if(parseFloat(men)<10){
           men="0"+men
           //alert(men)
       }
       if(parseFloat(miao)<10){
           miao="0"+miao
           //alert(men)
       }
       mytime=mytime+men+":"+miao
         var content=$("#content").val()
         var img=$("input[name='image']").val()
         var name=$("input[name='nickname']").val()
         if(content==''){
           alert('内容为空')
         }else{
          $("#content").val('')
           $("#content_row").prepend("<div class='col-xs-12 comment'><div class='media'><div class='media-left'><img src='"+img+"' style='width:50px;height:50px;' ></div><div class='media-body'><p class='username'>"+name+"&nbsp;<span style='font-size:14px'>"+mytime+"</span></p><div class='comment-content' style='padding:2px'>"+content+"</div></div></div></div>")
         }
      })

      var viewSightHeight = $(window).height();
      var navbarTopHeight = $("#navbar-top").height();
      var videoContainerHeight = $(".video-container").height();
      var navbarBottomHeight = $("#navbar-bottom").height();
      var commentContainer = $("#test");

      commentContainer.height(viewSightHeight - navbarTopHeight - videoContainerHeight - navbarBottomHeight);





    </script>
  </body>
</html>