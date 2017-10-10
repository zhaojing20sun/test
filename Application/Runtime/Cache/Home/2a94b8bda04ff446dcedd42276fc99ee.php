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
<link href="/daikuan/Public/home/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/daikuan/Public/home/js/jquery.js" charset="utf-8"></script>

</head>
<body>
<div  class="header">
    <div class="auto">
    	  <div class="logo"><img src="/daikuan/Public/home/images/logo.png"   /></div>
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

    <!---------轮播-------------->
    <div id="banner" class="auto"> 
        <div id="banner_list"> 
            <a href="#" target="_blank"><img src="/daikuan/Public/home/images/banner_1.jpg"/></a> 
            <a href="#" target="_blank"><img src="/daikuan/Public/home/images/banner_2.jpg"/></a> 
            <a href="#" target="_blank"><img src="/daikuan/Public/home/images/banner_3.jpg"/></a> 
        </div> 
        <ul> 
            <li style="background:#f60; color:#fff;">1</li> 
            <li>2</li> 
            <li>3</li> 
        </ul> 
        <div class="sc_re_con">
            <a href="{url app=member&act=register&ret_url=$ret_url}" class="re"></a>
            <a href="{url app=member&act=login&ret_url=$ret_url}" class="lo"></a>
            <div class="clear"></div>
            <p style="margin-top:10px; color:#fff; font-size:14px;">现在申请加入微信商城，获得更多优惠！</p>
        </div>
    </div> 
    <script>
    //轮播
    var t = n = 0, count; 
    $(document).ready(function(){ 
    count=$("#banner_list a").length; 
    $("#banner_list a:not(:first-child)").hide(); 
    $("#banner li").click(function() { 
    var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4 
    n = i; 
    if (i >= count) return; 
    $("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000); 
    $(this).css({"background":"#f60",'color':'#fff'}).siblings().css({"background":"#fff",'color':'#000'}); 
    }); 
    t = setInterval("showAuto()", 4000); 
    $("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);}); 
    }) 
    
    function showAuto() 
    { 
    n = n >=(count - 1) ? 0 : ++n; 
    $("#banner li").eq(n).trigger('click'); 
    } 
    
    </script>
    <div class="process auto1">
        <span>开通流程</span>
        <ul>
            <li><b>1</b><d>申请入驻</d><img src="/daikuan/Public/home/images/process_arrow.png"></li>
            <li><b>2</b><d>绑定微信公众号</d><img src="/daikuan/Public/home/images/process_arrow.png"></li>
            <li><b>3</b><d>设置微信公众号</d><img src="/daikuan/Public/home/images/process_arrow.png"></li>
            <li><b>4</b><d>发布微信公众号信息</d></li>
            
         </ul>
    </div>
    <div class="list_index">
        <ul>
            <li class="">
                <div class="icon">
                    <a href=" " class="mall"></a>
                </div>
                <div class="text">
                    <h3>
                        商城管理
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微信商城让商家轻松坐拥6亿微信用户
                    </p>
                    <p>
                        抢占手机终端购物的市场份额
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li class="">
                <div class="icon">
                    <a href="" class="shopping"></a>
                </div>
                <div class="text">
                    <h3>
                        商品管理
                    </h3>
                </div>
                <div class="des">
                    <p>
                        后台清晰的商品管理系统架构
                    </p>
                    <p>
                        让商家轻松把控商品信息
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="sale"></a>
                </div>
                <div class="text">
                    <h3>
                        交易管理
                    </h3>
                </div>
                <div class="des">
                    <p>
                        消费者享受简化的购物体验
                    </p>
                    <p>
                        微商城后台简单操作交易过程
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li class="">
                <div class="icon">
                    <a href="" class="model"></a>
                </div>
                <div class="text">
                    <h3>
                        精美模板
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微信商城拥有众多模板皮肤
                    </p>
                    <p>
                        随时更换，增加品牌新鲜感
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="payfor"></a>
                </div>
                <div class="text">
                    <h3>
                        微信支付
                    </h3>
                </div>
                <div class="des">
                    <p>
                        集成支付宝/微信支付的接口
                    </p>
                    <p>
                        让消费者无线支付更轻松！
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="data"></a>
                </div>
                <div class="text">
                    <h3>
                        数据导入
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微信商城支持一键导入
                    </p>
                    <p>
                        淘宝商品数据
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="huiyuan"></a>
                </div>
                <div class="text">
                    <h3>
                        会员中心
                    </h3>
                </div>
                <div class="des">
                    <p>
                        消费者对自己的订单状态 
                    </p>
                    <p>
                        和个人信息一目了然
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="kefu"></a>
                </div>
                <div class="text">
                    <h3>
                        在线客服
                    </h3>
                </div>
                <div class="des">
                    <p>
                        让商家及时沟通6亿微信用户 
                    </p>
                    <p>
                        创造无限商机
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="tuwen"></a>
                </div>
                <div class="text">
                    <h3>
                        推送图文
                    </h3>
                </div>
                <div class="des">
                    <p>
                        主动对话6亿微信用户 
                    </p>
                    <p>
                        移动社会化的强关系裂变式营销
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="wuliu"></a>
                </div>
                <div class="text">
                    <h3>
                        物流查询
                    </h3>
                </div>
                <div class="des">
                    <p>
                        消费者可自己跟踪订单的 
                    </p>
                    <p>
                        物流状态省时更省心
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href="" class="hu"></a>
                </div>
                <div class="text">
                    <h3>
                        互动功能
                    </h3>
                </div>
                <div class="des">
                    <p>
                        微商城有丰富的互动游戏、
                    </p>
                    <p>
                        互动活动、引爆流量、销量
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
            <li>
                <div class="icon">
                    <a href=" " class="gao"></a>
                </div>
                <div class="text">
                    <h3>
                        高级功能
                    </h3>
                </div>
                <div class="des">
                    <p>
                        独家团购、APP等高级应用
                    </p>
                    <p>
                        微商城带领您走向移动互联商贸的巅峰
                    </p>
                </div>
                <div class="clear">
                </div>
            </li>
        </ul>
        <script>
         //鼠标移动图标上显示的效果
        $(".list_index ul li").hover(
        function(){
        $(this).addClass("active")
        },
        function(){
        $(this).removeClass("active");
        }
        ); 
        </script>
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