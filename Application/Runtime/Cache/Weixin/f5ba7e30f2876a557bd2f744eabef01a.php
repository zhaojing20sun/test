<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title> <?php if($_GET['type']=='guanzhu'){ ?>
    <?php if($_GET['wid']==$_SESSION['wid']){ ?>
    wo的关注
    <?php }else{ ?>
     ta的关注
       <?php } ?>
     <?php }elseif(I('type')=='fins'){ ?>
      <?php if($_GET['aid']==$_SESSION['wid']){ ?>
    wo的粉丝
    <?php }else{ ?>
     ta的粉丝
     <?php } ?>
      <?php } ?>
     </title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_my/css/me.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
  </head>
  <body style="padding-top:0">


    <!--设置选项-->
    <div class="container-fluid" style="">
      <div class="row settings">

    <div id="news">
   
    <div class=" spacing">
        </div>
        <?php if($_GET['type']=='guanzhu'){ ?>
         <input type="hidden" id="wid" value="<?php echo $_SESSION['wid'] ?>">
    <?php if($man){ ?>
      <?php if(is_array($man)): foreach($man as $key=>$v): ?><div style="width:100%;border-bottom:1px solid #ccc;padding:2%;height:90px">
     <a href="<?php echo U('new_zone',array('wid'=>$v['aid']));?>">   <img src="<?php echo M('weixin_man')->where(array('id'=>$v['aid']))->getfield('headimgurl') ?>" style="width:70px;height:70px">
     </a>
      <div style="position:relative;display:inline-block;width:75%;top:-20px;left:0px;">
     <a href="<?php echo U('new_zone',array('wid'=>$v['aid']));?>" style="color:#000">    <span style="float:left"><?php echo M('weixin_mydata')->where(array('wid'=>$v['aid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v['aid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v['aid']))->getfield('nickname') ?></span>
     </a>
       <span style="font-size:13px;color:gray;float:right"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo date('Y-m-d',$v['addtime']); } ?></span>
      </div>
 <div style="position:relative;display:inline-block;width:75%;top:-25%;left:74px;">
 <a href="<?php echo U('new_zone',array('wid'=>$v['aid']));?>" style="color:gray">  
       <span style="font-size:13px;color:gray;float:left"><?php $re=M('weixin_mydata')->where(array('wid'=>$v['aid']))->getfield('sign')?M('weixin_mydata')->where(array('wid'=>$v['aid']))->getfield('sign'):"暂无签名"; if(mb_strlen($re,'utf-8')>18){ echo mb_substr($re,0,18,'utf-8' ).'...'; }else{ echo $re;} ?></span></a>
       <?php if($v[aid]!=$_SESSION['wid']){ ?>
       <span style="position:relative;top:-20px;color:window;float:right;background-color:lightgrey;border: 1px solid lightgrey;padding: 2px 10px;border-radius:3px;<?php $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['aid']))->find(); if(!$re){ echo "display:none"; } ?>" class="quxiao" title="<?php echo ($v["aid"]); ?>">取 消</span>
       <span style="position:relative;top:-20px;color:window;float:right;background-color:red;border: 1px solid red;padding: 2px 10px;border-radius:3px;<?php $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['aid']))->find(); if($re){ echo "display:none"; } ?>" class="guanzhu" title="<?php echo ($v["aid"]); ?>">关 注</span>
 <?php } ?>
      </div>

      </div><?php endforeach; endif; ?>
     <div style="padding:2%;text-align:center">
      wowo,没有更多了 ^_^
      </div>
     <?php }else{ ?>
     <div style="padding:2%;text-align:center">
      目前没有关注任何人 ^_^ ！
      </div>
    <?php } ?>

    <?php }elseif($_GET['type']=='fins'){ ?>

 <input type="hidden" id="wid" value="<?php echo $_SESSION['wid'] ?>">
    <?php if($man){ ?>
      <?php if(is_array($man)): foreach($man as $key=>$v): ?><div style="width:100%;border-bottom:1px solid #ccc;padding:2%;height:90px">
     <a href="<?php echo U('new_zone',array('wid'=>$v['wid']));?>">   <img src="<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getfield('headimgurl') ?>" style="width:70px;height:70px">
     </a>
      <div style="position:relative;display:inline-block;width:75%;top:-25%;">
     <a href="<?php echo U('new_zone',array('wid'=>$v['wid']));?>" style="color:#000">    <span style="float:left"><?php echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getfield('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getfield('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getfield('nickname') ?></span></a>
       <span style="font-size:13px;color:gray;float:right"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo date('Y-m-d',$v['addtime']); } ?></span>
      </div>
 <div style="position:relative;display:inline-block;width:75%;top:-25%;left:21.5%">
 <a href="<?php echo U('new_zone',array('wid'=>$v['wid']));?>" style="color:gray">  
       <span style="font-size:13px;color:gray;float:left"><?php $re=M('weixin_mydata')->where(array('wid'=>$v['wid']))->getfield('sign')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getfield('sign'):"暂无签名"; if(mb_strlen($re,'utf-8')>18){ echo mb_substr($re,0,18,'utf-8').'...'; }else{ echo $re;} ?></span></a>
<?php if($v[wid]!=$_SESSION['wid']){ ?>
       <span style="position:relative;top:-20px;color:window;float:right;background-color:lightgrey;border: 1px solid lightgrey;padding: 2px 10px;border-radius:3px;<?php $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['wid']))->find(); if(!$re){ echo "display:none"; } ?>" class="quxiao" title="<?php echo ($v["wid"]); ?>">取 消</span>
       <span style="position:relative;top:-20px;color:window;float:right;background-color:red;border: 1px solid red;padding: 2px 10px;border-radius:3px;<?php $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v['wid']))->find(); if($re){ echo "display:none"; } ?>" class="guanzhu" title="<?php echo ($v["wid"]); ?>">关 注</span>
 <?php } ?>
      </div>

      </div><?php endforeach; endif; ?>
      <div style="padding:2%;text-align:center">
      wowo,没有更多了 ^_^
      </div>
     <?php }else{ ?>
     <div style="padding:2%;text-align:center">
      目前没有任何人关注 (>_<) ！
      </div>
    <?php } ?>

    <?php } ?>
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
    var wid=$("#wid").val()
    $(".quxiao").click(function(){
      /*alert($(this).next().attr('title'))
      die*/
      var quxiao=$(this)
         var aid=quxiao.attr('title')

        $.ajax({
          url:"<?php echo U('attention_status');?>",
          type:'post',
          data:"wid="+wid+"&aid="+aid+"&quxiao=1",
          success:function(msg){
             if(msg>0){
              alert("取消成功")
                 quxiao.hide()
                 quxiao.next().show()
             }
          }
        })
    })
      $(".guanzhu").click(function(){
        var guanzhu=$(this)
         var aid=guanzhu.attr('title')
        $.ajax({
          url:"<?php echo U('attention_status');?>",
          type:'post',
          data:"wid="+wid+"&aid="+aid+"&guanzhu=1",
          success:function(msg){
              if(msg>0){
              alert("关注成功")
                 guanzhu.hide()
                 guanzhu.prev().show()
             }
          }
        })
    })
  })
</script>
  </body>
</html>