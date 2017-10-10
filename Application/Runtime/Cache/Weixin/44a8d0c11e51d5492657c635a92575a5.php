<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>搜索</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css?v1.0" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_baoliao/css/baoliao.css?v1.0" rel="stylesheet">
    <script type="text/javascript" src="/new_lgx/Public/common/js/wangEditor.min.js"></script>
       <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_18mogr7g839s5rk9.css">
  </head>
  <body>
<style type="text/css">
  .form-control{
    padding: 6px 2px;
    width: 100%;
 padding-left:16%;
    display: inline-block;;
  }
  .selecter{
 border-right:1px solid #ccc;
   position: absolute;
   height: 34px;
  border-radius: 4px;
 
  }
  .col-xs-offset-1{
    margin-left: 0;
    margin-top: 10px;
  }
  .back {
    display: inline-block;
    width: 18px;
    height: 18px;
    background: url(/new_lgx/Public/weixin/new_tuijian/images/icon/back.png) left center no-repeat;
    position: absolute;
    left: 16px;
    top: 16px;
}
a{
  color:#666;
}
.dinga {
    position: relative;
    top: -2px;
    padding: 1px;
    border-radius: 4px;
    margin-right: 0px;
    font-size: 10px;
    border: 0.5px solid red;
    text-align: center;
}
.notice {
    position: relative;
    top: -2px;
    padding: 1px;
    border-radius: 4px;
    border: 0.5px solid #66D9EF;
    font-size: 10px;
}
.jiana {
    position: relative;
    top: -2px;
    padding: 1px;
    border-radius: 4px;
    border: 0.5px solid red;
    font-size: 10px;
}
.news-content-right-detail{
  margin-top: 2%;
}
.headimg{
  width: 60px;
  border-radius: 4px;
  display: inline-block;
  float: left;
}
.guanzhu{
  padding: 3px 6px;
  background: red;
  color:white;
  border: 1px solid red;
  border-radius: 4px;
  font-size: 12px;
}
.quxiao{
   padding: 3px 6px;
  background: #ccc;
  color:white;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 12px;
}
</style>
    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
          <a href="<?php echo U('new_index');?>">  <i class="back"></i></a>
            <h3>搜索</h3>
              
           <!--  <i class="send"><a href="" id="tijiao">发送</a></i> -->
          </div>
        </div>
      </div>
    </nav>

    <!--表单-->
    <div class="container-fluid">
      <div class="row" <?php if($news) echo "style='background:#E8E8E8'" ?>>
       <form  id="fabu1" action=""  method="get" enctype="multipart/form-data">
        <div class="col-xs-offset-1 col-xs-10 margin-top-24" style="width:100%">
    
            <div class="form-group">
             <select class="selecter" name="type" >
               <option value="1" <?php if($_GET['type']=='1') echo 'selected' ?>>新闻</option>
               <option value="2" <?php if($_GET['type']=='2') echo 'selected' ?>>视频</option>
               <option value="3" <?php if($_GET['type']=='3') echo 'selected' ?>>用户</option>
             </select>
              <input type="text" name="title" placeholder="请输入搜索关键字"  id="title"  class="form-control" value="<?php echo ($_GET['title']); ?>">
                <i class="icon iconfont icon-chazhao" style="border-left:1px solid #ccc;height:33px;font-size:25px;color:#ccc;position:absolute;right:3%;top:3%"></i>
            </div>
        </div>
        </form>
      </div>
    </div>
<?php if($news){ ?>
<div style="width:100%;height:auto;padding:2%">

<!-- 新闻搜索 -->
<?php if($_GET['type']==1){ ?>
     <?php if(is_array($news)): foreach($news as $k=>$v): ?><a href="<?php echo U('new_news_detial',array('nid'=>$v['id'],'id'=>$_SESSION['uid']));?>"> 
        <div class=" news-content" style="padding-bottom:0;<?php if($k!=0) echo 'padding-top:0' ?>">
          <div class="media">
           <?php $re=M('weixin_pic')->where(array('aid'=>$v['id']))->select(); $count=count($re); if($count==3){ ?>
            <div class="media-body news-content-right">
              <p style="font-size:14px"><?php echo ($v["title"]); ?></p>
            
            <?php if(is_array($re)): foreach($re as $key=>$v2): ?><img src="/new_lgx/<?php echo ($v2["pic"]); ?>" style="width:31%;margin:0 3px;height:100px"><?php endforeach; endif; ?>

              <div class="news-content-right-detail">
            <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>    <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
            </div>
    <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
            <?php }else {?>

 <div class="media-body news-content-right">
    <p style="font-size:14px;width:60%;float:left;height:20px"><?php echo mb_strlen($v['title'],'utf-8')>25?mb_substr($v['title'],0,25,'utf-8').'...':$v['title'] ?></p>
   <img src="/new_lgx/<?php echo $re[0]['pic'] ?>" style="width:122px;margin:0 3px;height:80px;float:right">
      <div class="news-content-right-detail" style="width:62%;top:30px;position: relative;">
         <?php switch ($v['label']) { case '1': echo "<span class='dinga' style='color:red'>顶</span>"; break; case '2': echo "<span class='jiana' style='color:red'>荐</span>"; break; case '3': echo "<span class='dinga' style='color:red'>热</span>"; break; case '4': echo "<span class='notice' style='color:#66D9EF'>广告</span>"; break; default: echo ""; break; }?>        <span style="color:#ccc"><?php $time=time()-$v['addtime']; if(floor($time/60)<60){ echo floor($time/60).'分钟前'; }elseif(floor($time/60/60)<24){ echo floor($time/60/60).'小时前'; }elseif(floor($time/60/60/24)<30){ echo floor($time/60/60/24).'天前'; }else{ echo floor($time/60/60/24/30).'月前'; } ?></span>
                <span style="margin-left:6%;color:#ccc"><?php echo ($v["source"]); ?></span>
                <span style="float:right;color:#ccc"><?php if($v['view']>=10000){ echo round($v['view']/10000,1).'w 阅读';}else{ echo $v['view'].'阅读'; } ?></span>
              </div>
 </div>
 <hr style="border-top:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
             
           <?php }?>

          </div>
        </div>
        </a><?php endforeach; endif; ?>
<div style="text-align:center;color:gray">
 wow! 没有更多了
 </div>
<!-- 新闻搜索结束 -->
<!-- 视频搜索 -->
<?php }elseif($_GET['type']==2){ ?>



<!-- 视频搜索结束 -->
<!-- 用户搜索 -->
<?php }elseif($_GET['type']==3){ ?>
  <?php if(is_array($news)): foreach($news as $k1=>$v1): if($v1['wid']!=$_SESSION['wid']){ ?>
  <div class=" news-content" style="padding-bottom:0;<?php if($k1!=0) echo 'padding-top:0' ?>">
    <div class="media">
    <a href="<?php echo U('new_zone',array('wid'=>$v1['wid']));?>">
            <img src="<?php echo M('weixin_man')->where(array('id'=>$v1['wid']))->getfield('headimgurl') ?>" class="headimg">  
            <div style="display:inline-block;width:60%;height:60px;margin-left:1%">
                <p style=""><?php echo ($v1["nickname"]); ?></p>
                <p style="color:#ccc;font-size:13px;height:20px;overflow:hidden;margin-top:10%;"><?php
 if($v1['sign']){ echo mb_strlen($v1['sign'],'utf-8')>25?mb_substr($v1['sign'],0,25,'utf-8').'...':$v1['sign']; }else{ echo '暂无签名'; } ?></p>
            </div>
            </a>
            <div style="display:inline-block;width:20%;height:60px;margin-left:1%;float:right;">
              <p style="font-size:12px;text-align:center"><?php echo date('Y-m-d',M('weixin_man')->where(array('id'=>$v1['wid']))->getfield('subscribe_time')) ?></p>
              <p style="text-align:center">
              <?php $re=M('weixin_attention')->where(array('wid'=>$_SESSION['wid'],'aid'=>$v1['wid']))->find(); ?>

           <span class="quxiao" title="<?php echo ($v1["wid"]); ?>" <?php if($re) echo "style='display:none'" ?>>取消</span>

           
          
               <span class="guanzhu" title="<?php echo ($v1["wid"]); ?>" <?php if(!$re) echo "style='display:none'" ?>>关注</span>

           
              
              
              </p>
            </div>



    </div>
     <hr style="border-top:1px solid #ccc;margin-top:0px;margin-bottom:10px;">
 </div>
 <?php } endforeach; endif; ?>
<?php } ?>
<!-- 用户搜索结束 -->
</div>

<?php } ?>




<input type="hidden" id="wid" value="<?php echo $_SESSION['wid'] ?>">


  
    <script src="/new_lgx/Public/weixin/new_baoliao/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_baoliao/js/baoliao.js"></script>
      <script type='text/javascript' src='/new_lgx/Public/common/js/jquery-2.0.3.min.js'></script>
<script type='text/javascript' src='/new_lgx/Public/common/js/jquery.form.js'></script>
<script type="text/javascript">
  $(function(){
    $(".icon-chazhao").click(function(){
         var title=$("#title").val()
         if(title==''){
           alert('请输入搜索关键字')
         }else{
             $("#fabu1").submit()
         }
    })
    $(".guanzhu").click(function(){
         var hehe=$(this)
         var wid=$("#wid").val()
         var aid=hehe.attr('title')

         $.ajax({
             url:"<?php echo U('attention_status');?>",
             type:'post',
             data:"wid="+wid+"&guanzhu=1&aid="+aid,
             success:function(msg){
                 if(msg>0){
                   hehe.hide()
                   hehe.prev().show()
                 }
             }
         })
    })
       $(".quxiao").click(function(){
         var hehe=$(this)
         var wid=$("#wid").val()
         var aid=hehe.attr('title')

         $.ajax({
             url:"<?php echo U('attention_status');?>",
             type:'post',
             data:"wid="+wid+"&quxiao=1&aid="+aid,
             success:function(msg){
                 if(msg>0){
                   hehe.hide()
                   hehe.next().show()
                 }
             }
         })
    })

  })
</script>
  </body>
</html>