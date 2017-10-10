<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>商品首页</title>

    <!-- Bootstrap -->
    <link href="/lgx.meixingkong.com/Public/weixin/regist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/lgx.meixingkong.com/Public/weixin/regist/css/regist.css" rel="stylesheet">
    <script type="text/javascript" src="/lgx.meixingkong.com/Public/common/js/jquery-1.8.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default">
      <h3>注册</h3>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-offset-1 col-xs-10">    
          <form class="form-inline" action="<?php echo U('regist_save');?>">
            <div class="form-group">
              <input type="username" id="username" name='tel' class="form-control" placeholder="手机号">
            </div>
            <input type="hidden" name="page" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
          <!--   <div class="form-group">
            <input type="identifying-code" id="identifying-code" class="form-control form-control-inline" placeholder="验证码">
            <button class="btn btn-danger form-control-inline-btn">获取</button>
          </div> -->
            <div class="form-group">
              <input type="password" id="password" name='password' class="form-control" placeholder="密码">
            </div>
           <!--  <div class="form-group">
             <input type="invite code" id="invite-code" class="form-control" placeholder="邀请码">
           </div> -->
            <div class="checkbox">
              <label>
                <input type="checkbox" class="checkbox" id="checkbox">我已阅读并同意遵守<a href="<?php echo U('xieyi');?>">《用户协议》</a>
              </label>
            </div>
            <button class="btn btn-danger btn-lg btn-block" disabled="disabled" id="regist-btn">注册</button>
          </form>
        </div>
      </div>
    </div>


<script type="text/javascript">
  
$(function(){
  $("#checkbox").click(function(){
    if($("#checkbox").prop("checked") == true){
      $("#regist-btn").removeAttr("disabled");
    }else{
      $("#regist-btn").attr("disabled",'disabled');
    }
  })

})
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/lgx.meixingkong.com/Public/weixin/regist/https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/lgx.meixingkong.com/Public/weixin/regist/js/bootstrap.min.js"></script>
    <script src="/lgx.meixingkong.com/Public/weixin/regist/js/regist.js"></script>
  </body>
</html>