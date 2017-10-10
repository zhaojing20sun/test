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
<script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/new_lgx/Public/common/layer/layer.js"></script>
</head>
<body>
<div class="header">
    <div class="auto">
    	  <div class="logo"><img src="/new_lgx/Public/home/images/logo.png"></div>
          <div class="login">
                         <form class="login_panel">
                <li class="menu_li">欢迎您！xingyang</li>
                <li class="menu_li"><a href="<?php echo U('index');?>">管理中心</a></li>
                <li class="menu_li"><a href="<?php echo U('index/logout');?>">退出</a></li>
                
              </form>
                      </div>
    </div>

</div>
<div class="content">
<div id="left">
        <h2>
            <strong title="用户中心">用户中心</strong>
      
        </h2>
                    <dl>
            <dt class="menu">我的账户</dt>
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
                    
                    <dd>
                            <a href="<?php echo U('alipay');?>" <?php if($active == 'alipay'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico5">充值管理</span></a>
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
               <dt class="menu">微信管理</dt>
                   <div <?php if($open == '3'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                       <dd>
                            <a href="<?php echo U('set_bangding');?>" <?php if($active == 'set_bangding'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">绑定微信公众号</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('set_reply');?>" <?php if($active == 'set_reply'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">关注自动回复</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('set_zidong');?>" <?php if($active == 'set_zidong'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico103">消息自动回复</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('set_guanjian');?>" <?php if($active == 'set_guanjian'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico102">关键词自动回复</span></a>
                        </dd>
                    
                    <dd>
                            <a href="<?php echo U('set_menu');?>" <?php if($active == 'set_menu'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico104">自定义菜单</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('set_man');?>" <?php if($active == 'set_man'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico104">关注会员列表</span></a>
                        </dd>
                        </div>
                </dl>
                <dl>
                  <dt class="menu">用户管理</dt>
                    <div style="display:none">
                       <dd>
                            <a href="<?php echo U('binding_weixin');?>" <?php if($active == 'binding_weixin'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">用户组管理</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('follow_reply');?>" <?php if($active == 'follow_reply'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">关注的用户</span></a>
                        </dd>
                   
                        </div>
                </dl>
                  <dl>
                  <dt class="menu">信息管理</dt>
                    <div  <?php if($open == '5'): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>
                     <dd>
                            <a href="<?php echo U('word');?>" <?php if($active == 'word'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">敏感词管理</span></a>
                        </dd> 
                      <dd>
                            <a href="<?php echo U('index_pic');?>" <?php if($active == 'index_pic'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">轮播图管理</span></a>
                        </dd>  
                           <dd>
                            <a href="<?php echo U('dynamic_nav');?>" <?php if($active == 'dynamic_nav'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">动态页导航</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('nav');?>" <?php if($active == 'nav'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">底部导航</span></a>
                        </dd> 
                    <dd>
                            <a href="<?php echo U('article');?>" <?php if($active == 'article'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">新闻管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('dongtai');?>" <?php if($active == 'dongtai'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">动态管理</span></a>
                        </dd>
                           <dd>
                            <a href="<?php echo U('broadcast');?>" <?php if($active == 'broadcast'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">广播管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('video');?>" <?php if($active == 'video'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">视频管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('show');?>" <?php if($active == 'show'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">电视管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('easy');?>" <?php if($active == 'easy'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">便民管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('friend');?>" <?php if($active == 'friend'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">交友管理</span></a>
                        </dd>
                          <dd>
                            <a href="<?php echo U('activity');?>" <?php if($active == 'activity'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">活动管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('forum');?>" <?php if($active == 'forum'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">论坛管理</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('affiche');?>" <?php if($active == 'affiche'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">发布公告</span></a>
                        </dd>
                         <dd>
                            <a href="<?php echo U('xieyi');?>" <?php if($active == 'xieyi'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">用户协议</span></a>
                        </dd>
                        <dd>
                            <a href="<?php echo U('us');?>" <?php if($active == 'us'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">关于我们</span></a>
                        </dd>
                   
                   
                        </div>
                </dl>
                 <dl>
                  <dt class="menu">投票管理</dt>
                   <div style="display:none;">
                       <dd>
                            <a href="<?php echo U('binding_weixin');?>" <?php if($active == 'binding_weixin'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico100">投票分类</span></a>
                        </dd>
                    <dd>
                            <a href="<?php echo U('follow_reply');?>" <?php if($active == 'follow_reply'): ?>class="active"<?php else: ?> class="normal"<?php endif; ?>><span class="ico101">投票</span></a>
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
                </dl>
                
                <div class="adorn_bottom"></div>
    </div>
    <script type="text/javascript">
$(document).ready(function(){
  $("dl").click(function(){
      $(this).find("div").toggle();
  });
});
</script>
<script type="text/javascript" src="/new_lgx/Public/common/js/WebCalendar.js"></script>
<link rel='stylesheet' type="text/css" href="/new_lgx/Public/home/css/member_table.css" />
<div id="right">
   <form role="form" action="<?php echo U('nav_add_save');?>" name="adminadd"  method="post" enctype="multipart/form-data">
                                <div class="form-body" style="margin-left:2%">
                               <!--  <div class="zc01 red" style="color:red; top:35px;">*注意：此指纹(Token) / AppId / AppSecret 必须与微信公众号后台一致,否则无法通信!</div> -->
                               
                                  <div class="form-group" style="margin-top:0px;">
                                        <label><i style="color:red;"></i> 标题：</label>
                                        <div class="input-group" style="margin-top:10px;margin-left:15px;">
                                         <input name="title" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('标题不能为空')" oninput="setCustomValidity('')"  />
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top:10px;">
                                        <label><i style="color:red;"></i> url地址：</label>
                                        <div class="input-group" style="margin-top:10px;margin-left:15px;">
                                         <input name="url" id="realname" type="text" class="form-control input-xlarge" required oninvalid="setCustomValidity('url地址不能为空')" oninput="setCustomValidity('')"  />
                                        </div>
                                    </div>
                                    
                                     <div class="form-group" style="margin-top:10px;">
                                        <label><i style="color:red;"></i> 图片：</label>
                                        <div class="input-group" style="margin-top:10px;margin-left:15px;">
                                         <input name="logo" id="realname" type="file" class="form-control input-xlarge" required oninvalid="setCustomValidity('图片不能为空')" oninput="setCustomValidity('')"  />
                                        </div>
                                    </div>
                                    
                                      
                                </div>
                                <div class="form-actions" style="padding-left:5%;padding-top:2%;">
                                  <input type="submit" class="btn" value="保  存">    
                                    
                                </div>
                            </form>
</div></div>
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