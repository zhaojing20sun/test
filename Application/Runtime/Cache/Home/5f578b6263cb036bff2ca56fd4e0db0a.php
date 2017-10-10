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
<link href="/new_lgx/Public/home/css/member_menu.css" rel="stylesheet" type="text/css" />


<div class='right'>
	
	 <div class="portlet box blue" style="padding-left:17%">
                       
                          <script type="text/javascript">
                              $(function($){
                                $(".trigger").click(function(){
                                  if($("#30").attr('class')=='folder-open'){
                                    $("#30").attr('class','folder-close')
                                   $(".level2").hide()
                                 }else{
                                    $("#30").attr('class','folder-open')
                                   $(".level2").show()
                                    }
                                })
                                
                              })
                              </script>
                               <script>
;!function(){


//编辑
 $(document).on("click", ".add", function() {
var id=$(this).next().val()

layer.open({
  type: 1,
  title:'添加',
  skin: 'layui-layer-rim', //加上边框
  area: ['600px', '240px'], //宽高
  content: "<form method='post' action='<?php echo U(add_menu);?>'><input name='id' type='hidden' value='"+id+"'><table id='TableList' width='100%' class='tbmodify' border='0' cellspacing='0' cellpadding='0'><tbody><tr><td class='tdtitle' width='90'><span class='red'>*</span>菜单标题：</td><td><input name='title' type='text' id='txtTitle' maxlength='8' class='txt350' value=''><div class='gray'>（菜单标题在8个字以内）</div></td></tr><tr><td class='tdtitle' width='90'><span class='red'>*</span>排序：</td><td><input name='orderid' type='text' id='sort' maxlength='8' class='txt350' value=''><div class='gray'>（必须是数字）</div></td></tr><tr><td class='tdtitle'>&nbsp;</td><td><input type='button' name='btnEnter' value=' 确 定 '  id='btnEnter' class='btn btn_submit'>&nbsp;<input type='button' class='quxiao btn_cannel' value=' 取 消 ' >&nbsp;<span id='spnMsg' class='red'></span></td></tr></tbody></table></form>"});
});
/*$(".iconEdit").on('click', function(){

});*/
 $(document).on("click",".del",function(){
       var id=$(this).prev().prev().val()
       $.ajax({
        url:"<?php echo U('delete_menu');?>",
        type:'post',
        data:"id="+id,
        success:function(msg){
         if(msg==1){
          window.location.reload()
         }
        }

       })
 })
  $(document).on("click", ".editmenu", function() {
    var id=$(this).prev().val()
   // alert(id)
  layer.open({
  type: 1,
  title:'编辑',
  skin: 'none', //加上边框
  area: ['600px', '220px'], //宽高
  content: "<form method='post' action='<?php echo U(change_menu);?>'><input name='id' type='hidden' value='"+id+"'><table id='TableList' width='100%' class='tbmodify' border='0' cellspacing='0' cellpadding='0'><tbody><tr><td class='tdtitle' width='90'><span class='red'>*</span>菜单标题：</td><td><input name='title' type='text' id='txtTitle' maxlength='8' class='txt350' value=''><div class='gray'>（菜单标题在8个字以内）</div></td></tr><tr><td class='tdtitle' width='90'><span class='red'>*</span>排序：</td><td><input name='orderid' type='text' id='sort' maxlength='8' class='txt350' value=''><div class='gray'>（必须是数字）</div></td></tr><tr><td class='tdtitle'>&nbsp;</td><td><input type='button' name='btnEnter' value=' 确 定 ' id='btnEnter' class='btn btn_submit'>&nbsp;<input type='button' class='quxiao btn_cannel' value=' 取 消 ' >&nbsp;<span id='spnMsg' class='red'></span></td></tr></tbody></table></form>"});
                                })
  $(document).on("click","input[name='btnEnter']",function(){
        var title=$("#txtTitle").val()
        var order=$("#sort").val()
       if(title!='' && order!=''){
             $('form').submit()
       }else{
        alert('填写信息不完整')
       }
  })
 $(document).on("click", ".quxiao", function() {
   var index = layer.index; //获取当前弹层的索引号
layer.close(index);
                                })
 
  $(document).on("click", ".yiji", function() {
      $(".required").html("所选菜单下有二级菜单，无法为其设置响应动作")
       $(".tishi").show()
     $(".news").hide()
     //$(this).attr()
   $(".active1").attr('class',"text erji")
      
                                })

  $(document).on("click", ".erji", function() {
    $(".erji").removeAttr('id')
     $(".tishi").hide()
     $(".news").show()
     $(".active1").attr('class','text erji')
     $(this).attr('class','active1 erji')
     var val=$(this).find("input").val()
     $(this).attr('id',val)
     $("input[name='id']").val(val)
                                })
  var status='1';
  $(document).on("click",".trigger",function(){
     
           
          var li=$(this).parent()
      var ul=$(this).next().next().next()
            

           if(status=='1'){

         
             li.attr('class','folder-close')
          ul.hide()
           status='2'
           }else{
               li.attr('class','folder-open')
          ul.show()
           status='1'
           }
      
  })

}();
</script>
                        <div class="portlet-body form">
                        <div >
                        <b class="text-ts">
1、使用本模块，必须在微信公众平台申请自定义菜单使用的AppId和AppSecret，然后在【微信绑定设置】中设置。<br>
2、最多创建3 个一级菜单，每个一级菜单下最多可以创建 5 个二级菜单，菜单最多支持两层。<br>
3、拖动树形菜单再点击“保存排序”可以对菜单重排序，但最终只有“发布”后才会生效。公众平台限制了每天的发布次数。<br>
4、公众平台规定，菜单发布24小时后生效。如果为新增粉丝，则可马上看到菜单。<br>
5、请先为菜单选择动作保存后，再点击发布。

</b>
</div>

<div class="menua" style="border-bottom: 1px solid #dbdbdb;">
                          <ul class="simpleTree" style="min-height:95%">
                            <li class="root" id="0">
                              <span>自定义菜单列表</span>
                              <div class="right">
                            <?php $re=M('weixinmenu')->where(array('userid'=>$_SESSION['uid'],'pid'=>0))->count(); if($re!=3){ ?>
                              <i class="add add-level1" title="添加一级菜单"></i>
                              <input type="hidden" value="0"/>
                           <?php } ?>
                              </div>

                              <ul class="level1">
                                <li class="line">&nbsp;</li>

                  
                           <?php if(is_array($menu)): foreach($menu as $k=>$v): ?><li class="line">&nbsp;</li>
                              <?php $re=M('weixinmenu')->where(array('pid'=>$v['id']))->order("orderid asc")->select(); $count=count($re); if($re){ ?>
                              <li  class="folder-open" >
                              <img class="trigger" src="/new_lgx/Public/common/images/spacer.gif" border="0" style="float: left;">
                                  <span class="yiji"><?php echo ($v["title"]); ?></span>
                          <div class="right">
                        <?php if(5>$count && $v['type']==0){ ?>
                          <i class="add add-level2" title="添加二级子菜单" ></i>
                  <?php } ?>
                          <input type="hidden" name="yijiyongba" value="<?php echo ($v["id"]); ?>">
<?php if( $v['type']==0){ ?>
                          <i class="yiji editmenu" title="编辑菜单"></i>
   <?php } ?>
                          </div>

                          <ul class="level2">
                          <li class="line">&nbsp;</li>
                           <?php foreach($re as $key=>$value){ ?>
                          <?php if($key<$count-1){ ?>
                            <li   class='doc' >
                           <?php }else{ ?>
                            <li   class='doc-last' >
                           <?php } ?>
                          <span class="text erji"><input type="hidden" value="<?php echo ($value["id"]); ?>" /><a href="<?php echo U('set_menu',array('id'=>$value['id']));?>"><?php echo ($value["title"]); ?></a></span><div class="right"><input type="hidden" name="yijiyongba" value="<?php echo ($value["id"]); ?>">
                           <?php if($value['type']==0){ ?>    
                          <i class="editmenu" title="编辑菜单"></i>
                          <i class="del" title="删除菜单"></i>
 <?php } ?>
                          </div></li>
                          <?php } ?>
                          <li class="line-last"></li>
                          </ul>

                              <?php }elseif(!$menu[$k+1]){ ?>
                                    <li id="26"   class="doc-last" >
                                    <span class="text erji"><input type="hidden" value="<?php echo ($v["id"]); ?>" /><a href="<?php echo U('set_menu',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></span>
                                      <div class="right"><i class="add add-level2" title="添加二级子菜单"></i><input type="hidden" name="yijiyongba" value="<?php echo ($v["id"]); ?>">
                                 <?php if($v['type']==0){ ?>    
                                      <i class="editmenu" title="编辑菜单"></i>
                                      <i class="del" title="删除菜单"></i>
                                  <?php } ?>
                                      </div>
                              </li>
                                  
                          
                              <?php }else{ ?>
                              <li id="26"   class="doc" >
                              <span class="text erji"><input type="hidden" value="<?php echo ($v["id"]); ?>"/><a href="<?php echo U('set_menu',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></span>
                                <div class="right"><i class="add add-level2" title="添加二级子菜单"></i><input type="hidden" name="yijiyongba" value="<?php echo ($v["id"]); ?>">
                                <?php if($v['type']==0){ ?>   
                                <i class="editmenu" title="编辑菜单"></i><i class="del" title="删除菜单"></i>
                                 <?php } ?>
                                </div>
                              </li>
                                  
                          
                                 <?php } endforeach; endif; ?>   
                              </ul>
                            </li>
                          </ul>
                          <div class="" style="padding-left:30%">
                           <button type="button" class="btnGreenS" id="fabu" style="margin-right:10%"> 发 布 </button>
                           <button type="button" class="btnGreenS" id="tingyong"> 停 用 </button>
                          
                       </div>
                       <script type="text/javascript">
                       $(document).on("click","#fabu",function(){
                             alert("发布成功")
                             location.href="<?php echo U('set_menu_start');?>"
                       })
                       $(document).on("click","#tingyong",function(){
                             alert("已经停用")
                             location.href="<?php echo U('set_menu_stop');?>"
                       })
                       </script>
                        </div>
                        <?php  ?>
    <div class="replyList tishi" <?php if($weixin['id']) echo "style='display:none'"?>>
                        <div class="cLine">
                            <p class="left b">菜单动作</p>
                            <p class="right red">（注意：禁止发布色情、反动、暴力等违规内容。）</p>
                        </div><div class="clear"></div>
                       <div id="divWait" class="wait" style="display: block;">
                            <div class="loading" style="display: none;"></div>
                            <div class="cover" unselectable="on" style="display: none;"></div>



                          
                            <div class="required"  >
                            请点选左侧菜单节点，然后为其设置响应动作</div>
                             

                            <div class="bottom">&nbsp;</div>
                        </div>
                       </div>
<form method="post" action="<?php echo U('set_menu_save');?>" enctype="multipart/form-data">
                         <?php if($weixin['id'] == ''): ?><div class="replyList news" style="display:none;height:auto;">
                         <?php else: ?>
                         <div class="replyList news" style="display:block;height:auto;"><?php endif; ?>
                                            <div class="cLine">
                                                <p class="left b">回复内容</p>
                                                <p class="right red">（注意：禁止发布色情、反动、暴力等违规内容。）</p>
                                            </div>
                                            <div class="cntBox">
                                                                      <p class="left">回复类型：
                                                                     <?php if($weixin['style']==0){ ?>
                                                                      <span id="returnType" rtype="text">文本</span>
                                                                    <?php }elseif($weixin['style']==1){ ?>
                                                                       <span id="returnType" rtype="text">多图文</span>
                                                                    <?php }elseif($weixin['style']==2){ ?>
                                                                        <span id="returnType" rtype="text">网页链接 </span>

                                                                     <?php } ?>
                                                                      </p>
                                                      <?php if($weixin['style']==0){ ?>
                                                                      <span style="display: block;" id="spnAddLink" class="addlink">
                                                    <a title="插入指定链接标记" href="#" id="link">插入链接</a>
                   
                                                </span>
                                                     <?php }else{ ?>
    <span style="display: none;" id="spnAddLink" class="addlink">
                                                    <a title="插入指定链接标记" href="#" id="link">插入链接</a>
                   
                                                </span>
                                                     <?php } ?>
                                                <div class="clear"></div>
                                            </div>
                     <!--  //回复文字消息 -->
                                    
                                         <div class="replyItems showWords showFile showAppMsg" <?php if($weixin['style']!='0') echo "style='display:none'"?> >
                                   
                                         
                                                
                                                <?php if($_GET['id']== ''): ?><input type="hidden" name="id" >
                                                <input type="hidden" name="style" value="0">
                                                <?php else: ?>
                                                <input type="hidden" name="id" value="<?php echo ($weixin["id"]); ?>" class='mid'>
                                                <input type="hidden" name="style" value="<?php echo ($weixin["style"]); ?>"><?php endif; ?>
                                                <div style="display: block;" id="divReplyWords">
                                                    <textarea name="content1" id="txtReplyWords"  placeholder="请在此输入您的回复内容，1000字以内"  class="txtarea"><?php if($weixin['style']=='0') echo $weixin['content'] ;?></textarea>
                                                </div> 
                                                </div>
                      <!--  //回复链接消息 -->
                      <div id="divReplyLink" <?php if($weixin['style'] == 2): ?>style="display:block;"<?php else: ?> style="display:none"<?php endif; ?>>

                    网页链接：<input name="content" type="text" id="txtTargetDesc" class="txt350 readOnly" maxlength="300"  <?php if($weixin['style'] == 2): ?>value="<?php echo ($weixin["content"]); ?>"<?php else: ?> value=""<?php endif; ?>>    <br><br><p class="red" style="padding-left:10%;width:70%"> (请写全url，带上http://，如想链接到本公众号下网站的某一板块，链接地址请前往信息管理，进入相应板块页面，按照页面内的提示链接即可)</p>
                </div>
  <div id="divRelpyNews" class="msg-item-wrapper" <?php if($weixin['style'] == '1'): ?>style="display:block;"<?php else: ?> style="display:none"<?php endif; ?>>
                                                    <div class="msg-item multi-msg">
                                                        <div class="appmsgItem" flag="0">
                                                            <p class="msg-meta"><span class="msg-date">&nbsp;</span></p>
                                                            <div class="cover">
                                                            <?php if($weixin['style'] == '1'): ?><p id="pDefaultTip" class="default-tip" style="display:none;">封面图片</p>
                                                                <?php else: ?>
                                                                <p id="pDefaultTip" class="default-tip" style="display:;">封面图片</p><?php endif; ?>                   

                                                                <div class="msg-t h4">
                                                                    <span id="spnTitle" class="i-title"> <?php if($weixin['style'] == '1'): echo ($weixin["image_name"]); else: endif; ?></span>
                                                                </div>
                                                                <ul class="abs tc sub-msg-opr">
                                                                    <li class="b-dib sub-msg-opr-item">
                                                                        <a href="javascript:;" class="th icon18 iconEdit" data-rid="1">编辑</a>
                                                                    </li>
                                                                </ul>
                                                                <img id="imgPic" class="i-img" <?php if($weixin['style'] == '1'): ?>style="display:block;"<?php else: ?> style="display:none"<?php endif; ?> src="/new_lgx/<?php echo ($weixin["content"]); ?>">
                                                                <input name="urlTitle" id="urlTitle" type="hidden" value="">                                                                
                                                            </div>
                                                        </div>
                              <?php if($image_arr){ ?>  
                                                        <?php if(is_array($image_arr)): foreach($image_arr as $key=>$v): ?><div class='rel sub-msg-item appmsgItem'  flag='1'>
<span class='thumb'><span class='default-tip' style='display:none'>缩略图</span>
<img src="/new_lgx/<?php echo ($v["content"]); ?>" class='i-img' ></span>
<div class='msg-t h4'><span class='i-title' title="<?php echo ($v["title"]); ?>"><?php echo ($v["image_name"]); ?></span></div>
<ul class='abs tc sub-msg-opr'>
<li class='b-dib sub-msg-opr-item'><a href='javascript:;' class='th icon18 iconEdit' data-rid="<?php echo ($v["order"]); ?>" title="<?php echo ($v["id"]); ?>">编辑</a></li>
<li class='b-dib sub-msg-opr-item'><a href="<?php echo U('set_menu_delete',array('id'=>$v['id']));?>" class='th icon18 iconDel' data-rid="<?php echo ($v["order"]); ?>">删除</a></li>
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
                                //通过id改变二级class
                                 //
                                  var mid=$(".mid").val()
                                   var input=$("input[value='"+mid+"']").parent("span")
                                   input.attr('class','active1 erji') 
                                 //
                                 //
                               $("div[flag=0]").hover(function(){
                                  $(this).attr('class','appmsgItem sub-msg-opr-show')
                               },function(){
                                $(this).attr('class','appmsgItem')
                               })
                                $(".btnAdd").click(function(){
                                    $("input[name='style']").remove()
                                $("#divRelpyNews").before("<input type='hidden' name='style' value='1'/>")
                                  $("#returnType").html("多图文");
                                 
                                  $("#divRelpyNews").show()
                              
                                  $("#spnReplyNewsInfo").show()

                                    $("#spnAddLink").hide();
                                  $(".replyItems").hide();
                                 $("#link").hide()
                                  $("#spnReplyWordsInfo").hide()

                                    $("#divReplyLink").hide();
                            
                                $("#spnReplyLinkInfo").hide()

                                })
                                $(".addWords").click(function(){
                                    $("input[name='style']").remove()
                                   $("#divReplyWords").before("<input type='hidden' name='style' value='0'/>")
                                  $("#returnType").html("文本");
                                  $("#spnAddLink").show();
                                  $(".replyItems").show();
                                 $("#link").show()
                                  $("#spnReplyWordsInfo").show()
                                 

                                   $("#spnReplyLinkInfo").hide()
                                   $("#divReplyLink").hide();
                                   $("#spnReplyNewsInfo").hide()
                                          $("#divRelpyNews").hide()
                                })
                                  $(".addLinkbutton").click(function(){
                                    $("input[name='style']").remove()
                                    $("#divReplyLink").before("<input type='hidden' name='style' value='2'/>")
                                  $("#returnType").html("网页链接");
                                 
                                  $("#divReplyLink").show();
                               
                                $("#spnReplyLinkInfo").show()
                                  $("#divRelpyNews").hide()
                                   $("#link").hide()
                                     $("#spnReplyWordsInfo").hide()
                                  $(".replyItems").hide()
                                  $("#spnReplyNewsInfo").hide()
                                })
                               $(".sub-add-btn").click(function(){
                                    var len=$(".sub-msg-item").length
                                   var num=len*1+2

                                     if(len<8){
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
 var id=$("input[name='id']").val()

if(order==1){
 // alert(1)


  layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['570px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_menu_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：<input type='input' required name='image_name' class='txt350' maxlength='200' <?php if($weixin[style] == 1): ?>value='<?php echo ($weixin["image_name"]); ?>'<?php endif; ?>><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly'  <?php if($weixin[style] == 1): ?>value='<?php echo ($weixin["url"]); ?>'<?php endif; ?> name='url' maxlength='300'>  </p><?php if($weixin['style']!=1 ){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/<?php echo ($weixin["content"]); ?>' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' <?php if($weixin['style']!=1){ ?>required<?php } ?>  name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><input type='hidden' name='id' value='"+id+"'/><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
}else{
  mid=$(this).attr('title')
 
  $.ajax({
    url:"<?php echo U('set_menu_image');?>",
    type:'post',
    data_type:'json',
    data:'id='+mid,
    success:function(msg){

      if(msg!=null){

 layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['570px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_menu_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：<input type='input' required name='image_name' class='txt350' maxlength='200' value='"+msg['image_name']+"'><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='"+msg['url']+"' name='url' maxlength='300'>  </p><?php if(!"+msg['id']+"){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/"+msg['content']+"' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file'  name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><input type='hidden' name='id' value='"+msg['id']+"'/><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
      }else{
        layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['570px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_menu_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：<input type='input' required name='image_name' class='txt350' maxlength='200' value=''><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='' name='url' maxlength='300'>  </p><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><input type='hidden' name='id' value='"+id+"'/><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
      }
    
    }
  })

}
                                })
 $(document).on("click", ".quxiao", function() {
   var index = layer.index; //获取当前弹层的索引号
layer.close(index);
  })
 $(document).on("click", "#save", function() {
  var check='false'
  var text=$("#txtReplyWords").val()
  var link=$("#txtTargetDesc").val()
  var style=$("input[name='style']").val()
       if(style==0){
            if(text!=''){
              check='true'
            }else{
              check='false'
              alert("未填写响应事件")
            }
       }else{
         if(link!=''){
              check='true'
            }else{
              check='false'
              alert("未填写响应事件")
            }
       }
       if(check=='true'){
        $("form").submit();
       }
  })
                              
}();
</script>
                                         <div class="btnReplyArea" style="height:40px;">
                <span class="red left" id="snpReplyErr"></span>
               
                <span id="spnReplyNewsInfo" class="gray left" style="display:none;">（鼠标移动到图文上可编辑或删除）</span>
                <span id="spnReplyLinkInfo" class="gray left" style="display:none;">（请设置链接）</span>
                <a href="javascript:;" class="right block"><button type="button" class=" btnAdd c-opr" >图文</button></a>
                <a href="javascript:;" class="right block" style="display:none"><button class="addFiles btnAdd c-opr">文件</button></a>
                <a href="javascript:;" class="right block" style="display:none"><button class="addRecording  btnAdd c-opr">录音</button></a>
                <a href="javascript:;" class="right block"><button type="button" class="addWords btnAdd c-opr" >文字</button></a>
                <a href="javascript:;" class="right block"><button type="button" class="addLinkbutton btnAdd c-opr" >链接</button></a>
            </div>
            <br>
            <div class="btnArea" style="width:100%;margin-left:0;border:0;">
            <div id="btnEdit" class="txtc" style="text-align:center;">
                <button type="button" class="btnGreenS"  id="save"> 保 存 </button>
              </div>
        </div>
        </form>
                                            </div>
<div class="clear"></div>
                       <!--  <div class="btnArea">
                           <button type="button" class="btnGreenS" onclick="return Publish()"> 发 布 </button>
                           <button type="button" class="btnGreenS" onclick="return Demo()"> 预 览 </button>
                           <button type="button" class="btnGreenS" onclick="return Disabled()"> 停 用 </button>
                           <button type="submit" class="btnGreenS" onclick="return SaveSort()">保存排序</button>
                           <input name="hidAct" type="hidden" id="hidAct">
                       </div> -->

                    
<div class="clear"></div>



                        </div>
                    </div>
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