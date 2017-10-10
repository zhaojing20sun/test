<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>添加好友</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_addfriend/css/tianjiahaoyou.css" rel="stylesheet">
  </head>
  <body style="padding-top:20px;">

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
          <a href="<?php echo U('new_dongtai');?>">  <i class="back"></i></a>
            <h3>添加好友</h3>
            <i class="search">搜索</i>
          </div>
        </div>
      </div>
    </nav>


<!--     
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 padding-right-0 padding-left-8 margin-top-16" style="padding-left:7%;">
      <div class="media">
        <div class="media-left">
          <img src="/new_lgx/Public/weixin/new_addfriend/images/lianjietongxunlu.png" style="width:40px;height:40px;border-radius:50%">
        </div>
        <div class="media-body">
          <h4>链接通讯录</h4>
          <p>发现通讯录好友</p>
        </div>
      </div>
    </div>
    <div class="col-xs-6 padding-right-0 padding-left-8 margin-top-16" style="padding-left:7%;">
      <div class="media">
        <div class="media-left">
          <img src="/new_lgx/Public/weixin/new_addfriend/images/weibo.png" style="width:40px;height:40px;border-radius:50%">
        </div>
        <div class="media-body">
          <h4>链接微博</h4>
          <p>发现微博好友</p>
        </div>
      </div>
    </div>
  </div>
</div>
 -->
    <!---->
   <!--  <div class="container-fluid">
     <div class="row yaoqing">
       <div class="col-xs-3">
         <img src="/new_lgx/Public/weixin/new_addfriend/images/weixin.png" style="width:30px;height:30px;border-radius:50%">
         <p>微信邀请</p>
       </div>
       <div class="col-xs-3">
         <img src="/new_lgx/Public/weixin/new_addfriend/images/qq.png" style="width:30px;height:30px;border-radius:50%">
         <p>QQ邀请</p>
       </div>
       <div class="col-xs-3">
         <img src="/new_lgx/Public/weixin/new_addfriend/images/zuijia.png" style="width:30px;height:30px;border-radius:50%">
         <p>本月最佳</p>
       </div>
       <div class="col-xs-3">
         <img src="/new_lgx/Public/weixin/new_addfriend/images/daren.png" style="width:30px;height:30px;border-radius:50%">
         <p>达人推荐</p>
       </div>
     </div>
   </div> -->


    <!-- <div class="col-xs-12 spacing">
          
    </div> -->

    <!--推荐标题-->
    <div class="container-fluid recommend">
      <div class="row">
        <div class="col-xs-6">
          <h4>推荐用户</h4>
        </div>
        <div class="col-xs-6 text-align-right">
        <a href="<?php echo U('new_addfriend',array('change'=>'1','id'=>$_SESSION['uid']));?>">
          <h4>换一批</h4>
          </a>
        </div>
      </div>
    </div>
<style type="text/css">
  .guanzhu {
    padding: 3px 6px;
    background: red;
    color: white;
    border: 1px solid red;
    border-radius: 4px;
    font-size: 12px;
}
.quxiao {
    padding: 3px 6px;
    background: #ccc;
    color: white;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 12px;
}
 a:link { 
 color: #333;
text-decoration: none; 
} 
a:visited { 
 color: #333;
text-decoration: none; 
} 
a:hover { 
  color: #333;
text-decoration: none; 
} 

</style>
<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v2): ?><!--推荐内容-->
            <div class="container-fluid recommended-content">
              <div class="row">
                <div class="col-xs-8">
         <a href="<?php echo U('new_zone',array('wid'=>$v2['wid']));?>">
                  <div class="media-left">
                    <img class="media-object touxiang" src="<?php echo M('weixin_man')->where(array('id'=>$v2['wid']))->getfield('headimgurl') ?>">
                  </div>
                  <div class="media-body">
                    <p><?php echo M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v2['wid']))->getfield('nickname') ?></p>
                   <?php $re=M('weixin_release')->where(array('wid'=>$v2['wid']))->order("addtime desc")->select(); echo M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('sign')?M('weixin_mydata')->where(array('wid'=>$v2['wid']))->getfield('sign'):'暂无签名' ?>
                  </div>
</a>
                </div>
                <div class="col-xs-4" style="padding-top:4%;padding-left:15%;">
                <?php $re3=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v2['wid']))->find(); if($re3){ ?>
                   <a href="<?php echo U('attention_delete',array('id'=>$re3['id']));?>" style="color:#000">
                   <span class="quxiao">已关注</span> 
                   </a>
                  <?php }else{ ?>
                <a href="<?php echo U('attention_add',array('aid'=>$v2['wid']));?>" style="color:#000">
                  <span class="guanzhu">+ 关注</span>
                  </a>
                  <?php } ?>
                </div>
              </div>
            </div>


          <hr style="border:0.8px solid #ccc;"><?php endforeach; endif; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_addfriend/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_addfriend/js/tianjiahaoyou.js"></script>
     
  </body>
</html>