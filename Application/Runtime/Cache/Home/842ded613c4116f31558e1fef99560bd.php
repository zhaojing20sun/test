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
<script type="text/javascript" src="/new_lgx/Public/common/layer/layer.js"></script>
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
                        <dd>
                            <a href="<?php echo U('nav');?>" <?php if($active=='nav'){ echo 'class="active"';}elseif(!$_SESSION['uid']){ echo 'class="nouid"';}else{ echo 'class="normal"';} ?>><span class="ico101">底部导航</span></a>
                        </dd> 
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
<link href="/new_lgx/Public/home/css/member_reply.css" rel="stylesheet" type="text/css" />

<div id="right">    
      <form method="post" action="<?php echo U('set_reply_save');?>" enctype="multipart/form-data">
  
  <table width="100%" border="0" cellpadding="0" cellspacing="1" class="fromtj">
  <tbody><tr>
    <th width="13%"></th>
    <td width="87%"><div class="messg">当客户关注您的公众账号时，将自动发送此消息给客户。 </div></td>
  </tr>
    <tr>
      <th colspan="2">
    <div class="replyList">
                                            <div class="cLine">
                                                <p class="left b">回复内容</p>
                                                <p class="right red">（注意：禁止发布色情、反动、暴力等违规内容。）</p>
                                            </div>
                                            <div class="cntBox">
                     <p class="left">回复类型：
                     <span id="returnType" rtype="text">
               <?php if($image['style']==0){ ?>  文本 <?php }else{ ?> 多图文<?php } ?>
                 </span>
                 </p>

                         <span style=" <?php if($image['style']==0){ ?>display: block;<?php }else{ ?> display:none<?php } ?>" id="spnAddLink" class="addlink">
                                                    <a title="插入指定链接标记" href="#" id="link">插入链接</a>
                   </span>
                                               
                     
                                                                  
                                                <div class="clear"></div>
                                            </div>
                     <!--  //回复文字消息 -->
                                            <div class="replyItems showWords showFile showAppMsg" style=" <?php if($image['style']==0){ ?>display: block;<?php }else{ ?> display:none<?php } ?>">
                      
                                                <div  id="divReplyWords">
                                                <input type="hidden" name="style" id="style" value="0" />
                                                <input type="hidden" name="userid" id="userid" value="<?php echo ($image["userid"]); ?>" />
                                                    <textarea name="content" id="txtReplyWords"  placeholder="请在此输入您的回复内容，1000字以内"  class="txtarea"><?php if($image['style']==0){ echo ($image["content"]); } ?></textarea>
                                                </div> </div>
                                    
                      <!--  //回复图文消息 -->
                                                <div id="divRelpyNews" class="msg-item-wrapper" style=" <?php if($image['style']==0){ ?>display: none;<?php }else{ ?> display:block<?php } ?>">
                                                    <div class="msg-item multi-msg">
                                                        <div class="appmsgItem" flag="0">
                                                            <p class="msg-meta"><span class="msg-date">&nbsp;</span></p>
                                                            <div class="cover">
                                                                <p id="pDefaultTip" class="default-tip" style="<?php if($image['style']==1) echo 'display:none'?>">封面图片</p>
                                                                <div class="msg-t h4">
                                                                    <span id="spnTitle" class="i-title"><?php if($image) echo $image['title']?></span>
                                                                </div>
                                                                <ul class="abs tc sub-msg-opr">
                                                                    <li class="b-dib sub-msg-opr-item">
                                                                        <a href="javascript:;" class="th icon18 iconEdit" data-rid="1">编辑</a>
                                                                    </li>
                                                                </ul>
                                                                <img id="imgPic" class="i-img" style="" src="/new_lgx/<?php echo ($image["content"]); ?>">
                                                                <input name="urlTitle" id="urlTitle" type="hidden" value="">
                                                                                                                                
                                                            </div>
                                                        </div>
                            
                                                         <?php if($image_arr){ ?>  
                                                        <?php if(is_array($image_arr)): foreach($image_arr as $key=>$v): ?><div class='rel sub-msg-item appmsgItem'  flag='1'>
<span class='thumb'><span class='default-tip' style='display:none'>缩略图</span>
<img src="/new_lgx/<?php echo ($v["content"]); ?>" class='i-img' ></span>
<div class='msg-t h4'><span class='i-title'><?php echo ($v["title"]); ?></span></div>
<ul class='abs tc sub-msg-opr'>
<li class='b-dib sub-msg-opr-item'><a href='javascript:;' class='th icon18 iconEdit' data-rid="<?php echo ($v["order"]); ?>">编辑</a></li>
<li class='b-dib sub-msg-opr-item'><a href="<?php echo U('set_reply_delete',array('id'=>$v['id']));?>" class='th icon18 iconDel' data-rid="<?php echo ($v["order"]); ?>">删除</a></li>
</ul></div><?php endforeach; endif; ?>
                                                         <?php } ?>                         
                                                        <div class="sub-add">
                                                            <a href="javascript:;" class="block tc sub-add-btn" >
                                                          <span class="vm dib sub-add-icon"></span> 
                                                            增加一条</a>
                                                        </div>
                                                 
                                                    </div>
                                                </div>
                          <script type="text/javascript">
                              $(function($){
                               $("div[flag=0]").hover(function(){
                                  $(this).attr('class','appmsgItem sub-msg-opr-show')
                               },function(){
                                $(this).attr('class','appmsgItem')
                               })
                                $(".btnAdd").click(function(){
                                  $("#style").val("1")
                                  $("#returnType").html("多图文");
                                  $("#spnAddLink").hide();
                                  $("input[name='style']").val('1')
                                  $(".replyItems").hide();
                                  $("#divRelpyNews").show()
                                  $("#spnReplyWordsInfo").hide()
                                  $("#spnReplyNewsInfo").show()
                                })
                                $(".addWords").click(function(){
                                  $("#style").val("0")
                                  $("#returnType").html("文本");
                                  $("#spnAddLink").show();
                                  $(".replyItems").show();
                                     $("input[name='style']").val('0')
                                  $("#divRelpyNews").hide()
                                  $("#spnReplyWordsInfo").show()
                                  $("#spnReplyNewsInfo").hide()
                                })

                               $(".sub-add-btn").click(function(){
                                   var len=$(".sub-msg-item").length
                                   var num=len*1+2

                                     if(len<9){
                                       $(".sub-add").before("<div class='rel sub-msg-item appmsgItem'  flag='1'><span class='thumb'><span class='default-tip' >缩略图</span><img src='' class='i-img' style='display:none'></span><div class='msg-t h4'><span class='i-title'></span></div><ul class='abs tc sub-msg-opr'><li class='b-dib sub-msg-opr-item'><a href='javascript:;' class='th icon18 iconEdit' data-rid='"+num+"'>编辑</a></li><li class='b-dib sub-msg-opr-item'><a href='javascript:;' class='th icon18 iconDel' data-rid='"+num+"'>删除</a></li></ul><input type='hidden' name='urlTitle'></div>")
                                     }
                                   
                               })
                               $(document).on("click", ".iconDel", function() {
                                    var parent=$(this).parents('.appmsgItem')
                                   parent.remove()
                                })
                              $(document).on("mouseover", ".sub-msg-item", function() {
                                       $(this).attr('class','rel sub-msg-item appmsgItem sub-msg-opr-show')
                                }).on("mouseout",".sub-msg-item",function(){
                                     $(this).attr('class','rel sub-msg-item')
                                });
                               

                              })

                                 </script>  
                                 <script>
;!function(){


//插入链接
$('#link').on('click', function(){
layer.open({
  type: 1,
  title:'插入链接目标',
  skin: 'layui-layer-rim', //加上边框
  area: ['420px', '240px'], //宽高
  content: "<table id='TableList' width='100%' class='fromtj' border='0' cellspacing='0' cellpadding='0'><tbody><tr><td width='90' height='30'><span class='red'>*</span>链接文字：</td><td><input required name='linktitle' type='text' id='txtTitle' maxlength='100' class='cd'></td></tr><tr><td class='tdtitle' height='30'><span class='red'>*</span>链接目标：</td><td><input required type='text' class='cd' name='link' id='txtTargetDesc' maxlength='300'></td></tr><tr><td class='tdtitle'>&nbsp;</td><td><br><br><input type='submit' id='link_add' class='btn btn_submit' value=' 确 定 ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' onlick='javascript:alert(1);  '><br><br></td></tr></tbody></table>"});
});
//链接确定事件
  $(document).on("click", "#link_add", function() {
   var linktitle=$("input[name='linktitle']").val()
   var link=$("input[name='link']").val()
   var content=$("#txtReplyWords").val()
   if(link!='' && linktitle!=''){
     $("#txtReplyWords").val(content+"<a href='"+link+"'>"+linktitle+"</a>")
   var index = layer.index; //获取当前弹层的索引号
layer.close(index);
}else{
      alert("请填写完整链接信息") 
} })

  $(document).on("click", ".iconEdit", function() {
var order=$(this).attr('data-rid')
var userid=$("#userid").val()
if(order==1){
  layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['570px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_reply_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：<input type='input' required name='title' class='txt350' maxlength='200' value='<?php echo ($image["title"]); ?>'><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='<?php echo ($image["url"]); ?>' name='url' maxlength='300'>  </p><?php if(!$image['style']==1){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/<?php echo ($image["content"]); ?>' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' <?php if($image['content']==''){ ?>required<?php } ?>  name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><?php if($image['style']==1){ ?><input type='hidden' name='id' value='<?php echo ($image["id"]); ?>'/><?php } ?><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
}else{
// alert(userid)
  $.ajax({
    url:"<?php echo U('open_image1');?>",
    type:'post',
    data_type:'json',
    data:'order='+order+'&userid='+userid,
    success:function(msg){

      if(msg!=null){
 layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_reply_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：<input type='input' required name='title' class='txt350' maxlength='200' value='"+msg['title']+"'><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='"+msg['url']+"' name='url' maxlength='300'>  </p><?php if(!"+msg['id']+"){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/"+msg['content']+"' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file'  name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><?php if($image['style']==1){ ?><input type='hidden' name='id' value='"+msg['id']+"'/><?php } ?><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
      }else{
        layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['570px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_reply_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：<input type='input' required name='title' class='txt350' maxlength='200' value=''><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='' name='url' maxlength='300'>  </p><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none' /></div><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><?php if($image['style']==1){ ?><input type='hidden' name='id' value=''/><?php } ?><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
      }
    
    }
  })

}
                                })
/* $(document).on("click", ".image_submit", function() {

     var title=$("input[name='title']").val()
     var url=$("input[name='url']").val()
     var urlimage=$("input[name='urlimage']").val()
      if(title!='' && url!='' && urlimage!=''){
         $("form").submit() 
             
      }else{
        alert("请填写完整的图文信息")
      }
           
            
   var index = layer.index; //获取当前弹层的索引号
layer.close(index);
                                })*/

 $(document).on("click", ".quxiao", function() {
   var index = layer.index; //获取当前弹层的索引号
layer.close(index);
                                })
 $(document).on("click",".btn-primary",function(){
     var val=$("#txtReplyWords").val()
     if(val!=''){
      $("form").submit()
     }
 })
}();
</script>
  
                                            <div class="btnArea float-p">
                                                <span class="red left" id="snpReplyErr"></span>
                                               <!--  <span style="display: block;" id="spnReplyWordsInfo" class="gray left">（您还可输入 <span class="red" id="spnCnt">1000</span> 字）</span> -->
                                               <span id="spnReplyNewsInfo" class="gray left" style="display: none;">（鼠标移动到图文上可编辑或删除）最多10条图文</span>
                                                <a href="javascript:;" class="right block"><button type="button" class="btnAdd c-opr" >图文</button></a>
                                              
                                                <a href="javascript:;" class="right block"><button type="button" class="addWords btnAdd c-opr" >文字</button></a>
                                            </div></div>
                                        </th>
      </tr>
    <tr >
    <th>&nbsp;</th>
    <td style="padding-left:10%;padding-top:1%"><input type="button" value="确定" class="btn btn-primary"><!-- <input type="button" value="发布" class="btn"> --></td>
  </tr>
</tbody></table>                                
      </form>
  
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