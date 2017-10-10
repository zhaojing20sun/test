<?php if (!defined('THINK_PATH')) exit();?><html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>管理后台登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/new_lgx/Public/assets/css/reset.css">
        <link rel="stylesheet" href="/new_lgx/Public/assets/css/supersized.css">
        <link rel="stylesheet" href="/new_lgx/Public/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="/new_lgx/Public/assets/js/html5.js"></script>
        <![endif]-->
        <script type='text/javascript'>
      
        var index = "<?php echo U('index');?>";
        var checkVerify = "<?php echo U('checkverify');?>";

        </script>
    </head>

    <body>

        <div class="page-container">
            <h1>管理后台登录</h1>
            <form action="<?php echo U('runlogin');?>" method="post">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <input type="text" class="Captcha" name="verify"  id="verify" placeholder="请输入验证码！"> <img src="<?php echo U('verify','','');?>" width="140" id='verify-img'/>
                <span class="msg" id="msg"></span>
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
        
        <!-- Javascript -->
        <script src="/new_lgx/Public/assets/js/jquery-1.8.2.min.js" ></script>
     <script src="/new_lgx/Public/assets/js/scripts.js" ></script>

    </body>
<div style="text-align:center;">

</div>
</html>