<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo ($selected_title); ?> <?php echo ($open_title); ?> <?php echo ($active_title); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="/new_lgx/Public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/new_lgx/Public/admin/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/new_lgx/Public/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/new_lgx/Public/admin/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/new_lgx/Public/admin/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="/new_lgx/Public/admin/css/darkblue.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/new_lgx/Public/common/layer/layer.js"></script>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top">
<!--  <link rel="stylesheet" type="text/css" href="/new_lgx/Public/admin/weixin/css.css"> -->
  <link rel="stylesheet" type="text/css" href="/new_lgx/Public/admin/weixin/nbstyle.css">
 <link rel="stylesheet" type="text/css" href="/new_lgx/Public/admin/weixin/asyncbox.css"> 

    <!-- BEGIN HEADER INNER -->
   <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
            <img src="/new_lgx/Public/admin/images/logo.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN HORIZANTAL MENU -->
        <!-- DOC: Remove "hor-menu-light" class to have a horizontal menu with theme background instead of white background -->
        <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) in the responsive menu below along with sidebar menu. So the horizontal menu has 2 seperate versions -->
        <div class="hor-menu hor-menu-light hidden-sm hidden-xs">
            <ul class="nav navbar-nav">
                <!-- DOC: Remove data-hover="megadropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
                
                <?php if(is_array($columnlist)): foreach($columnlist as $key=>$v): ?><li class="classic-menu-dropdown <?php if($selected==$v['column_id']) echo 'active'; ?>">
                    <a href="<?php echo U('column',array('column_id' =>$v['column_id']));?>" >
                    <?php echo ($v["column_name"]); ?> 
                    <?php if($selected==$v['column_id']) echo '<span class="selected"></span>'; ?>
                    </a>
                   
                </li><?php endforeach; endif; ?>
               
            </ul>
        </div>
        <!-- END HORIZANTAL MENU -->
      
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
               
                
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    
                    <span class="username username-hide-on-mobile">
                     <?php  echo $realname=M('admin')->where(array('admin_id' => $_SESSION['admin_id']))->getField('realname'); ?> </span>
                   
                    </a>
                 
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="<?php echo U('logout');?>" class="dropdown-toggle">
                    <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>

    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU1 -->
            <ul class="page-sidebar-menu hidden-sm hidden-xs" data-auto-scroll="true" data-slide-speed="200">
                 <?php if($selected==-1){ ?>
              
                <li class="start active open">
                    <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span class="title">
                    后台首页 </span>
                    <span class="arrow open">
                    </span>
                    <span class="selected"></span>
                    </a>
                    <ul class="sub-menu">
                        <li <?php if($active==-1) echo 'class="active"'; ?>>
                            <a href="<?php echo U('index');?>">

                            环境参数 </a>
                        </li>
                          <li <?php if($active==0) echo 'class="active"'; ?>>
                            <a href="<?php echo U('passwordedit');?>">
                           
                            修改密码</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Login/logout');?>">
                            退出系统</a>
                       </li>
                       
                    </ul>
                </li>
                 <?php }?>
                 <?php if(is_array($sencodcolumnlist)): foreach($sencodcolumnlist as $key=>$v): ?><li class="start  <?php if($open==$v['column_id']) echo 'active open'; ?>">
                    <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span class="title">
                    <?php echo ($v["column_name"]); ?> </span>
                    <span class="arrow open">
                    </span>
                     <?php if($open==$v['column_id']) echo '<span class="selected"></span>'; ?>
                    </a>
                    
                    <ul class="sub-menu">
                      <?php  $subcolumnlist=M("column")->where(array('pid' =>$v['column_id']))->order('sort_order DESC')->select(); foreach ($subcolumnlist as $value){ ?>
                        <li <?php if($active==$value['column_id']) echo 'class="active"'; ?>>
                            <a href="<?php echo U('column',array('column_id' =>$value['column_id']));?>">
                            <?php  echo $value['column_name'] ; ?></a>
                        </li>
                       <?php
 } ?>
                    </ul>
                </li><?php endforeach; endif; ?>
            
            </ul>
            <!-- END SIDEBAR MENU1 -->
            <!-- BEGIN RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
            <ul class="page-sidebar-menu visible-sm visible-xs" data-slide-speed="200" data-auto-scroll="true">
               
                <li class="start <?php if($selected==-1) echo ' active open '; ?>">
                    <a href="index.html">
                    后台首页 <span class="selected">
                    </span>
                    <span class="arrow open">
                    </span>
                    </a>
                    <ul class="sub-menu">
                         <li <?php if($active==-1) echo 'class="active"'; ?>>
                            <a href="<?php echo U('index');?>">
                            环境参数 </a>
                        </li>
                          <li <?php if($active==0) echo 'class="active"'; ?>>
                            <a href="<?php echo U('passwordedit');?>">
                           
                            修改密码</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Login/logout');?>">
                            退出系统</a>
                       </li>
                      
                     </ul>
                </li>
                <?php if(is_array($columnlist)): foreach($columnlist as $key=>$v): ?><li class="start <?php if($selected==$v['column_id']) echo ' active open '; ?>">
                    <a href="index.html">
                    <?php echo ($v["column_name"]); ?>  
                     <?php if($open==$v['column_id']) echo '<span class="selected"></span>'; ?>
                    <span class="arrow <?php if($selected==$v['column_id']) echo 'open'; ?>">
                    </span>
                    </a>
                    <ul class="sub-menu">
                      <?php  $sencodcolumnlist=M("column")->where(array('pid' =>$v['column_id']))->order('sort_order DESC')->select(); foreach ($sencodcolumnlist as $value){ ?>
                        <li <?php if($open==$value['column_id']) echo 'class="active open"'; ?>>
                            <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span class="title">
                           <?php  echo $value['column_name'] ; ?> </span>
                            <span class="arrow <?php if($open==$value['column_id']) echo 'open'; ?>">
                            </span>
                            </a>
                               <ul class="sub-menu">
                                <?php  $subcolumnlist=M("column")->where(array('pid' =>$value['column_id']))->order('sort_order DESC')->select(); foreach ($subcolumnlist as $item){ ?>
                                <li <?php if($active==$item['column_id']) echo 'class="active"'; ?> >
                                    <a href="<?php echo U('column',array('column_id' =>$item['column_id']));?>">
                                     <?php  echo $item['column_name'] ; ?></a>
                                </li>
                                <?php  } ?>
                            </ul>
                        </li>
                          <?php
 } ?>
                      
                    </ul>
                </li><?php endforeach; endif; ?>
                
               
               
            </ul>
            <!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
       <div class="page-content">
         
            <!-- BEGIN PAGE HEADER-->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">首页</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"><?php echo ($selected_title); ?></a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"><?php echo ($open_title); ?></a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>  
                        <a href="#"><?php echo ($active_title); ?></a>
                    </li>
                </ul>
              
            </div>
            <!-- END PAGE HEADER-->

  
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>  <?php echo ($active_title); ?>
                            </div>
                           
                        </div>
                        <div class="portlet-body form">
                           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="336699">
  <tbody><tr>
    <td align="center" valign="top" bgcolor="#F2F8FF"><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="336699">
        <tbody><tr>
          <td height="25" align="center" valign="top" bgcolor="#F2F8FF">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="336699" class="border">
                <tbody><!-- <tr bgcolor="#A4B6D7">
                  <td height="25" align="center" bgcolor="#336699"><font color="#FFFFFF">关注自动回复</font></td>
                </tr> -->
                <tr bgcolor="#A4B6D7">
                  <td height="89" align="center" bgcolor="#FFFFFF"><div class="mainbox topborder">
  <div class="contentbox">
  <form method="post" action="<?php echo U('set_zidong_save');?>" enctype="multipart/form-data">
  
  <table width="100%" border="0" cellpadding="0" cellspacing="1" class="fromtj">
  <tbody><tr>
    <th width="13%"></th>
    <td width="87%"><div class="messg">当客户关注您的公众账号时，将自动发送此消息给客户。 </div></td>
  </tr>
    <tr>
      <th colspan="2">
    <div class="replyList">
                                            <div class="cLine header">
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
if(order==1){
  layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_zidong_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;题：<input type='input' required name='title' class='txt350' maxlength='200' value='<?php echo ($image["title"]); ?>'><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='<?php echo ($image["url"]); ?>' name='url' maxlength='300'>  </p><?php if(!$image['style']==1){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/<?php echo ($image["content"]); ?>' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required  name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><?php if($image['style']==1){ ?><input type='hidden' name='id' value='<?php echo ($image["id"]); ?>'/><?php } ?><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
}else{
  //alert(order)
  $.ajax({
    url:"<?php echo U('open_image');?>",
    type:'post',
    data_type:'json',
    data:'order='+order,
    success:function(msg){

      if(msg!=null){
 layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_zidong_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;题：<input type='input' required name='title' class='txt350' maxlength='200' value='"+msg['title']+"'><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='"+msg['url']+"' name='url' maxlength='300'>  </p><?php if(!"+msg['id']+"){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/"+msg['content']+"' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><?php if($image['style']==1){ ?><input type='hidden' name='id' value='"+msg['id']+"'/><?php } ?><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
      }else{
        layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_zidong_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;题：<input type='input' required name='title' class='txt350' maxlength='200' value=''><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='' name='url' maxlength='300'>  </p><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><?php if($image['style']==1){ ?><input type='hidden' name='id' value=''/><?php } ?><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
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
    <tr>
    <th>&nbsp;</th>
    <td><input type="submit" value="确定" class="btn btn-primary" ><input type="button" value="发布" class="btn"></td>
  </tr>
</tbody></table>                                
      </form>
  </div>
  </div></td>
                </tr>
               
              </tbody></table>
             </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                
                </div>
            
            </div>
         
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
  
</div>
<!-- <div id="AddLink" class="asyncbox_normal" style="top: 153.86px; left: 335.5px; z-index: 1987; width: 650px; height: 250px;"><table class="asyncbox_table" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td class="b_t_l" id="AddLink_left"></td><td class="b_t_m" id="AddLink_header" style="cursor: move;"><div class="asyncbox_title"><ul><li class="asyncbox_title_icon"></li><li class="asyncbox_title_tips"><strong>插入链接目标&nbsp;</strong></li><li style="padding-left:30px"><a id="AddLink_close" class="asyncbox_close" href="javascript:void(0)" title="关闭">关闭</a></li></ul></div></td><td class="b_t_r" id="AddLink_right"></td></tr><tr><td class="b_m_l"></td><td class="b_m_m"><iframe frameborder="0" id="AddLink_content" name="AddLink_content" width="100%" height="100%" src="addlink.php" scrolling="auto" style="height: 162px;"></iframe></td><td class="b_m_r"></td></tr><tr><td class="b_b_l"></td><td id="AddLink_bottom" class="b_b_m"></td><td class="b_b_r"></td></tr></tbody></table></div> -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
         2015 &copy; 上海银图网络科技有限公司
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<script src="/new_lgx/Public/admin/js/jquery.min.js" type="text/javascript"></script>

<script src="/new_lgx/Public/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/admin/js/metronic.js" type="text/javascript"></script>
<script src="/new_lgx/Public/admin/js/layout.js" type="text/javascript"></script>

<script>
    jQuery(document).ready(function() {    
     //   Metronic.init(); // init metronic core components
      Layout.init(); // init current layout
    //  QuickSidebar.init(); // init quick sidebar
    });
</script>
<!-- END JAVASCRIPTS -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>