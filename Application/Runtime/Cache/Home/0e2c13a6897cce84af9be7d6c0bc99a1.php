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
<link href="/new_lgx/Public/weixin/new_index/css/swiper-3.4.2.min.css?v1.0" rel="stylesheet">
<link rel='stylesheet' type="text/css" href="/new_lgx/Public/home/css/member_table.css" />
<style type="text/css">
  .green{
    color: #FFFFFF;
    background-color: #3F89EC;
}

.btn1 {
padding:0;
    font-size: 13px;
    height: 27px;
    width:90px;
}
input[name='title'],input[name='nickname'],input[name='content']{height:20px;line-height: 20px;}
</style>
<div id="right">
<div style="margin-top:9px;">
<!-- <a href="<?php echo U('baoliao_list');?>" class="btn btn-primary" style="   margin-top: 10px;">
            新闻爆料审核</a>
<a href="<?php echo U('lanmu');?>" class="btn btn-primary" style="   margin-top: 10px;">
            分类管理</a>
<a href="<?php echo U('article_add');?>" class="btn btn-primary" style="   margin-top: 10px;">
            添加文章</a> -->
             <span style="color:red">动态页地址 http://<?php echo $_SERVER['SERVER_NAME']?>/weixin/index/new_dongtai/id/<?php echo $_SESSION['uid']?>.html</span>
            </div>
            <br>
 <form action="<?php echo U('dongtai');?>" method="get"> <input type="text" placeholder="发布人搜索" name="nickname" value="<?php echo ($_GET['nickname']); ?>" > <input type="text" placeholder="动态关键词或ID搜索" name="title" value="<?php echo ($_GET['title']); ?>" > <input type="text" placeholder="留言搜索" name="content" value="<?php echo ($_GET['content']); ?>" >    <button type="submit" class="btn1 green  btn">   搜索   </button>  <button type="button"  class="btn1 green  btn jubao">   举报管理   </button> </form>  
<?php if($_GET['title']=='' && $_GET['content']==''){ ?>
<table class="table table-bordered table-hover" style="text-align:center;    margin-top: 10px;">
                            <thead>
                             <tr><th style="width:25%">发布人</th><th>头像</th><th>动态总数</th><th>最后一次动态</th><th>操作</th></tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($com)): foreach($com as $key=>$v): ?><tr>
                         
                                <td style="vertical-align:middle;">
                                <span title="<?php echo ($v["title"]); ?>"><?php  echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getField('nickname'); ?></span></td>
                           <td style="vertical-align:middle;"><img src="<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getField('headimgurl')?>"  style="width:80px;"/></td>
                           <td style="vertical-align:middle;"><?php echo M('weixin_release')->where(array('wid'=>$v['wid']))->count() ?></td>
                            <td style="vertical-align:middle;"><?php $re=M('weixin_release')->where(array('wid'=>$v['wid']))->order('addtime desc')->select(); echo date('Y-m-d H:i:s',$re[0]['addtime']); ?></td>
                            <td style="vertical-align:middle;"> 
                            <a href="<?php echo U('dongtai_list',array('wid'=>$v['wid']));?>" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i> 查看所有动态</a>
                                
                                  <a href="<?php echo U('dongtai_delete',array('wid'=>$v['wid']));?>" class="btn btn-danger  btn-sm" onclick="return confirm('一旦删除，该用户下的所有动态信息都将删除，如不确定请点取消')"><i class="glyphicon glyphicon-remove"></i> 删除</a>

                                </td>
                            </tr><?php endforeach; endif; ?>
                              </tbody>
                            <tfoot>
                             <tr> <th colspan="14" style="text-align:right;"><?php echo ($page); ?> </th> 
                              </tr>
                              </tfoot>
                            </table>
<?php }elseif($_GET['title']){ ?>

<table class="table table-bordered table-hover" style="text-align:center;    margin-top: 10px;">
                            <thead>
                             <tr><th>动态ID</th><th style="width:6%">发布人</th><th>头像</th><th>文字</th><th style="width:150px;">配图</th><th>发布时间</th><th>浏览量</th><th>评论人数</th><th>操作</th></tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($com)): foreach($com as $key=>$v): ?><tr>
                         <td style="vertical-align:middle;max-width:150px;">
                                <?php echo ($v["id"]); ?></td>
                                   <td style="vertical-align:middle;">
                                <span title="<?php echo ($v["title"]); ?>"><?php  echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getField('nickname'); ?></span></td>
                           <td style="vertical-align:middle;"><img src="<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getField('headimgurl')?>"  style="width:80px;"/></td>
                                <td style="vertical-align:middle;max-width:150px;">
                                <span title="<?php echo ($v["content"]); ?>" ><?php echo (htmlspecialchars_decode($v["content"])); ?></span></td>
                           <td style="vertical-align:middle;">
                             <?php $yaowen=M('weixin_release_pic')->where(array('aid'=>$v['id']))->select(); $count11=count($yaowen); if($yaowen){ ?>  
                               <?php if($count11>1){ ?>
                                <div class="swiper-container lunbo2" style="width:150px;height:150px;border-radius:6px;">
      
                                    <div class="swiper-wrapper" >
                                      
                                     
                                       <?php if(is_array($yaowen)): foreach($yaowen as $k1=>$v1): ?><div class="swiper-slide" style="height:150px;">  <a href="/new_lgx<?php echo ($v1["pic"]); ?>" target="__blank">  <img src="/new_lgx<?php echo ($v1["pic"]); ?>" alt="<?php echo ($k1+1); ?>.jpg" style="width:150px;height:150px;color:#ccc"> </a></div><?php endforeach; endif; ?>
                      
                                    </div>
                               
                                   <div class="swiper-pagination"></div> 
                                  
                                </div>
                                 <?php }else{ ?>
                                  <?php if(is_array($yaowen)): foreach($yaowen as $k1=>$v1): ?><a href="/new_lgx<?php echo ($v1["pic"]); ?>" target="__blank">  <img src="/new_lgx<?php echo ($v1["pic"]); ?>" alt="<?php echo ($k1+1); ?>.jpg" style="width:150px;height:150px;color:#ccc"> </a><?php endforeach; endif; ?>
                         <?php } ?>
                                <?php }else{ ?>
                                无配图
                                <?php } ?>
                           </td>
                            <td style="vertical-align:middle;"><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?></td>
                           <td style="vertical-align:middle;">
                             <?php echo ($v["view"]); ?>
                           </td>
                            <td style="vertical-align:middle;"><?php $pinglun=M('weixin_release_message')->where(array('aid'=>$v['id']))->count();echo $pinglun; ?></td>
                            <td style="vertical-align:middle;"> 
                            <a href="<?php echo U('dongtai_message_list',array('id'=>$v['id']));?>" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i> 查看评论</a>
                                <br><br>
                                  <a href="<?php echo U('dongtai_message_delete',array('id'=>$v['id']));?>" class="btn btn-danger  btn-sm" onclick="return confirm('您确定要删除该项吗，如不确定请点取消')"><i class="glyphicon glyphicon-remove"></i> 删除</a>

                                </td>
                            </tr><?php endforeach; endif; ?>
                              </tbody>
                            <tfoot>
                             <tr> <th colspan="14" style="text-align:right;"><?php echo ($page); ?> </th> 
                              </tr>
                              </tfoot>
                            </table>

<?php }elseif($_GET['content']){ ?>

<table class="table table-bordered table-hover" style="text-align:center;    margin-top: 10px;">
                            <thead>
                             <tr><th>所属动态ID</th><th style="width:6%">发布人</th><th>头像</th><th>内容</th><th>发布时间</th><th>操作</th></tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($message)): foreach($message as $key=>$v): ?><tr>
                         <td style="vertical-align:middle;max-width:150px;">
                                <?php echo ($v["aid"]); ?></td>
                                   <td style="vertical-align:middle;">
                                <span title="<?php echo ($v["title"]); ?>"><?php  echo M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname')?M('weixin_mydata')->where(array('wid'=>$v['wid']))->getField('nickname'):M('weixin_man')->where(array('id'=>$v['wid']))->getField('nickname'); ?></span></td>
                           <td style="vertical-align:middle;"><img src="<?php echo M('weixin_man')->where(array('id'=>$v['wid']))->getField('headimgurl')?>"  style="width:80px;"/></td>
                                <td style="vertical-align:middle;max-width:150px;">
                                <span title="<?php echo ($v["content"]); ?>" ><?php echo (htmlspecialchars_decode($v["content"])); ?></span></td>
                        
                            <td style="vertical-align:middle;"><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?></td>
                           
                            <td style="vertical-align:middle;"> 
                           
                               
                                  <a href="<?php echo U('release_reply_delete',array('id'=>$v['id']));?>" class="btn btn-danger  btn-sm" onclick="return confirm('一旦删除，此留言下的回复留言也一并删除，您确定删除吗')"><i class="glyphicon glyphicon-remove"></i> 删除</a>

                                </td>
                            </tr><?php endforeach; endif; ?>
                              </tbody>
                            <tfoot>
                             <tr> <th colspan="14" style="text-align:right;"><?php echo ($page); ?> </th> 
                              </tr>
                              </tfoot>
                            </table>

<?php } ?>
</div>
 <!-- div content end --></div>
 <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="/new_lgx/Public/weixin/new_index/js/swiper-3.4.2.min.js"></script>
    <script>
  
    
            var swiper2 = new Swiper('.lunbo2', {
        pagination: '.swiper-pagination',
       loop : true,
       slidesPerView : 1,
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
       
        autoplayDisableOnInteraction: false
    
        });
    
 
    </script>
    <script type="text/javascript">
 $(function(){
    $(".jubao").click(function(){
        location.href="<?php echo U('dongtai_jubao');?>"
    })
 })
    </script>
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