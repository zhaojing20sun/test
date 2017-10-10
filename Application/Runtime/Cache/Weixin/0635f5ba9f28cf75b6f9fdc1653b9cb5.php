<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>签到</title>
<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_371937_eppgszhlli5asjor.css">
    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_sign/css/simple-calendar.css" rel="stylesheet" type="text/css">
    <link href="/new_lgx/Public/weixin/new_sign/css/qiandao.css" rel="stylesheet">
  </head>

  <body>
<style type="text/css">
  h3{font-size: 20px;}
  .recommend i{}

</style>
    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back">我</i>
            <h3>签到</h3>
          </div>
        </div>
      </div>
    </nav>
<div class="col-xs-12 sign-days-bg" style="margin-top: 0;">
          <ul>
            <li>日</li>
            <li>一</li>
            <li>二</li>
            <li>三</li>
            <li>四</li>
            <li>五</li>
            <li>六</li>
          </ul>
          <ul id="qiandao-days" class="day">
          <?php if(is_array($time_arr)): foreach($time_arr as $key=>$v): ?><li title="<?php echo ($v["day"]); ?>" <?php $re=M('weixin_sign')->where(array('userid'=>$_SESSION['uid'],'wid'=>$_SESSION['wid'],'day'=>$v['day1']))->find(); if($re){echo "class='selected1'"; } ?> style="position:relative"><?php echo ($v["day"]); ?>
 <?php if(date('Y-m-d',time())==$v['day1']) echo '<img src="/new_lgx/Public/weixin/new_sign/images/sanjiao.png" style="position:absolute;top:84%;left:32%;color:#fff;width:16px;height:16px;">' ?>
            </li><?php endforeach; endif; ?>
          </ul>
        </div>
    <div id="container">
      
    </div>
<input type="hidden" id="order" value="<?php echo ($order); ?>">
    <div class="container-fluid sign">
      <div class="row">
        <div class="col-xs-12">
          <a href="#" id="sign">
       <?php $re3=M('weixin_sign')->where(array('wid'=>$_SESSION['wid'],'day'=>date('Y-m-d',time())))->find(); if($re3){ ?>
  <img src="/new_lgx/Public/weixin/common/images/signed.png" class="img-responsive" style="width:100%;height:28px;" id="sign-img">
      <?php }else{ ?>
  <img src="/new_lgx/Public/weixin/common/images/sign.png" class="img-responsive" style="width:100%;height:28px;" id="sign-img">
      <?php } ?>
        

          </a>

        </div>
<input type="hidden" name="now" value="<?php echo date('Y-m-d',time())?>">
<?php if(is_array($time)): foreach($time as $key=>$v): ?><input type="hidden" class="time" value="<?php echo ($v["day"]); ?>-<?php echo ($v["name"]); ?>" ><?php endforeach; endif; ?>
        <div class="col-xs-12 sign-days-bg">
          <ul>
            <li>1天</li>
            <li>2天</li>
            <li>3天</li>
            <li>4天</li>
            <li>5天</li>
            <li>6天</li>
            <li>7天</li>
          </ul>
          <ul class="day1">
            <?php  for ($i=0; $i <7 ; $i++) { ?>
       <li <?php if($order[0]['order']==($i+1)) echo 'class="selected"' ?>>+<?php echo ($i+1); ?></li>
              <?php
 } ?>
          </ul>
        </div>

        <div class="col-xs-12 recommend">
          <h3>今日签到推荐网友</h3>
         <a href="<?php echo U('new_dongtai');?>"> <i></i></a>
        </div>
          <?php if(is_array($today_sign)): foreach($today_sign as $k1=>$v1): ?><div class="<?php if($k1%2==0) echo 'col-xs-offset-1' ?> col-xs-5 user-trends padding-8">
              <div class="thumbnail">
                <img src="/new_lgx/<?php echo ($v1["path"]); ?>" style="width:154px;height:156px" class="img-responsive" alt="推荐网友" onerror="this.src='/new_lgx/Public/common/images/nopic.gif'">
              </div>
              <div class="caption">
              <!--   <h5>关注最多人的动态</h5> -->
                <div class="media">
                  <div class="media-left">
                    <a href="javascript:;">
                      <img src="<?php echo M('weixin_man')->where(array('id'=>$v1['wid']))->getfield('headimgurl') ?>" alt="网友头像" class="media-object margin-top-8" style="width:30px;border-radius:15px;">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="fl margin-top-8 margin-left-8">
                      <span class="user-name"><?php echo M('weixin_mydata')->where(array('wid'=>$v1['wid']))->getfield('nickname') ?></span>
                      <p style="height:40px;" ><?php echo M('weixin_mydata')->where(array('wid'=>$v1['wid']))->getfield('sign') ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div><?php endforeach; endif; ?>

      </div>
    </div>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_sign/js/bootstrap.min.js"></script>
  
    
    <script>
      var mycalendar = new SimpleCalendar('#container');
   
   
    </script>

    <script type="text/javascript">
   
      $(".back").click(function(){
           window.history.go(-1)
      })
  
    var  myDate=new Date()
   /* $(".day>li").click(function(){
     $(".day>li").removeClass('selected')
      $(this).addClass('selected')
    })*/
      $("#sign-img").click(function(){
         var day=myDate.getDate()
         //alert(day)
              $.ajax({
           type:"post",
           url:"<?php echo U('today_sign');?>",
           data:"day="+day,
           success:function(msg){
        /*alert(msg)
        die*/
              if(msg=='yi'){
                alert('当天已签到')
               }else{
          alert('签到成功')
        /*  alert(day)
          $(".day>li:eq("+day+")").addClass('selected')
                $(".day1>li)").attr('class','')
                var tian=parseInt(msg)-1
                 $(".day1>li:eq("+tian+")").attr('class','selected')
                */
                location.reload()
               }
           }
         })
      })
     
  
    
       
    </script>
     
  </body>
</html>