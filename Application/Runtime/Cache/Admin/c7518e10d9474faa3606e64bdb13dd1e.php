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
 
   <link rel="stylesheet" type="text/css" href="/new_lgx/Public/admin/weixin/wx.css">
    <link rel="stylesheet" type="text/css" href="/new_lgx/Public/admin/weixin/menutree.css"> 
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


//插入链接
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
                        <div style="margin:0 0 0 2%">
                        <b class="text-ts">
1、使用本模块，必须在微信公众平台申请自定义菜单使用的AppId和AppSecret，然后在【微信绑定设置】中设置。<br>
2、最多创建3 个一级菜单，每个一级菜单下最多可以创建 5 个二级菜单，菜单最多支持两层。<br>
3、拖动树形菜单再点击“保存排序”可以对菜单重排序，但最终只有“发布”后才会生效。公众平台限制了每天的发布次数。<br>
4、公众平台规定，菜单发布24小时后生效。如果为新增粉丝，则可马上看到菜单。<br>
</b>
</div>

<div class="menu" style="border-bottom: 1px solid #dbdbdb;">
                          <ul class="simpleTree" style="height:95%">
                            <li class="root" id="0">
                              <span>自定义菜单列表</span>
                              <div class="right">
                            <?php $re=M('weixinmenu')->where(array('userid'=>1,'pid'=>0))->count(); if(3>$re){ ?>
                              <i class="add add-level1" title="添加一级菜单"></i>
                              <input type="hidden" value="0"/>
                           <?php } ?>
                              </div>

                              <ul class="level1">
                                <li class="line">&nbsp;</li>

                  
                           <?php if(is_array($menu)): foreach($menu as $k=>$v): ?><li class="line">&nbsp;</li>
                              <?php $re=M('weixinmenu')->where(array('pid'=>$v['id'],'type'=>0))->order("orderid asc")->select(); $count=count($re); if($re){ ?>
                              <li  class="folder-open" >
                              <img class="trigger" src="/new_lgx/Public/common/images/spacer.gif" border="0" style="float: left;">
                                  <span class="yiji"><?php echo ($v["title"]); ?></span>
                          <div class="right">
                        <?php if(5>$count){ ?>
                          <i class="add add-level2" title="添加二级子菜单" ></i>
                  <?php } ?>
                          <input type="hidden" name="yijiyongba" value="<?php echo ($v["id"]); ?>">
                          <i class="yiji editmenu" title="编辑菜单"></i></div>

                          <ul class="level2">
                          <li class="line">&nbsp;</li>
                           <?php foreach($re as $key=>$value){ ?>
                          <?php if($key<$count-1){ ?>
                            <li   class='doc' >
                           <?php }else{ ?>
                            <li   class='doc-last' >
                           <?php } ?>
                          <span class="text erji"><input type="hidden" value="<?php echo ($value["id"]); ?>" /><a href="<?php echo U('set_menu',array('id'=>$value['id']));?>"><?php echo ($value["title"]); ?></a></span><div class="right"><input type="hidden" name="yijiyongba" value="<?php echo ($value["id"]); ?>"><i class="editmenu" title="编辑菜单"></i><i class="del" title="删除菜单"></i></div></li>
                          <?php } ?>
                          <li class="line-last"></li>
                          </ul>

                              <?php }elseif(!$menu[$k+1]){ ?>
                                    <li id="26"   class="doc-last" >
                                    <span class="text erji"><input type="hidden" value="<?php echo ($v["id"]); ?>" /><a href="<?php echo U('set_menu',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></span>
                                      <div class="right"><i class="add add-level2" title="添加二级子菜单"></i><input type="hidden" name="yijiyongba" value="<?php echo ($v["id"]); ?>"><i class="editmenu" title="编辑菜单"></i><i class="del" title="删除菜单"></i></div>
                              </li>
                                  
                          
                              <?php }else{ ?>
                              <li id="26"   class="doc" >
                              <span class="text erji"><input type="hidden" value="<?php echo ($v["id"]); ?>"/><a href="<?php echo U('set_menu',array('id'=>$v['id']));?>"><?php echo ($v["title"]); ?></a></span>
                                <div class="right"><i class="add add-level2" title="添加二级子菜单"></i><input type="hidden" name="yijiyongba" value="<?php echo ($v["id"]); ?>"><i class="editmenu" title="编辑菜单"></i><i class="del" title="删除菜单"></i></div>
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
                        <div class="cLine header">
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
                                            <div class="cLine header">
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

                    网页链接：<input name="content" type="text" id="txtTargetDesc" class="txt350 readOnly" maxlength="300"  <?php if($weixin['style'] == 2): ?>value="<?php echo ($weixin["content"]); ?>"<?php else: ?> value=""<?php endif; ?>>    <br><br><p class="red" style="padding-left:10%"> (请写全url，带上http://)</p>
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
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_menu_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;题：<input type='input' required name='image_name' class='txt350' maxlength='200' <?php if($weixin[style] == 1): ?>value='<?php echo ($weixin["image_name"]); ?>'<?php endif; ?>><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly'  <?php if($weixin[style] == 1): ?>value='<?php echo ($weixin["url"]); ?>'<?php endif; ?> name='url' maxlength='300'>  </p><?php if($weixin['style']!=1 ){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/<?php echo ($weixin["content"]); ?>' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required  name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><input type='hidden' name='id' value='"+id+"'/><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
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
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_menu_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;题：<input type='input' required name='image_name' class='txt350' maxlength='200' value='"+msg['image_name']+"'><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='"+msg['url']+"' name='url' maxlength='300'>  </p><?php if(!"+msg['id']+"){ ?><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><?php }else{ ?><div class='pic'><div class='default' style='display:none'>封面图片</div><image src='/new_lgx/"+msg['content']+"' style='display:block;'/></div><?php } ?><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><input type='hidden' name='id' value='"+msg['id']+"'/><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
      }else{
        layer.open({
  type: 1,
  scroll:'none',
  title:'编辑多图',
  skin: 'none', //加上边框
  area: ['550px', '450px'], //宽高
  content: "<form method='post' action='<?php echo U(set_menu_save);?>' enctype='multipart/form-data'><div id='editNews_content'><div class='win-news height1'>  <span class='red'>*</span>标&nbsp;&nbsp;题：<input type='input' required name='image_name' class='txt350' maxlength='200' value=''><p><span class='red'>*</span>链接目标：<input type='text' required class='txt350 readOnly' value='' name='url' maxlength='300'>  </p><div class='pic'><div class='default'>封面图片</div><image src='' style='display:none'/></div><div class='gray tip'>（为达到最佳效果，大图片建议尺寸：640像素 * 300像素）</div><p><span class='red'>*</span>封面图片：<input type='file' required name='id_photos' id='id_photos'  style='height: 30px;display:inline-block;' width='82' height='30' ></p><div id='showPic' class='uploadifyQueue'></div><input type='hidden' name='id' value='"+id+"'/><input type='hidden' value='1' name='style'><input type='hidden' value='"+order+"' name='order'><p></p><div class='win-news-operate'><input type='submit' class='btn image_submit'  value=' 确 定' ' >&nbsp;<input type='button' class='btn btn_cannel quxiao' value=' 取 消' >&nbsp;&nbsp;<span class='red' id='win-news-err'></span></div></div></div></form>"});
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
                    <!-- END SAMPLE FORM PORTLET-->
                
                </div>
            
            </div>
         
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
  
</div>

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