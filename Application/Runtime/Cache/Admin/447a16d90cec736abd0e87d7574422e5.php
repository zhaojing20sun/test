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
<style type="text/css">
  td,th{text-align: center;}

</style>
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
            <?php if($admin10['pid']==0){ ?>
            <a href="<?php echo U('adminadd');?>" class="btn btn-primary">
            添加代理</a><br><br>
            <?php }?>
              <form action="<?php echo U('adminlist');?>">
                
                 <input type="text"  placeholder="昵称" name="nickname"  value="<?php echo I('nickname');?>"> 
                 <button type="submit" class="btn green  btn-sm">   搜索   </button>
                 </form><br>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                
                <div class="col-md-12">
                    <!-- BEGIN BORDERED TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-coffee"></i>用户列表
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                         <div class="tools">
                           <button id="selectall" class="btn btn-sm btn-success  filter-submit margin-bottom">全选</button>
                          <button  id="selectun" class="btn btn-sm btn-success  filter-submit margin-bottom">反选</button>
                          <button id="delete" class="btn btn-sm btn-success  filter-submit margin-bottom">删除</button>
                            <br><br>
                            </div>
                            <table class="table table-bordered table-hover">
                            <thead>
                            <tr><th>选择</th>
                            
                           
                            <th>昵称</th>
                            <th>等级</th>
                            <th>所在区域</th>
                            <th>后台权限范围</th>
                             <?php if($admin10['pid']==0){ ?>
                            <th>操作</th>
                            <?php }?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($adminlist)): foreach($adminlist as $key=>$v): ?><tr>
                            <td>
                            <?php if($v['pid']!=0){?><input type="checkbox" class="selectid" id="id{$v._id}" name="id" value="<?php echo ($v["_id"]); ?>"><?php }?></td>
                               
                              
                                <td><?php echo ($v["nickname"]); ?></td>
                                <td>
                                  <?php  switch ($v['permission']) { case '1': echo '区域代理'; break; case '2': echo '个人代理'; break; default: echo '总代理'; break; } ?>

                                </td> 
                                <td>
                                  <?php echo ($v["address"]); ?>
                                </td>
                                 <td>
                                  <?php if($v['pid']==0){ echo '所有'; }else{ $true=''; foreach ($v['power'] as $key => $value) { if($value){ if($key==0){ $title="<span>代理商信息</span>&nbsp;"; }elseif($key==1){ $title="<span>钻石管理</span>&nbsp;"; }elseif($key==2){ $title="<span>活动管理</span>&nbsp;"; }elseif($key==3){ $title="<span>分销管理</span>&nbsp;"; }elseif($key==4){ $title="<span>帮助管理</span>&nbsp;"; } $true.=$title; } } if($true!=''){ echo $true; } else{ echo '暂无任何权限'; } } ?>

                                </td> 
                                 <?php if($admin10['pid']==0){ ?>
                                <td> 
                                <?php if($v['pid']!=0){ ?>
                                 <a href="<?php echo U('adminedit',array('_id' =>$v['_id']));?>" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i> 设置权限等信息</a>
                                 
                                  <a href="<?php echo U('admindelete',array('_id' =>$v['_id']));?>" class="btn btn-danger  btn-sm" onclick="return confirm('您确定要删除该用户吗，如不确定请点取消')"><i class="glyphicon glyphicon-remove"></i> 删除</a>
                                    <?php }?>
                                </td>
                                <?php }?>
                            </tr><?php endforeach; endif; ?>
                            </tbody>
                              <tfoot>
                             <tr> <th  colspan="6" > <div class="result page"><?php echo ($page); ?></div> </th> 
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
  <script type="text/javascript">
  $(function () {
    var deleteselect="<?php echo U('admindeleteajax');?>";
  //  var section_articlestatuscheck="<?php echo U('section_articlestatuscheck');?>";
  $("#selectall").click(function(){
        $(".selectid").each(function(){
          $(this).prop("checked","checked");
        });
    });
    $("#selectun").click(function(){
        $(".selectid").each(function(){
          if($(this).prop("checked"))
          {
              $(this).prop("checked","");
          }
          else
          {
               $(this).prop("checked","checked");
          }
        });
    });
     $("#delete").click(function(){
      var flag=false;
       var dropIds = new Array();  
         $(".selectid").each(function(){
           if($(this).prop("checked"))
           {
             dropIds.push($(this).val());  
             flag=true;
           }
         });
         if(!flag)
         {
            alert("请选择要删除的项！");
         }
         else
         {
            if(confirm("删除是不可恢复的，你确认要删除吗？"))
            {
               $.ajax({url : deleteselect,type : 'post',async: false,//使用同步的方式,true为异步方式
                      data : {'id':dropIds},//这里使用json对象
                      success : function(data){
                         window.location.reload();
                      },
                      fail:function(){
                      //code here...
                      }
                  });
            }
         }
    });
     
});  
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>