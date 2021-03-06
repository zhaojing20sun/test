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
                    欢迎您，<?php  switch ($admin10['permission']) { case '': echo '<span style="color:red">[总代理]</span>'; break; case '1': echo '<span style="color: orange">[区域代理]</span>'; break; case '2': echo '<span style="color:   #87CEEB">[个人代理]</span>'; break; }?>-<?php echo ($admin10["nickname"]); ?>
                    
                                        </span>
                   
                    </a>
                 
                </li>
                
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler" style="float:right;line-height:46px">
                    <a href="<?php echo U('index/out');?>" class="dropdown-toggle" style="">
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
              
                 <?php if(is_array($sencodcolumnlist)): foreach($sencodcolumnlist as $key=>$v): ?><li class="start  <?php if($open==$v['_id']) echo 'active open'; ?>"  >
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
                        <li <?php if($active==$value['_id']) echo 'class="active"'; ?>  >
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
<style type="text/css">
    .checker,.power{display: inline-block;}
    .power{margin-left: 1%;}

</style>
  
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>  个人信息
                            </div>
                           
                        </div>
                        <div class="portlet-body form">
                            <form role="form" action="<?php echo U('index_save');?>" name="adminadd"  method="post">
                                <div class="form-body">
                                <input type="hidden" name="id" value="<?php echo ($admin10["_id"]); ?>">
                                <table class="table table-bordered table-hover">
                            <tbody>
                            <tr><td>昵称:</td><td><?php echo ($admin10["nickname"]); ?></td>
 <?php if($admin10['pid']!=0){?>
                             <tr><td>上级代理:</td><td><?php  $re=$admin->where(array('_id'=>$admin10['pid']))->find(); switch ($re['permission']) { case '1': echo '区域代理'; break; case '2': echo '个人代理'; break; default: echo '<span style="color:red">[总代理]</span>-'.$re['nickname']; break; } ?></td>
                 
                             <tr><td>代理区域:</td><td><?php echo ($admin10["address"]); ?></td>

                              <tr><td>加入时间:</td><td><?php echo (date('Y-m-d H:i:s',$admin10["addtime"])); ?></td>

                               <tr><td>最近登录时间:</td><td><?php echo (date('Y-m-d H:i:s',$admin10["last_time"])); ?></td>

                            <tr><td>推荐码:</td><td><?php echo $admin10['_id'] ?></td>

                            <tr><td>下级代理商数:</td><td><?php echo $admin10['tuijiannumber']?$admin10['tuijiannumber']:'0'; ?></td>

                       
                            <tr><td>佣金:</td><td><?php echo $admin10['money']?$admin10['money']:'0'; ?></td>

                            <tr><td>可提现佣金:</td><td><?php echo $admin10['money']?$admin10['money']:'0'; ?></td>

                            <tr><td>业绩总汇:</td><td><?php echo $admin10['all_money']?$admin10['all_money']:'0'; ?></td>

                            <tr><td>是否有绑定提现微信:</td><td><?php echo $admin10['is_weixin']?'是':'否'; ?></td>

                            
<?php } ?>
                             

                            </tbody>
                            </table>
                                   <?php if($admin10['pid']!=0){?>
                                   <div class="form-group">
                                        <label>真实姓名</label>
                                        <div class="input-group">
                                         <input type="text" id="realname" class="form-control" placeholder="真实姓名" name="realname"  value="<?php echo $admin10['realname'] ?>">

                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label>身份证号</label>
                                        <div class="input-group">
                                         <input type="text" id="idnumber" class="form-control" placeholder="身份证号" name="idnumber"  value="<?php echo $admin10['idnumber'] ?>">

                                        </div>
                                    </div>

                                     
                                    <div class="form-group">
                                        <label>手机号</label>
                                        <div class="input-group">
                                         <input type="text" id="phone" class="form-control" placeholder="手机号" name="phone"  value="<?php echo $admin10['phone'] ?>">

                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label>地址</label>
                                        <div class="input-group">
                                         <input type="text" id="address" class="form-control" placeholder="地址格式：xx省-xx市" name="address"  value="<?php echo $admin10['address'] ?>">

                                        </div>
                                    </div>


                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn red">   保  存   </button>
                                     <a href="javascript:history.back(-1)" class="btn default"> 返 回 </a>
                                </div>
                                <?php } ?>
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
<script type="text/javascript" src='/new_lgx/Public/assets/global/scripts/jquery-validate.js'></script>
<script type="text/javascript" src='/new_lgx/Public/assets/admin/layout/scripts/adminadd.js'></script>
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