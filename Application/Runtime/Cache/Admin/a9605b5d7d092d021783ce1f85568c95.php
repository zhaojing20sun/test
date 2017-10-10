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
<style type="text/css">
    th{text-align: center;}
</style>
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
             <a href="<?php echo U('lanmu_add');?>" class="btn btn-primary">
            添加栏目</a><br><br>
            <!--  <form action="<?php echo U('project_complainlist');?>"> <input type="text"  placeholder="标题" name="name" value="<?php ?>">   <button type="submit" class="btn green  btn-sm">   搜索   </button></form><br> -->
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
                        <div class="tools">
                           <button id="selectall" class="btn btn-sm btn-success  filter-submit margin-bottom">全选</button>
                          <button  id="selectun" class="btn btn-sm btn-success  filter-submit margin-bottom">反选</button>
                          <button id="delete" class="btn btn-sm btn-success  filter-submit margin-bottom">删除</button>
                            <!--<button id="check" class="btn btn-sm btn-success  filter-submit margin-bottom">审核</button>-->
                            <br><br>
                            </div>
                            <table class="table table-bordered table-hover" style="text-align:center;">
                            <thead >
                             <tr ><th>选择</th><th>ID</th><th>标题</th><th>url</th><th>操作</th></tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($com)): foreach($com as $key=>$v): ?><tr >
                             <td style="vertical-align:middle;"><input type="checkbox" class="selectid" id="id<?php echo ($v["id"]); ?>" name="id" value="<?php echo ($v["id"]); ?>"></td>
                             <td style="vertical-align:middle;" ><?php echo ($v["id"]); ?></td>
                                <td style="vertical-align:middle;" ><?php echo ($v["title"]); ?></td>
                                 <td style="vertical-align:middle;" ><?php echo ($v["url"]); ?></td>
                            <td style="vertical-align:middle;"> 
                                 <a href="<?php echo U('lanmu_add',array('id' =>$v['id'],'p'=>$_GET['p']));?>" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i> 修改</a>
                                 <a href="<?php echo U('catch/catch_news',array('id' =>$v['id'],'p'=>$_GET['p']));?>" class="btn btn-warning  btn-sm" style="background:green"> 抓取新闻</a>
                                  <a href="<?php echo U('lanmu_delete',array('id' =>$v['id']));?>" class="btn btn-danger  btn-sm" onclick="return confirm('您确定要删除该项吗，如不确定请点取消')"><i class="glyphicon glyphicon-remove"></i> 删除</a>

                                </td>
                            </tr><?php endforeach; endif; ?>
                            </tbody>
                            <tfoot>
                             <tr> <th  colspan="14" style="text-align:right;"> <div class="result page"><?php echo ($page); ?></div> </th> 
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
 
  <script type="text/javascript">
  $(function () {
    var deleteselect="<?php echo U('lanmudeleteajax');?>";
   //var newliststatuscheck="<?php echo U('newliststatuscheck');?>";
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