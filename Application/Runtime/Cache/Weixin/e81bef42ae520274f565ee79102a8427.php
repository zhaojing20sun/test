<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>我</title>

    <!-- Bootstrap -->

      <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_s7n5nkjexmg9cnmi.css">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_c1mtfvaqol84cxr.css">
     
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_my/css/me.css" rel="stylesheet">
  </head>
  <body>
<style type="text/css">
  .row a{
    color:#333;
  }
  .spacing {
    height: 6px;
    background: #e5e5e5;
}
</style>
    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
          <a href="<?php echo U('new_message');?>">
          <img src="/new_lgx/Public/weixin/new_my/images/message.png" style="width:35px;height:30px;position:absolute;left:4%;top:20%;">
          <!-- <i class="icon iconfont icon-xinfengxian" style="font-size:29px;color:white;position:absolute;left:4%;top:11%;font-weight: 400;" ></i> --> 
            <?php if($num){ ?>
           <div style="background:white;width:18px;height:18px;border-radius:50%;position:absolute;left:9%;top:48%;text-align:center">
              <span style="color:red;"><?php echo ($num); ?></span>  
           </div>
          <?php } ?>
            </a>
            <h3>我</h3>

            <a href="<?php echo U('new_set');?>"><i class="icon iconfont icon-shezhi" style="font-size:23px;color:white;position:absolute;right:4%;top:18%" ></i></a>
          </div>
        </div>
      </div>
    </nav>

    <!--用户-->
    <div class="container-fluid">
       <div class="row user" style="height:160px;background:url(<?php echo $my['headimgurl']?>); background-repeat: no-repeat;
            background-position: center;background-size: cover;filter: blur(10px);-webkit-filter: blur(10px);"> </div>
       <div class="col-xs-12" style="position:absolute;top:14%;left:0%;">
         <div class="media">
           <div class="media-left">
             <a href="<?php echo U('new_zone',array('wid'=>$_SESSION['wid']));?>">
               <img src="<?php echo ($my["headimgurl"]); ?>" alt="头像" class="touxiang media-object" style="width:75px;border-radius:50%;" onerror="this.src='/new_lgx/Public/common/images/defaultheader.png'">
             </a>
           </div>
           <div class="media-body">
             <h4 class="media-heading"><?php echo ($my["nickname"]); ?> &nbsp; <?php if($my['sex']==1){ ?><i class="icon iconfont icon-nansheng1" style="font-size:18px;color:#66D9EF;" ></i><?php }elseif($my['sex']==2){ ?><i class="icon iconfont icon-nvsheng1" style="font-size:18px;color:#E46AA3;" ></i><?php } ?></h4>
             <a href="<?php echo U('new_mydata');?>">
              <i class="icon iconfont icon-xiangqing" style="font-size:25px;color:gray;position:absolute;right:6%;top:24%" ></i>
             
             </a>
             <p class="personal-sign" style="width:80%;text-indent:1em;height:34px;text-align:left;" title="<?php echo ($my["sign"]); ?>"><?php if($my['sign']==''){ ?>个性签名<?php }else{ if(mb_strlen($my['sign'],'utf-8')>25){ echo mb_substr($my['sign'],0,25,'utf-8' ).'...'; }else{ echo $my['sign'];} } ?></p>
           </div>
         </div>
       </div>
     

    </div>

    <!--用户动态-->
    <div class="container-fluid">
      <div class="row user-dongtai">
      <a href="<?php echo U('new_zone',array('wid'=>$_SESSION['wid']));?>">
        <div class="col-xs-4">
          <span class="user-dongtai-num"><?php echo count($release); ?></span>
          <span>动态</span>
        </div>
        </a>
        <a href="<?php echo U('new_attention',array('wid'=>$_SESSION['wid'],'type'=>'guanzhu'));?>" >
        <div class="col-xs-4">
          <span class="user-dongtai-num"><?php echo ($guanzhu); ?></span>
          <span>关注</span>
        </div>
        </a>
        <a href="<?php echo U('new_attention',array('aid'=>$_SESSION['wid'],'type'=>'fins'));?>" >
        <div class="col-xs-4">
          <span class="user-dongtai-num"><?php echo ($fins); ?></span>
          <span>粉丝</span>
        </div>
        </a>
      </div>
    </div>

    <!--设置选项-->
    <div class="container-fluid">
      <div class="row settings">
        <div class="col-xs-12 spacing">
          
        </div>
         <a href="<?php echo U('new_myhide');?>">
        <div class="col-xs-12 options">
          <h4>我的收藏</h4>
          <i class="jiantou"></i>
        </div>
        </a>
        <a href="<?php echo U('new_mydraft');?>">
        <div class="col-xs-12 options">
          <h4>我的草稿</h4>
          <i class="jiantou"></i>
        </div>
        </a>
        <div class="col-xs-12 options">
          <h4>我的等级</h4>
          <i class="jiantou"></i>
        </div>
        <div class="col-xs-12 options">
          <h4>我的徽章</h4>
          <i class="jiantou"></i>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
        <div class="col-xs-12 options">
          <h4>购物车</h4>
          <i class="jiantou"></i>
        </div>
        <div class="col-xs-12 options">
          <h4>优惠券</h4>
          <i class="jiantou"></i>
        </div>
        <div class="col-xs-12 options">
          <h4>我的订单</h4>
          <i class="jiantou"></i>
        </div>
        <div class="col-xs-12 options">
          <h4>我的钱包</h4>
          <i class="jiantou"></i>
        </div>
        <div class="col-xs-12 spacing">
          
        </div>
        <div class="col-xs-12 options">
          <h4>邀请好友</h4>
          <i class="jiantou"></i>
        </div>
        <a href="<?php echo U('new_linkman');?>">
        <div class="col-xs-12 options">
          <h4>我的联系人</h4>
          <i class="jiantou"></i>
        </div>
        </a>
        <div class="col-xs-12 spacing">
          
        </div>
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
    <!--底部导航-->
  <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_index');?>" data-ajax="false"><i class="icon iconfont icon-zhuye" style="font-size:25px;" ></i> <p>首页</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_faxian');?>" data-ajax="false"><i class="icon iconfont icon-faxian" style="font-size:24px;" ></i> <p>发现</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_dongtai');?>" data-ajax="false"><i class="icon iconfont icon-pengyouquan" style="font-size:25px;" ></i><p>动态</p></a>
          </div>
          <div class=" navbar-bottom-item">
            <a href="<?php echo U('new_my');?>" data-ajax="false"><i class="icon iconfont icon-my" style="font-size:25px;color:red" ></i><p style="color:red">我</p></a>
          </div>
        </div>
      </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_my/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_my/js/me.js"></script>
  </body>
</html>