<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>我的收藏</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_my/css/me.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_if3n89b4s9u7syvi.css">
  </head>
  <body style="padding-top:0">
<style type="text/css">
  .release a{
    color:#333;
  }
  a{
    color:#584f60
  }
  a:focus, a:hover {
    color: #584f60;
    text-decoration: none;
}
</style>


    <div class="container-fluid" style="">
      <div class="row settings">

   
    
   
    <div id="news">
    <?php if($news){ ?>
      
        <?php if(is_array($news)): foreach($news as $k=>$v): ?><a href="<?php echo U('new_news_detial',array('id'=>$v['id']));?>"> 
        <div class="col-xs-12 news-content" style="padding-bottom:0;<?php if($k!=0) echo 'padding-top:0' ?>">
          <div class="media">
           <?php $re=M('weixin_pic')->where(array('aid'=>$v['id']))->select(); $count=count($re); if($count==3){ ?>
            <div class="media-body news-content-right">
              <p style="font-size:16px"><?php echo ($v["title"]); ?></p>
            
            <?php if(is_array($re)): foreach($re as $key=>$v2): ?><img src="/new_lgx/<?php echo ($v2["pic"]); ?>" style="width:31%  ;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail" style="margin-top:5px;">
             <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
    <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
            <?php }else {?>

 <div class="media-body news-content-right">
    <p style="font-size:16px;width:65%;float:left"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:31%;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:62%;bottom:18px;position: absolute;">
                 <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
             
           <?php }?>

          </div>
        </div>
        </a><?php endforeach; endif; ?>
     
        <div style="text-align:center;margin-top:10px;">wowo，没有更多了 ^_^</div>  
     <?php }else{ ?>
       <div style="text-align:center;padding-top:10%">
         目前，您还没有收藏任何东西！
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