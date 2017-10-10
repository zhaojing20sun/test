<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>商品</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link href="/lgx.meixingkong.com/Public/weixin/product/fenlei/css/bootstrap.min.css" rel="stylesheet">
    
  <link rel="stylesheet" type="text/css" href="/lgx.meixingkong.com/Public/weixin/product/fenlei/css/swiper-3.4.2.min.css">
  <link rel="stylesheet" type="text/css" href="/lgx.meixingkong.com/Public/weixin/product/fenlei/css/index.css" >

    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_p49bszc4rwuhm2t9.css">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_zsx3fiuk32fbt9.css">
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
   <script type="text/javascript" src="/lgx.meixingkong.com/Public/common/js/jquery-1.8.3.min.js"></script>
    
    <script src="/lgx.meixingkong.com/Public/weixin/product/fenlei/js/index.js"></script>
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<style type="text/css">
  .navbar-custom{
  border:none;
  background: #000;
}
.icon-container .back{
  line-height: 50px;
  color: #fff;
  font-size: 12px;
  margin-right: 10px;
  float: left;
  cursor: pointer;
}

.icon-container .shutdown{
  line-height: 50px;
  font-size: 12px;
  color: #fff;
  float: left;
  cursor: pointer;
}
.custom-thumbnail i {
    display: block;
    font-size: 24px;
    color: #000;
}
.custom-thumbnail p {
    color: #000;
}
.navbar-custom i{
  display: inline-block;
  line-height: 50px;
  font-size: 20px;
  font-style: normal;
  margin-right: 100px;
  color: #fff;
}
.icon-container em{
  line-height: 50px;
  color: #fff;
  font-size: 18px;
  margin-top: 1px;
  margin-right: 10px;
  float: left;
  cursor: pointer;
}
.swiper-container {
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
  a{
    color:#000;
  }
  a:hover,
a:focus {
  color: #000;
  text-decoration: none;
}
</style>
<body>
      <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-12 icon-container">
             <em>&lt;</em>
            <span class="back" onclick="history.go(-1)">返回</span>
           
            <i style="margin-right:80px">商品</i>
          </div>
        </div>
      </div>
    </nav>          


    <div class="swiper-container" id="nav" style="position:fixed;height:40px;">
      <div class="swiper-wrapper nav" <?php  $count=count($column); if($numb+4>=$count){ $num=($count-3)*102.75; echo "style='transition-duration: 0ms; transform: translate3d(-".$num."px, 0px, 0px);'"; }elseif($numb=='') { echo "style='transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);'"; }else{ $num=($numb+1)*102.75; echo "style='transition-duration: 0ms; transform: translate3d(-".$num."px, 0px, 0px);'"; } ?>>
        <div class="swiper-slide <?php if($id=='') echo "active_column"?>" title="0">
          <a href="<?php echo U('product_column');?>" >推荐</a>
        </div>
        <?php if(is_array($column)): foreach($column as $key=>$v): ?><div class="swiper-slide <?php if($id==$v['id']) echo "active_column"?>"   >
          <a href="<?php echo U('product_column',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a>
        </div><?php endforeach; endif; ?>
      </div>
    </div>
<div style="height:10px"></div>
    <div class="swiper-container"   id="sub-swiper-container" <?php if($_GET['id']== '' and $_GET['pid']== ''): ?>style="height:0px;"  <?php else: ?> style="height:40px;position:fixed;top:89.5px;"<?php endif; ?>>
      <div class="swiper-wrapper"  id="sub-swiper">
     <?php if(is_array($erji)): foreach($erji as $key=>$v): ?><div class='swiper-slide'> <a href="<?php echo U('product_column',array('pid'=>$v['id']));?>" <?php if(I('pid')==$v['id']) echo "class='active_erji'"?>><?php echo ($v["title"]); ?></a></div><?php endforeach; endif; ?>
      </div>
    </div>
   <div <?php if($_GET['id']== '' and $_GET['pid']== ''): ?>style="margin-top:40px;"  <?php else: ?> style="margin-top:89px"<?php endif; ?>>
 
<?php if(is_array($product)): foreach($product as $key=>$v): ?><div class="media" style="padding-left:5px;">
      <div class="media-left">
        <?php $re=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getField('tel'); if($re){ ?>
          <a href="<?php echo ($v["url"]); ?>">
          <?php }else{ ?>
          <a href="<?php echo U('regist');?>" class="zhuce">
          <?php } ?>
       <img class="media-object" src="/lgx.meixingkong.com/<?php echo ($v["logo"]); ?>" width="100" height="90" alt="测试用图">
       </a>
      </div>
      <div class="media-body">
         <?php $re=M('weixin_man')->where(array('id'=>$_SESSION['wid']))->getField('tel'); if($re){ ?>
          <a href="<?php echo ($v["url"]); ?>">
          <?php }else{ ?>
          <a href="<?php echo U('regist');?>" class="zhuce">
          <?php } ?>  <p class="goods-list-title"><?php echo ($v["title"]); ?></p>   </a>
        <div class="goods-list-price">
         <!--  <span>￥</span>
         <span>129</span>
         <span>.00</span>
         <span>商家免邮</span> -->
        </div>
        <div class="goods-list-judge">
          <span>616人评价 </span>
          <span>好评率100%</span>
          <span>...</span>
        </div>
      </div>


    </div><?php endforeach; endif; ?>

    </div>      
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <script type="text/javascript">
  $(function(){
    $(".zhuce").click(function(){
        if(confirm('您的信息还不完整，请先完善个人信息')){
            location.href=$(this).attr('href')
        }
    })
  })

</script>



  <script src="/lgx.meixingkong.com/Public/weixin/product/fenlei/js/bootstrap.min.js"></script>
<script src="/lgx.meixingkong.com/Public/weixin/product/fenlei/js/swiper-3.4.2.min.js"></script>
<script>
$(function(){
    var mySwiper = new Swiper('.swiper-container',{
    slidesPerView:4,
    spaceBetween:0
  })

})

</script>

       <nav class="navbar navbar-default navbar-fixed-bottom"  style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
             <a href="<?php echo U('product');?>"> <i class="iconfont icon-shouye-copy-copy"></i>
              <p style="font-size:13px;">首页</p></a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
          <a href="<?php echo U('product_column');?>">      <i class="iconfont icon-faxian"></i>
              <p style="font-size:13px;">分类</p></a>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
              <i class="iconfont icon-dongtai"></i>
              <p style="font-size:13px;">购物车</p>
            </div>
          </div>
          <div class="col-xs-3 col-md-3" style="padding:0">
            <div class="thumbnail custom-thumbnail">
              <i class="iconfont icon-wode"></i>
              <p style="font-size:13px;">我的</p>
            </div>
          </div>
        </div>
      </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/lgx.meixingkong.com/Public/weixin/product/js/bootstrap.min.js"></script>
  </body>
</html>