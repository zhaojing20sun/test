<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 
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
                
                <?php if(is_array($columnlist)): foreach($columnlist as $key=>$v): ?><li class="classic-menu-dropdown <?php if($selected==$v['_id']) echo 'active'; ?>">
                    <a href="<?php echo U('column',array('_id' =>$v['_id']));?>" >
                    <?php echo ($v["title"]); ?> 
                    <?php if($selected==$v['_id']) echo '<span class="selected"></span>'; ?>
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
        <div class="top-menu" style="margin-right:5%;width:20%">
            <ul class="nav navbar-nav pull-right" style="width:100%">
               
                
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    
                    <span class="username username-hide-on-mobile">
                    欢迎您，<?php if($admin10['pid']==0){ echo '<span style="color:red">[超级管理员]</span>'; }else{ echo '<span style="color:green">[普通管理员]</span>'; } ?>-<?php echo ($admin10["nickname"]); ?>
                    
                                        </span>
                   
                    </a>
                 
                </li>
                
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler" style="float:right;line-height:46px">
                    <a href="<?php echo U('out');?>" class="dropdown-toggle" style="">
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
              
                 <?php if(is_array($sencodcolumnlist)): foreach($sencodcolumnlist as $key=>$v): ?><li class="start  <?php if($open==$v['_id']) echo 'active open'; ?>">
                    <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span class="title">
                    <?php echo ($v["title"]); ?> </span>
                    <span class="arrow open">
                    </span>
                     <?php if($open==$v['_id']) echo '<span class="selected"></span>'; ?>
                    </a>
                    
                    <ul class="sub-menu">
                      <?php  $column = new \Think\Model\MongoModel('column'); $subcolumnlist=$column->where(array('pid' =>$v['_id']))->order('sort_order desc')->select(); foreach ($subcolumnlist as $value){ ?>
                        <li <?php if($active==$value['_id']) echo 'class="active"'; ?>>
                            <a href="<?php echo U('column',array('_id' =>$value['_id']));?>">
                            <?php  echo $value['title'] ; ?></a>
                        </li>
                       <?php
 } ?>
                    </ul>
                </li><?php endforeach; endif; ?>
            
            </ul>
            <!-- END SIDEBAR MENU1 -->
            <!-- BEGIN RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
            
            
            <!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
           
       <script type="text/javascript" src="/new_lgx/Public/common/js/jquery-1.8.3.min.js"></script>   
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
                <div class="col-md-8 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>  修改密码
                            </div>
                           
                        </div>
                        <div class="portlet-body form">
                            <form role="form" action="<?php echo U('passwordsave');?>" name="adminadd"  method="post">
                                <div class="form-body">
                                 
                                    <div class="form-group">
                                        <label>原始密码</label>
                                        <div class="input-group">
                                         <input type="password" class="form-control" required placeholder="原始密码" name="oldpassword" id="oldpassword" >
                                           <span class='error yuanshi' style="display:none">原始密码错误</span>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label>新密码</label>
                                        <div class="input-group">
                                         <input type="password" class="form-control" required placeholder="新密码" name="newpassword" id="newpassword" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>确认密码</label>
                                        <div class="input-group">
                                         <input type="password" class="form-control" required placeholder="确认密码" name="confirmpassword" id="confirmpassword">
                                         <span class='error queren' style="display:none">两次输入密码不一致</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn red" id="tijiao">   保 存   </button>
                                </div>
                            </form>
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
<script type="text/javascript">
  //oldpassword
  //newpassword
  //confirmpassword
  $(function(){
  //alert(1)
  var check=false;
      $("#oldpassword").change(function(){
       
           var oldpassword=$(this).val()
           $.ajax({
              url:"<?php echo U('checkpassword');?>",
              type:'post',
              data:"oldpassword="+oldpassword,
              success:function(msg){
             //  alert(msg)
                     if(msg=='2'){
                      $(".yuanshi").show()
                      check=false
                     }else if(msg=='1'){
                     $(".yuanshi").hide()
                     check=true
                     }
              }
           })
      })
var check1=false
    $("#confirmpassword").change(function(){
         var newpassword=$("#newpassword").val()
         var confirmpassword=$("#confirmpassword").val()
         if(newpassword!='' && confirmpassword!=''){
              if(newpassword==confirmpassword){
                  check1=true
              $(".queren").hide()
              }else{
                $(".queren").show()
                check1=false
              }

              if(check==true && check1==true){
                $("form").submit()
              }
         }else{

         }

    })
   $("form").submit(function(){
      if(check==true && check1==true){
        return true
      }else{
        return false
      }
   })



   

  })
 
   
</script>
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