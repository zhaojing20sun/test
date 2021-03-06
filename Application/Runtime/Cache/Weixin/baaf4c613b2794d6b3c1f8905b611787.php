<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>个人资料</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/new_lgx/Public/weixin/new_mydata/css/LCalendar.css">
    <link href="/new_lgx/Public/weixin/new_mydata/css/personal_profile.css" rel="stylesheet">
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <h3>个人资料</h3>
            <i class="save">保存</i>
          </div>
        </div>
      </div>
    </nav>

    <!--设置选项-->
    <div class="container-fluid">
      <div class="row personal_profile">
      
          <form   action="<?php echo U('mydata_save');?>"  method="post" enctype="multipart/form-data">
            <div class="col-xs-12 options">
          <h4 class="fl">头像</h4>
          <div class="touxiang">
            <img src="<?php echo $my['headimgurl'] ?>" class="img-responsive">
          </div>
        </div>
        <div class="col-xs-12 options">
          <h4>昵称</h4>
          <span class="nickname"><input type="text" name="nickname" value="<?php echo ($my["nickname"]); ?>" style="border:none;line-height:50px;height:40px;width:80px;text-align:right"></span>
        </div>
       
        <div class="col-xs-12 options" id="sex">
          <h4>性别</h4>
          <span id="men" style="color:#000"><select name="sex">
            <option value="1" <?php if($my['sex']==1) echo 'selected' ?>>男</option>
            <option value="2" <?php if($my['sex']==2) echo 'selected' ?>>女</option>
          </select></span>
          
        </div>
          <div class="col-xs-12 options" id="sex">
          <h4>血型</h4>
          <span id="men" style="color:#000"><select name="blood">
            <option value="1" <?php if($my['blood']==1) echo 'selected' ?>>A</option>
            <option value="2" <?php if($my['blood']==2) echo 'selected' ?>>B</option>
            <option value="3" <?php if($my['blood']==3) echo 'selected' ?>>AB</option>
            <option value="4" <?php if($my['blood']==4) echo 'selected' ?>>O</option>
          </select></span>
          
        </div>
           <div class="col-xs-12 options" id="sex">
          <h4>学历</h4>
          <span id="men" style="color:#000"><select name="education">
            <option value="1" <?php if($my['education']==1) echo 'selected' ?>>博士</option>
            <option value="2" <?php if($my['education']==2) echo 'selected' ?>>硕士</option>
            <option value="3" <?php if($my['education']==3) echo 'selected' ?>>本科</option>
            <option value="4" <?php if($my['education']==4) echo 'selected' ?>>专科</option>
             <option value="5" <?php if($my['education']==5) echo 'selected' ?>>其他</option>
          </select></span>
          
        </div>
             <div class="col-xs-12 options" id="sex">
          <h4>情感状态</h4>
          <span id="men" style="color:#000"><select name="emotion">
            <option value="1" <?php if($my['emotion']==1) echo 'selected' ?>>单身</option>
            <option value="2" <?php if($my['emotion']==2) echo 'selected' ?>>已婚</option>
            <option value="3" <?php if($my['emotion']==3) echo 'selected' ?>>离异</option>
            
          </select></span>
          
        </div>

     
        <div class="col-xs-12 options">
          <h4>出生年月</h4>
            <input id="demo1" type="text" readonly="" name="age" placeholder="点击选择日期" value="<?php echo date('Y-m-d',$my['age']) ?>"  data-lcalendar="2016-05-11,2016-05-11" style="height: 30px;
    line-height: 30px;    float: right;    width: 100px;    margin-top: 10px;" />
        </div>
   <div class="col-xs-12 spacing">
          
        </div>
<div class="col-xs-12 options">
          <h4>QQ</h4>
          <input type="text" class="city" name="qq" placeholder="QQ"  value="<?php echo ($my["qq"]); ?>" style="height:30px;line-height:30px">
        </div>

        <div class="col-xs-12 options">
          <h4>手机</h4>
          <input type="text" class="city" name="phone" placeholder="手机号码"  value="<?php echo ($my["phone"]); ?>" style="height:30px;line-height:30px">
        </div>


        <div class="col-xs-12 options">
          <h4>毕业学校</h4>
          <input type="text" class="city" name="school" placeholder="毕业学校"  value="<?php echo ($my["school"]); ?>" style="height:30px;line-height:30px">
        </div>

        <div class="col-xs-12 options">
          <h4>所在城市</h4>
          <input type="text" class="city" name="city" placeholder="点击选择城市"  value="<?php echo ($my["country"]); echo ($my["province"]); echo ($my["city"]); ?>" style="height:30px;line-height:30px">
        </div>

        <div class="col-xs-12 options">
          <h4>职位</h4>
          <input type="text" class="city" name="position" placeholder="职位"  value="<?php echo ($my["position"]); ?>" style="height:30px;line-height:30px">
        </div>

        <div class="col-xs-12 spacing">
          
        </div>
        <div class="col-xs-12 options">
          <h4>个性签名</h4>
        </div>
        <div class="col-xs-12">
        
            <div class="form-group">
              <textarea class="form-control margin-top-8" rows="3" placeholder="签名内容" name="sign"><?php echo ($my["sign"]); ?></textarea>
            </div>
            </div>
             <div class="col-xs-12 options">
          <h4>自我介绍</h4>
        </div>
        <div class="col-xs-12">
        
            <div class="form-group">
              <textarea class="form-control margin-top-8" rows="3" placeholder="自我介绍" name="intro"><?php echo ($my["intro"]); ?></textarea>
            </div>
            </div>
             <div class="col-xs-12 options">
          <h4>兴趣爱好</h4>
        </div>
        <div class="col-xs-12">
        
            <div class="form-group">
              <textarea class="form-control margin-top-8" rows="3" placeholder="兴趣爱好" name="like"><?php echo ($my["like"]); ?></textarea>
            </div>
            </div>
             <div class="col-xs-12 options">
          <h4>交友目的</h4>
        </div>
        <div class="col-xs-12">
        
            <div class="form-group">
              <textarea class="form-control margin-top-8" rows="3" placeholder="交友目的" name="purpose"><?php echo ($my["purpose"]); ?></textarea>
            </div>
            </div>




          </form>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!--   <script src="js/bootstrap.min.js"></script> -->
   <script src="/new_lgx/Public/weixin/new_mydata/js/LCalendar.js"></script>
    <script src="/new_lgx/Public/weixin/new_mydata/js/personal_profile.js"></script>
      <script type="text/javascript">
    
      $(".save").click(function(){
        $('form').submit()
      })
      $(".back").click(function(){
           window.history.go(-1)
      })
      
    </script>
        <script>
    var calendar = new LCalendar();
    calendar.init({
        'trigger': '#demo1', //标签id
        'type': 'date', //date 调出日期选择 datetime 调出日期时间选择 time 调出时间选择 ym 调出年月选择,
        'minDate': '1980-1-1', //最小日期
        'maxDate': new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate() //最大日期
    });
  /*  var calendardatetime = new LCalendar();
    calendardatetime.init({
        'trigger': '#demo2',
        'type': 'datetime'
    });
    var calendartime = new LCalendar();
    calendartime.init({
        'trigger': '#demo3',
        'type': 'time'
    });
    var calendarym = new LCalendar();
    calendarym.init({
        'trigger': '#demo4',
        'type': 'ym',
        'minDate': '1900-1',
        'maxDate': new Date().getFullYear() + '-' + (new Date().getMonth() + 1)
    });*/
    </script>
  </body>
</html>