<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Use IE7 mode -->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7 charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="" />
<meta name="generator" content="" />
<meta name="copyright" content="" />
<link href="/new_lgx/Public/home/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/new_lgx/Public/home/js/jquery.js" charset="utf-8"></script>

</head>
<body>
<div  class="header">
    <div class="auto">
    	  <div class="logo"><img src="/new_lgx/Public/home/images/logo.png"   /></div>
          <div class="login">
            <?php if(isset($_SESSION['username'])&&$_SESSION['username']!="") {?>
             <form class="login_panel"  >
                <li class="menu_li">欢迎您！<?php echo $_SESSION['username']; ?></li>
                <li class="menu_li"><a href="<?php echo U('member/index'); ?>">管理中心</a></li>
                <li class="menu_li"><a href="<?php echo U('index/logout'); ?>">退出</a></li>
                
              </form>
            <?php }else{ ?>
              <form class="login_panel" action="<?php echo U('index/login');?>" method="post">
        <!--         <li class="menu_li">用户名：<input type="text" class="l_text" name="username" id="username"></li>
        <li class="menu_li">密码：<input type="password" class="l_text" name="password" id="password"></li> -->
                <li class="menu_li"><input type="button" onclick="window.location.href='<?php echo U('login');?>';"  value="登录" class="lr_btn"><input onclick="window.location.href='<?php echo U('register');?>';" type="button" value="申请入驻" class="lr_btn"></li>
             </form>
             <?php } ?>
          </div>
    </div>
<script type="text/javascript">
  $(function($){
     /*   $(".lr_btn").click(function(){
            var username=$("#username").val()
            var password=$("#password").val()
            $.ajax({
               url:"<?php echo U('check_login');?>",
               type:'post',
               data:'username='+username+'&password='+password,
               success:function(msg){
               //alert(msg)
                if(msg=='null'){
                  alert("用户名或密码错误")
                }else{
                     $(".login_panel").submit()
                }
                }
            })
        })*/
  })
</script>
</div>

<style>
    .footer{
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
   <div class="reg_panel auto">
            <form class="reg_box" id="register_form" method="post" action="<?php echo U('register_save');?>">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3"><h2>填写注册信息</h2></td>
                        </tr>
                        <tr>
                            <td><label>用户名：</label></td>
                            <td><input onkeyup="value=value.replace(/[\s]/g,'')" id="user_name" name="username" type="text" class="text_box"></td>
                              <td class="padding3 fontColor4"><label class="field_notice">用于登录的名字&nbsp;(3~12个字符，可使用字母、数字)</label><label id="checking_user" class="checking">检查中...</label></td>
                            
                        </tr>
                        <tr>
                            <td><label>密&nbsp;&nbsp;&nbsp;码：</label></td>
                            <td><input onkeyup="value=value.replace(/[\s]/g,'')" type="password" id="password" name="password" class="text_box"></td>
                             <td class="padding3 fontColor4"><label class="field_notice">您的密码</label></td>
                        </tr>
                        <tr>
                            <td><label>确认密码：</label></td>
                            <td><input onkeyup="value=value.replace(/[\s]/g,'')" type="password" name="password_confirm" class="text_box"></td>
                               <td class="padding3 fontColor4"><label class="field_notice">重复输入您的密码</label></td>
                        </tr>
                        <tr>
                            <td><label>电子邮箱：</label></td>
                            <td><input name="email" type="text" class="text_box"></td>
                             <td class="padding3 fontColor4"><label class="field_notice">请输入一个有效的电子邮箱地址</label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="agree" value="1"> <label for="clause">我已阅读并同意 <a class="agreement" target="_blank" href="index.php?app=article&amp;act=system&amp;code=eula">用户服务协议</a></label></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input type="submit"  class="btn_box" value="立即注册"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <a href="<?php echo U('index');?>" class="to_log"></a>
        </div>
  
  
﻿
    <!---------底部-------------->
     
    <div class="footer">
        <div class="auto">
            <p style="margin:5px 0;">
                关于我们 |
                联系我们 |
                收藏本站 |
                申请入驻 |
                微信托管 |
                版权声明           </p>
            <p>
                Copyright 2017 . 上海银图网络科技有限公司      <a href='http://www.miitbeian.gov.cn/' target= _blank >沪ICP备14025507号-1</a>     </p>
        </div>
    </div>
</body>
</html>