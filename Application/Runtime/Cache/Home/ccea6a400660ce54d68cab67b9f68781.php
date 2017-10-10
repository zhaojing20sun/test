<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>后台登录</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<link href="/new_lgx/Public/home/login/css/login2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>欢迎你登录XXX平台</h1>

<div class="login" style="margin-top:50px;">
    
   
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 250px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form">
				<form action="<?php echo U('login_save');?>" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post" style="color: #FFFFFF;"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">用户名：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="username" name="username" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密&nbsp;&nbsp;码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="password" name="password" class="inputstyle"/>
                </div>
                </div>
              <!--  <input type="checkbox" name="vehicle" value="Car">记住密码 -->
                <div style="left:42%;width:auto;position:absolute"><input type="button" value="登 录" style="width:80px;text-align:center;" class="button_blue"/></div>
                  <!--   <div style="float: right;"><input type="submit" value="申请入驻" style="width:80px;" class="button_blue"/></div> -->
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>

 
</div>

</body>
<script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
  $(function($){
       $(".button_blue").click(function(){
            var username=$("#username").val()
            var password=$("#password").val()
          
            $.ajax({
               url:"<?php echo U('check_login');?>",
               type:'post',
               data:'username='+username+'&password='+password,
               success:function(msg){
               /*alert(msg)
               die*/
                if(msg=='cuo'){
                   alert("用户名或密码错误")

                }else{
                     $("form").submit()
                }

                }
            })
        })
  })
</script>
</html>