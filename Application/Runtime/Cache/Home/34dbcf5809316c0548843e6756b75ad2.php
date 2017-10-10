<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Use IE7 mode -->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7 charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="">
<meta name="generator" content="">
<meta name="copyright" content="">
<link href="/new_lgx/Public/home/css/member_style.css" rel="stylesheet" type="text/css">
<!--<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.2.min.js"></script>

<style>
	.login_panel{
		width: 100%;
		margin: 2px;
	}
	/*导航样式*/
	.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}
.navbar-inverse {
    background-color: #616264;
    border-color: #616264;
}
.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.navbar-header {
    float: left;
}
.navbar-brand {
    float: left;
    color: #FFFFFF;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav>li {
    position: relative;
    display: block;
    float: left;
    margin-top: -1px;
    font-size: 15px;
    font-weight:bold;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    padding-top: 15px;
    padding-bottom: 16px;
    color: #FFFFFF;
}

.selected{
   color: #fff;
    background-color: #222; 
}
</style>
</head>
<body>
<div class="header">
    <div class="auto">
    	  <div class="logo">
    	  	<h1>XXX平台欢迎您！<span style="color: crimson;">admin</span></h1>
    	  </div>
          <div class="login">
                         <form class="login_panel">
                         
                           <li class="menu_li" style="float:right;"><a href="<?php echo U('index/logout');?>">退出</a></li>
                <li class="menu_li" style="float: right;"><a href="<?php echo U('index');?>">管理中心</a></li>
                <li class="menu_li" style="float:right;">欢迎您！xingyang</li>
                
              </form>
                      </div>
                      
    </div>

</div>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid auto">
    <!--<div class="navbar-header">
        <a class="navbar-brand" href="#">菜鸟教程</a>
    </div>-->
    <div>
        <ul class="nav navbar-nav">
            <li><a href="<?php echo U('index');?>" <?php if($open==1)echo 'class="selected"' ?>>我的账户</a></li>
            <li><a href="<?php echo U('set_bangding');?>" <?php if($open==3)echo 'class="selected"' ?>>微信管理</a></li>
            <li><a href="#">用户管理</a></li>
            <li><a href="<?php echo U('word');?>" <?php if($open==5)echo 'class="selected"' ?>>信息管理</a></li>
        </ul>
    </div>
	</div>
</nav>
<div class="content">
<style type="text/css">
  #left dd .nouid {
    color: #919191;
}
</style>
<div id="left">
        <!--<h2>
            <strong title="用户中心">用户中心</strong>
      
        </h2>-->
                    <dl>
           <!-- <dt class="menu">我的账户</dt>-->
              <div <?php if($open == '1'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                    <dd>
                            <a href="<?php echo U('index');?>" <?php if($active == 'index'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico1">账户概览</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('profile');?>" <?php if($active == 'profile'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico2">个人资料</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('newpm');?>" <?php if($active == 'newpm'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico3">系统消息</span></a>
                        </dd>
                    
                  <!--   <dd>
                          <a href="<?php echo U('alipay');?>" <?php if($active == 'alipay'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico5">充值管理</span></a>
                      </dd> -->
                  </div>
                  
                </dl>
             <dl>
                       
              <!-- <dt class="menu">微信管理</dt>-->
                   <div <?php if($open == '3'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                       <dd>
                            <a href="<?php echo U('set_bangding');?>" <?php if($active == 'set_bangding'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">绑定微信公众号</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('set_reply');?>"
                          <?php if($active=='set_reply'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>
                             ><span class="ico101">关注自动回复</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('set_zidong');?>" <?php if($active=='set_zidong'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico103">消息自动回复</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('set_guanjian');?>"  <?php if($active=='set_guanjian'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico102">关键词自动回复</span></a>
                        </dd>
                    
                    <dd>
                            <a href="<?php echo U('set_menu');?>" <?php if($active=='set_menu'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico104">自定义菜单</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('set_man');?>" <?php if($active=='set_man'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico104">关注会员列表</span></a>
                        </dd>
                        </div>
                </dl>
                <dl>
                 <!-- <dt class="menu">用户管理</dt>-->
                    <div style="display:none">
                       <dd>
                            <a href="<?php echo U('binding_weixin');?>"  <?php if($active=='binding_weixin'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico100">用户组管理</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('follow_reply');?>"  <?php if($active=='follow_reply'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">关注的用户</span></a>
                        </dd>
                   
                        </div>
                </dl>
                  <dl>
                 <!-- <dt class="menu">信息管理</dt>-->
                    <div  <?php if($open == '5'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                     <dd>
                            <a href="<?php echo U('word');?>"  <?php if($active=='word'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">敏感词管理</span></a>
                        </dd> 
                      <dd>
                            <a href="<?php echo U('index_pic');?>" <?php if($active=='index_pic'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">轮播图管理</span></a>
                        </dd>  
                           <dd>
                            <a href="<?php echo U('dynamic_nav');?>" <?php if($active=='dynamic_nav'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">动态页导航</span></a>
                        </dd>
                       <!--  <dd>
                           <a href="<?php echo U('nav');?>" <?php?>><span class="ico101">底部导航</span></a>
                       </dd>  -->
                    <dd>
                            <a href="<?php echo U('article');?>" <?php if($active=='article'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">新闻管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('dongtai');?>" <?php if($active=='dongtai'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">动态管理</span></a>
                        </dd>
                           <dd>
                            <a href="<?php echo U('broadcast');?>" <?php if($active=='broadcast'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">广播管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('video');?>"  <?php if($active=='video'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">视频管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('show');?>" <?php if($active=='show'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">电视管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('easy');?>" <?php if($active=='easy'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">更多服务</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('friend');?>" <?php if($active=='friend'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">交友管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('activity');?>" <?php if($active=='activity'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">活动管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('forum');?>" <?php if($active=='forum'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">论坛管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('affiche');?>" <?php if($active=='affiche'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">发布公告</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('xieyi');?>" <?php if($active=='xieyi'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">用户协议</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('us');?>"  <?php if($active=='us'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">关于我们</span></a>
                        </dd>
                   
                   
                        </div>
                </dl>
               <!--   <dl>
                <dt class="menu">权限管理</dt>
                 <div style="display:none;">
                     <dd>
                          <a href="<?php echo U('man_control');?>" <?php if($active == 'binding_weixin'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">用户管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('control');?>" <?php if($active == 'follow_reply'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">权限管理</span></a>
                      </dd>
                      </div>
                               </dl>
               <dl>
                <dt class="menu">财务管理</dt>
                  <div style="display:none;">
                     <dd>
                          <a href="<?php echo U('binding_weixin');?>" <?php if($active == 'binding_weixin'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">收入管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('follow_reply');?>" <?php if($active == 'follow_reply'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">支出管理</span></a>
                      </dd>
                      </div>
                               </dl>
                   <dl>
                           <dt class="menu">商城管理</dt>
                             <div <?php if($open == '2'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                 <dd>
                          <a href="<?php echo U('product_pic');?>" <?php if($active == 'product_pic'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico11">轮播图管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('my_store');?>" <?php if($active == 'my_store'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico11">店铺设置</span></a>
                      </dd>
                        <dd>
                          <a href="<?php echo U('product_lanmu');?>" <?php if($active == 'product_lanmu'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico8">分类管理</span></a>
                      </dd>
                 
                  <dd>
                          <a href="<?php echo U('my_goods');?>" <?php if($active == 'my_goods'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico8">商品管理</span></a>
                      </dd>
                  
                  <dd>
                          <a href="<?php echo U('alipay');?>index.php?app=my_qa" <?php if($active == 'alipay'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico18">咨询管理</span></a>
                      </dd>
                
                  <dd>
                          <a href="<?php echo U('seller_order');?>" <?php if($active == 'seller_order'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico10">订单管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('my_theme');?>" <?php if($active == 'my_theme'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico12">模版设置</span></a>
                      </dd>
                   
                    <dd>
                          <a href="<?php echo U('my_shipping');?>" <?php if($active == 'my_shipping'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico14">配送方式管理</span></a>
                      </dd>
                   
                  <dd>
                          <a href="<?php echo U('coupon');?>" <?php if($active == 'coupon'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico19">优惠券管理</span></a>
                      </dd>
                      </div>
                               </dl>
                          <dl>
               <dl>
                <dt class="menu">在线早教</dt>
                   <div  <?php if($open == '8'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                   <dd>
                          <a href="<?php echo U('education_pic');?>" <?php if($active == 'education_pic'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">轮播图管理</span></a>
                      </dd>
                     <dd>
                          <a href="<?php echo U('education_column');?>" <?php if($active == 'education_column'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">分类管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('education');?>" <?php if($active == 'education'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">教育项目</span></a>
                      </dd>
                      </div>
                               </dl>
                               <dl>
                <dt class="menu">求医问药</dt>
                 <div  <?php if($open == '9'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                  <dd>
                          <a href="<?php echo U('medicine_pic');?>" <?php if($active == 'medicine_pic'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">轮播图管理</span></a>
                      </dd>
                     <dd>
                          <a href="<?php echo U('medicine_column');?>" <?php if($active == 'medicine_column'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">分类管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('medicine');?>" <?php if($active == 'medicine'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">医疗项目</span></a>
                      </dd>
                      </div>
                               </dl>
                 <dl>
                <dt class="menu">金融理财</dt>
                 <div  <?php if($open == '10'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                     <dd>
                          <a href="<?php echo U('invest_pic');?>" <?php if($active == 'invest_pic'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">轮播图管理</span></a>
                      </dd>
                     <dd>
                          <a href="<?php echo U('invest_column');?>" <?php if($active == 'invest_column'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">分类管理</span></a>
                      </dd>
                  <dd>
                          <a href="<?php echo U('invest');?>" <?php if($active == 'invest'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">理财项目</span></a>
                      </dd>
                      </div>
                               </dl> -->
                
                <div class="adorn_bottom"></div>
    </div>
    <script type="text/javascript">
$(document).ready(function(){
  $("dl").click(function(){
      $(this).find("div").toggle();
  });
  $(".nouid").click(function(){
     alert('请先绑定微信公众号')

     location.href="<?php echo U('set_bangding');?>"
    return false
    
  })
});
</script>
<div id="right">
      <h4 style=" font-weight:normal; border-bottom:#eee solid 1px; padding:5px 5px 5px 20px; font-size:16px; height:60px;line-height: 60px; overflow:hidden;" class="remind">请使用360,火狐或者谷歌浏览器，否则部分功能不兼容</h4> 
            <div class="wrap">
                <div class="public">
                <form method="post" action="<?php echo U('wx_bangding_save');?>" enctype="multipart/form-data" id="profile_form">
                    <div class="information">
                     
                        <div class="info individual">
                            <table>
                              
                                <tbody>
                                <tr>
                                    <input type="hidden" name="userid" value="<?php echo ($weixin["userid"]); ?>"/>
                                    <td colspan="2"><div class="zc01 red" style="color:red; top:35px;">*注意：此指纹(Token) 必须与微信公众号后台一致,否则无法通信!</div></td>
                                </tr>
                                <tr>
                                    <th style="text-align:right;"><font style="color:red;">*</font>微信原始ID:</th>
                                    <td><input name="wxid" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('微信原始ID不能为空')" oninput="setCustomValidity('')"  value="<?php echo ($weixin["wxid"]); ?>">
                                   
                                    <label class="field_notice"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="text-align:right;"><font style="color:red;">*</font>微信名称:</th>
                                    <td><input name="wxname" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('微信名称不能为空')" oninput="setCustomValidity('')"  value="<?php echo ($weixin["wxname"]); ?>">
                                
                                    <label class="field_notice"></label>
                                    </td>
                                </tr>
                         
                                <tr>
                                    <th style="text-align:right;"><font style="color:red;">*</font> 指纹(Token):</th>
                                    <td><input name="token" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('指纹Token不能为空')" oninput="setCustomValidity('')"  value="<?php echo ($weixin["token"]); ?>">
                                   
                                    </td>
                                </tr>
                                       <tr>
                                    <input type="hidden" name="userid" value="<?php echo ($weixin["userid"]); ?>"/>
                                    <td colspan="2"><div class="zc01 red" style="color:red; top:35px;">*注意：请将下面系统分配的url地址填写到微信公众号的基本配置下URL（服务器地址）中!</div></td>
                                </tr>
                                    <tr>
                             <th style="text-align:right;"><font style="color:red;">*</font>接口URL:</th>
                             <td style="color:red;"><input name="url" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('接口URL不能为空')" oninput="setCustomValidity('')" readonly value="<?php echo ($server); echo U('index/bangdingweixin',array('id'=>$_SESSION['uid']));?>"/></td>
                          </tr>
                                           
                       <tr>
                          <td colspan="2"><div class="zc01 red" style="color:red; top:35px;">*注意：以下为 "开发者凭据"，请保持与微信公众后台一致！</div></td>
                                </tr>
                                <tr>
                                    <th style="text-align:right;"><font style="color:red;">*</font>AppId:</th>
                                    <td><input name="appid" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('AppId不能为空')" oninput="setCustomValidity('')"  value="<?php echo ($weixin["appid"]); ?>">
                                
                                    <label class="field_notice"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="text-align:right;"><font style="color:red;">*</font>AppSecret:</th>
                                    <td><input name="appsecret" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('AppSecret不能为空')" oninput="setCustomValidity('')"  value="<?php echo ($weixin["appsecret"]); ?>">
                                
                                    <label class="field_notice"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="text-align:right;"><font style="color:red;">*</font> EncodingAESKey:</th>
                                    <td><input name="key" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('EncodingAESKey不能为空')" oninput="setCustomValidity('')"  value="<?php echo ($weixin["key"]); ?>">
                                
                                    <label class="field_notice"></label>
                                    </td>
                                </tr>
                              <!--   <tr>
                                  <th style="text-align:right;"><font style="color:red;">*</font>微信号类型:</th>
                                  <td>
                                  <input onclick="zclick(0);" checked="" type="radio" name="wx_type" value="0">&nbsp;订阅号 &nbsp;&nbsp;
                                  <input onclick="zclick(2);" checked="" type="radio" name="wx_type" value="2">&nbsp;服务号 &nbsp;&nbsp;
                                  <input onclick="zclick(1);" type="radio" name="wx_type" value="1">&nbsp;微信认证的服务号
                                  
                                  </td>
                              </tr>
                              <tr id="zfw">
                                  <th style="text-align:right;">微信认证的服务号<br>授权回调页面域名:</th>
                                  <td>
                                      <input type="text" class="text width_normal" value="xxxx.com">
                                      <a target="_blank" href="/mall/shouquan.jpg" style="color:#85c401">（如何设置网页授权）</a>
                                  </td>
                               </tr> -->
                             <tr>
                                    <th></th>
                                    <td><input type="submit" class="btn" value="保存修改"><!-- <input type="botton" class="btn" value="微信接口" onclick="zhelp('dddd');" style="margin-left:20px; text-align:center; line-height:32px;"> --></td>
                                </tr>

                                 <tr>
                                    
                                    <td colspan="2" style="padding-top:5%"><div class="zc01 red" style="color:red; top:35px;">*注意：请确认在微信公众平台开发下的基本配置信息填写无错误，如果提交失败，请点击下面按钮格式化数据，然后重新提交！如提交绑定成功，请不要按此按钮，一经按下，需重新提交基本配置信息！</div></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td style="padding-top:2%"><input type="button" class="btn geshi" value="格式化"><!-- <input type="botton" class="btn" value="微信接口" onclick="zhelp('dddd');" style="margin-left:20px; text-align:center; line-height:32px;"> --></td>
                                </tr>
                                <script type="text/javascript">
                                 $(function($){
                                    $(".geshi").click(function(){
                                         $.ajax({
                                            url:"<?php echo U('formatting');?>",
                                            type:'post',
                                            data:'bangding=1',
                                            success:function(msg){
                                                if(msg=='1'){
                                                    alert('格式化成功！')
                                                }else{
                                                    alert('目前为原始数据，快去微信公众平台绑定基本配置吧！')
                                                }
                                            }
                                         })
                                    })
                                 }) 
                                </script>
                            </tbody></table>
                        </div>
                    </div>
                </form>
                </div>
                <div class="wrap_bottom"></div>
                <div class="alertbox">
                    <div class="public_index">
                        <div class="information_index">
                            <h3 class="title">微信接口绑定步骤
                                <p style="color:red">（ 第一次绑定微信接口，请一定仔细参照以下步骤 ）</p>
                            </h3>
                            <div class="tipsbody">
                                <div class="tb_con">
                                    <div class="tb_con_c">
                                        <ol class="steps_t">
                                            <li>
                                                <div style="position:absolute; top:0; left:-10px; height:20px; width:20px; background:#fff;"></div>
                                                <div class="stepsimg">1</div>
                                                <div class="stepsa"><a style="width:180px;" class="btn pos3" target="_blank" href="http://jingyan.baidu.com/article/e75057f2b1ecbdebc91a89f3.html"><span class="pic1">微信公众号注册流程</span></a>
                                                </div>
                                                <div class="stepstxt">无公众号者请点击查看/ 有公众号者，本步骤可跳过</div>
                                            </li>
                                             <li>
                                                <div style="position:absolute; bottom:0; left:-10px; height:35px; width:20px; background:#fff;"></div>
                                                <div class="stepsimg">2</div>
                                                <div class="stepsa"><a style="width:180px;" class="btn pos3" target="_blank" href="https://mp.weixin.qq.com/"><span class="pic3">点击前往公众号平台</span></a></div>
                                                <div class="stepstxt">微信公众号平台登录网址</div>
                                            </li>
                                            <li>
                                                <div class="stepsimg">3</div>
                                                <div class="stepsa"><a style="width:180px;" class="btn pos3" href="javascript:zhelp('dddd');"><span class="pic2">基本配置里绑定接口</span></a></div>
                                                <div class="stepstxt">点击 微信接口按钮，配置接口</div>
                                            </li>
                                          
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="clear"></div>
            <div class="adorn_right1"></div>
            <div class="adorn_right2"></div>
            <div class="adorn_right3"></div>
            <div class="adorn_right4"></div>
        </div>
        
 <!-- div content end --></div>
 <div class="footer">
        <div class="auto" style="text-align:center;">
            <p style="margin:5px 0;">
                关于我们 |
                联系我们 |
                收藏本站 |
                申请入驻 |
                微信托管 |
                版权声明           </p>
            <p>
                Copyright 2017 . 上海银图网络科技有限公司      <a href="http://www.miitbeian.gov.cn/" target="_blank">沪ICP备14025507号-1</a>     </p>
        </div>
    </div>
    </body>
    </html>