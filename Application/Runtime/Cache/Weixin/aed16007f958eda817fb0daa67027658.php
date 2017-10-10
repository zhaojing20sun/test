<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>个人主页</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_my/css/me.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
    
      <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_j14hylnlt66wp14i.css">
  </head>
  <body style="padding-top:0">
<style type="text/css">
  .release a{
    color:#333;
  }
</style>
<!--     顶部导航
   <nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 nav-container">
    <a href="<?php echo U('new_message');?>">
      <i class="letter"></i> </a>
      <h3>我</h3>
  
      <a href="<?php echo U('new_set');?>"><i class="setup"></i></a>
    </div>
  </div>
</div>
  </nav>  -->

    <!--用户-->
    <div class="container-fluid">
      <div class="row user" style="height:200px;background:url(<?php echo $my['headimgurl']?>); background-repeat: no-repeat;
            background-position: center;background-size: cover;filter: blur(10px);-webkit-filter: blur(10px);">

      </div>

        <div class="col-xs-12" style="position:absolute;top:6%;left:0px;">
          <div class="media" style="text-align:center">

            <div style="">
              <a href="<?php echo U('new_mydata');?>" style="color:white">
                <img src="<?php echo ($my["headimgurl"]); ?>" alt="头像" class="touxiang media-object" style="width:75px;border-radius:50%;display:inline-block" onerror="this.src='/new_lgx/Public/common/images/defaultheader.png'">
               
              </a>

            </div>
            <div style="margin-top:2%;color:white">
            <span><?php echo M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>I('wid')))->getfield('nickname'):M('weixin_man')->where(array('id'=>I('wid')))->getfield('nickname') ?> <?php if($my['sex']==1){ ?><i class="icon iconfont icon-nansheng1" style="font-size:18px;color:#66D9EF;" ></i><?php }elseif($my['sex']==2){ ?><i class="icon iconfont icon-nvsheng1" style="font-size:18px;color:#E46AA3;" ></i><?php } ?></span>
        <div style="margin-top:2%">
<a href="<?php echo U('new_shou',array('wid'=>I('wid')));?>" style="color:white">
<span style="position:relative;left:-10%">收藏:<?php echo $shou?$shou:0; ?></span> 
</a>
<span style="position:relative;left:-5%">|</span> <a href="<?php echo U('new_attention',array('wid'=>I('wid'),'type'=>'guanzhu'));?>" style="color:white"><span>关注:<?php echo ($guanzhu); ?></span></a> <span style="position:relative;left:5%">|</span><a href="<?php echo U('new_attention',array('aid'=>I('wid'),'type'=>'fins'));?>" style="color:white"><span style="position:relative;left:10%">粉丝:<?php echo ($fins); ?></span></a>
</div>

            </div>
 
            <!-- <div class="media-body">
              <h4 class="media-heading"><?php echo ($my["nickname"]); ?></h4>
              <a href="<?php echo U('new_mydata');?>">
              <i class="editor"></i>
              <i class="jiantou"></i>
              </a>
              <p class="personal-sign" style="width:80%;text-indent:1em;height:34px;text-align:left;" title="<?php echo ($my["sign"]); ?>"><?php if($my['sign']==''){ ?>个性签名<?php }else{ echo ($my["sign"]); } ?></p>
            </div> -->

          </div>
        </div>
    </div>

    <!--用户动态-->
  <!--   <div class="container-fluid">
    <div class="row user-dongtai">
      <div class="col-xs-4">
        <span class="user-dongtai-num">0</span>
        <span>动态</span>
      </div>
      <div class="col-xs-4">
        <span class="user-dongtai-num">0</span>
        <span>关注</span>
      </div>
      <div class="col-xs-4">
        <span class="user-dongtai-num">0</span>
        <span>粉丝</span>
      </div>
    </div>
  </div> -->

    <!--设置选项-->
    <div class="container-fluid" style="">
      <div class="row settings">

      <div style="width:100%;border-bottom:1px solid #ccc;height:40px;">
       <div style="width:40%;display:inline-block;text-align:center;line-height:40px;padding-left:19%;" id="left"><span style="border-bottom:2px solid red;display:block;position:relative;top:39px;" id="line"></span>发表(<?php echo count($release); ?>)</div>
     
       <div style="width:40%;display:inline-block;float:right;text-align:center;line-height:40px;padding-right:17%" id="right"> 资料</div>
     </div>
    
    <!--    <div style="width:100%;padding:2%">
    <img src="http://wx.qlogo.cn/mmopen/vv8lLNoNRezEBGbR0EuSzvL0quvquX4Bwu6NKico0Av2QPvx68MFXs5DxibEXmX6JoDXM6vpTGdib3yfzP5fDPiaaEzcia7Xeiblp3/0" style="width:40px;height:40px;"> <span style="position:relative;top:-10px;left:3%;font-size:14px;">流星星</span>
    <span style="position:relative;top:10px;left:-8%;color:#ccc;font-size:13px;">25天前</span>
    <p style="margin-top:2%;font-size:15px;">6月7日--6月8日高考期间，参加高考的登封考生可凭准考证免费坐车</p>
    <img src="/new_lgx/Public/common/images/nopic.gif" style="width:30%;margin-left:1%">
         <img src="/new_lgx/Public/common/images/nopic.gif" style="width:30%;">
         <img src="/new_lgx/Public/common/images/nopic.gif" style="width:30%;">
    <div style="text-align:right;margin-right:5px;margin-top:8px;font-size:12px;">
    <i class="icon iconfont icon-liulan" style="font-size:16px;position:relative;top:1px;"></i> 358 &nbsp; <i class="icon iconfont icon-pinglun" style="font-size:17px;position:relative;top:4px;"></i> 32
    </div>
    </div>  -->
    <div id="news">
    <?php if($release){ ?>
      <?php if(is_array($release)): foreach($release as $key=>$v): ?><div class=" spacing">
        </div>
        <div style="width:100%;padding:2%" class="release">
        <a href="<?php echo U('new_release',array('nid'=>$v['id']));?>">
        <img src="<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getfield('headimgurl') ?>" style="width:40px;height:40px;"> 

        <div style="width:60%;display:inline-block;position:relative;top:-10px;left:3%;font-size:14px;"><?php echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getfield('nickname') ?></div>
        <div style="width:60%;display:inline-block;position:relative;top:-20px;left:14%;color:#ccc;font-size:13px;"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></div>
        <p style="margin-top:2%;font-size:15px;max-height:42px;overflow:hidden"><?php echo htmlspecialchars_decode($v['content']) ?></p>
        <div style="">
        <?php $img=M('weixin_release_pic')->where(array('aid'=>$v['id']))->limit('3')->select(); $count1=count($img); if($count1>2){ ?>
            <?php foreach ($img as $key => $value) { ?>
        <img src="/new_lgx<?php echo ($value["pic"]); ?>" style="width:31%;height:90px;margin-left:1%">
           <?php } ?>
        
        <?php }elseif($count1>0){ ?>
         <img src="/new_lgx<?php echo ($img[0]["pic"]); ?>" style="width:31%;height:90px;margin-left:1%">
        <?php } ?>
        </div>
       <!--  <img src="/new_lgx/Public/common/images/nopic.gif" style="width:30%;">
       <img src="/new_lgx/Public/common/images/nopic.gif" style="width:30%;"> -->
        <div style="text-align:right;margin-right:5px;margin-top:8px;font-size:12px;">
        <i class="icon iconfont icon-liulan" style="font-size:16px;position:relative;top:1px;"></i> <?php if($v['view']>=10000){ echo round($v['view']/10000,1);}else{ echo $v['view']; } ?> &nbsp; <i class="icon iconfont icon-pinglun" style="font-size:17px;position:relative;top:4px;"></i> <?php echo M('weixin_release_message')->where(array('aid'=>$v['id'],'type'=>1))->count() ?>
        </div>
        </a>
        </div><?php endforeach; endif; ?>
     <?php } ?>
     <div class=" spacing">
        </div>
        <div style="text-align:center;margin-top:10px;">wowo，没有更多了 ^_^</div>  
</div>

<div id="intro"  style="display:none">
<div class=" spacing">
        </div>
<?php if($my['age']){ ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  生日        <span style="float:right;margin-right:3%;"><?php echo (date('Y-m-d',$my["age"])); ?></span>
</div>
<?php } ?>
<?php if($my['position']){ ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  职位          <span style="float:right;margin-right:3%;"><?php echo ($my["position"]); ?></span>
</div>
<?php } ?>
<?php if($my['sex']){ ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  性别<span style="float:right;margin-right:3%;"><?php switch ($my['sex']) { case '1': echo '男'; break; case '2': echo '女'; break; } ?></span>
</div>
<?php } ?>
<?php if($my['blood']){ ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  血型<span style="float:right;margin-right:3%;"><?php switch ($my['blood']) { case '1': echo 'A'; break; case 'B': echo '女'; break; case '3': echo 'AB'; break; case '4': echo 'O'; break; } ?></span>
</div>
<?php } ?>

<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  QQ<span style="float:right;margin-right:3%;"><?php echo ($my["qq"]); ?></span>
</div>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  手机<span style="float:right;margin-right:3%;"><?php echo ($my["phone"]); ?></span>
</div>
<?php if($my['education']){ ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  学历<span style="float:right;margin-right:3%;"><?php switch ($my['education']) { case '1': echo '博士'; break; case '硕士': echo '女'; break; case '3': echo '本科'; break; case '4': echo '专科'; break; case '5': echo '其他'; break; } ?></span>
</div>
<?php } ?>
<?php if($my['emotion']){ ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  情感状态<span style="float:right;margin-right:3%;"><?php switch ($my['emotion']) { case '1': echo '单身'; break; case 'B': echo '已婚'; break; case '3': echo '离异'; break; } ?></span>
</div>
<?php } ?>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  毕业学校<span style="float:right;margin-right:3%;"><?php echo ($my["school"]); ?></span>
</div>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  所在城市<span style="float:right;margin-right:3%;"><?php echo ($my["city"]); ?></span>
</div>
<?php if($my['intro']){ ?>
<div class="col-xs-12 spacing">
          
        </div>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  自我介绍 
</div>

<div style="text-indent:2em;line-height:18px;padding:2%;border-bottom:1px solid #ccc;width:100%;">
  <?php echo ($my["intro"]); ?>
</div>
<?php } ?>
<?php if($my['like']){ ?>
<div class="col-xs-12 spacing">
          
        </div>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  兴趣爱好
</div>
<div style="text-indent:2em;line-height:18px;padding:2%;border-bottom:1px solid #ccc;width:100%;">
  <?php echo ($my["like"]); ?> 
</div>
<?php } ?>
<?php if($my['purpose']){ ?>
<div class="col-xs-12 spacing">
          
        </div>
<div style="line-height:39px;padding-left:2%;border-bottom:1px solid #ccc;width:100%;">
  交友目的
</div>
<div style="text-indent:2em;line-height:18px;padding:2%;border-bottom:1px solid #ccc;width:100%;">
  <?php echo ($my["purpose"]); ?>
</div>
<?php } ?>


 </div>

        </div>
      </div>
    </div>

    <!--底部导航-->
    <!-- <nav class="navbar navbar-default navbar-fixed-bottom navbar-bottom-custom navbar-bottom-height">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3 navbar-bottom-item">
            <a href="<?php echo U('new_index');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_my/images/icon/shouye.png"><p>首页</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a href="<?php echo U('new_faxian');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_my/images/icon/faxian.png"><p>发现</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a href="<?php echo U('new_dongtai');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_my/images/icon/dongtai.png"><p>动态</p></a>
          </div>
          <div class="col-xs-3 navbar-bottom-item">
            <a href="<?php echo U('new_my');?>" data-ajax="false"><img src="/new_lgx/Public/weixin/new_my/images/icon/wo.png"><p>我</p></a>
          </div>
        </div>
      </div>
    </nav> -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_my/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_my/js/me.js"></script>
    <script type="text/javascript">
  $(function(){
    $("#right").click(function(){
$("#line").animate({left: '175px'}, "normal");
$("#intro").show()
$("#news").hide()
    })
     $("#left").click(function(){
$("#line").animate({left: '0px'}, "normal");
$("#intro").hide()
$("#news").show()
    })
  })
</script>
  </body>
</html>