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
            <a href="<?php echo U('site_setedit');?>" class="btn btn-primary">
            编辑网站参数</a><br><br>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                
                <div class="col-md-12">
                    <!-- BEGIN BORDERED TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-coffee"></i><?php echo ($active_title); ?>
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                            <table class="table table-bordered table-hover">
                            <thead>
                            <tr><th>域名</th><th><?php echo ($site_parameter["domain"]); ?></th></tr>
                            </thead>
                            <tbody>
                             <tr><td>站点名称</td><td><?php echo ($site_parameter["name"]); ?></td></tr>
                              <tr><td>允许上传的文件类型</td><td><?php echo ($site_parameter["upload_type"]); ?></td></tr>
                             <tr><td>允许上传的文件大小</td><td><?php echo ($site_parameter["filesize"]); ?>KB</td></tr>
                          
                             
                              <tr><td>联系QQ</td><td><?php echo ($site_parameter["qq"]); ?></td></tr>
                              <tr><td>站长邮箱</td><td><?php echo ($site_parameter["email"]); ?></td></tr>
                             <tr><td>联系电话</td><td><?php echo ($site_parameter["phone"]); ?></td></tr>
                             <tr><td>联系地址</td><td><?php echo ($site_parameter["address"]); ?></td></tr>
                              <tr><td>SEO标题</td><td><?php echo ($site_parameter["seo_title"]); ?></td></tr>
                               <tr><td>描述</td><td><?php echo ($site_parameter["keyword"]); ?></td></tr>
                                <tr><td>关键字</td><td><?php echo ($site_parameter["description"]); ?></td></tr>
                             
                            </tbody>
                            <tfoot>
                             <tr> <th  colspan="8" > <div class="result page"><?php echo ($page); ?></div> </th> 
                              </tr>
                              </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE PORTLET-->
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
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/new_lgx/Public/assets/global/plugins/respond.min.js"></script>
<script src="/new_lgx/Public/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/new_lgx/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/new_lgx/Public/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="/new_lgx/Public/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/new_lgx/Public/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {    
       Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
    });
  </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>