<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>广播</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_guangbo/css/guangbo.css" rel="stylesheet">
  </head>
  <body>

<style type="text/css">
  
  a{
    color:#000;
  }
  a:hover,
a:focus {
  color: #000;
  text-decoration: none;
}
</style>
<div class="tab-container">
  <div id="box">
      <!--顶部导航，tab选项卡-->
      <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 nav-container">
              <a href="<?php echo U('new_index',array('id'=>$_SESSION['uid']));?>"><i class="back"></i></a>
              <ul id="tab-btn">
               <?php if(is_array($column)): foreach($column as $k=>$v): ?><li class="<?php if($_GET['vid']=='' && $k==0){ echo 'selected';}elseif ($_GET['vid']==$v['id']) { echo 'selected'; }?>"><a href="<?php echo U('',array('vid'=>$v['id'],'num'=>$k,'id'=>$_SESSION['uid']));?>" style="color:#fff"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
                <!-- <li class="selected">XX省</li>
                <li>XX市</li>
                <li>XX地区</li> -->
              </ul>
              <i class="search">搜索</i>
            </div>
          </div>
        </div>
      </nav>
      <!--模块-->
      <div class="tab-content">
            <!--模块1-->
            <div class="tab-content-item" style="display: block;">
            <?php if(is_array($video)): foreach($video as $key=>$v): ?><div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12 items">
                        <div class="media">
                          <div class="media-left">
                       <a href="<?php echo U('new_video_detial',array('nid'=>$v['id'],'type'=>'broadcast','id'=>$_SESSION['uid']));?>">       <img src="/new_lgx/<?php echo ($v["logo"]); ?>" class="media-object" style="width:50px;height:50px"></a>
                          </div>
                          <div class="media-body" style="padding-top:8px;">
                          <a href="<?php echo U('new_video_detial',array('nid'=>$v['id'],'type'=>'broadcast','id'=>$_SESSION['uid']));?>">    <h4><?php echo ($v["title"]); ?></h4></a>
                            <span>00:00</span><span>现时播出的节目名</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><?php endforeach; endif; ?>
            </div>
           
            <!--模块3-->
           
      </div>
  </div>
</div>

    <!--顶部导航-->
<!--     <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="back"></i>
            <ul>
              <li class="selected">XX省</li>
              <li>XX市</li>
              <li>XX地区</li>
            </ul>
            <i class="search">搜索</i>
          </div>
        </div>
      </div>
    </nav> -->
<!-- 
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 items">
          <div class="media">
            <div class="media-left">
              <img src="/new_lgx/Public/weixin/new_guangbo/images/icon/tubiao.png" class="media-object">
            </div>
            <div class="media-body">
              <h4>广播电台名称</h4>
              <span>00:00</span><span>现时播出的节目名</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 items">
          <div class="media">
            <div class="media-left">
              <img src="/new_lgx/Public/weixin/new_guangbo/images/icon/tubiao.png" class="media-object">
            </div>
            <div class="media-body">
              <h4>广播电台名称</h4>
              <span>00:00</span><span>现时播出的节目名</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 items">
          <div class="media">
            <div class="media-left">
              <img src="/new_lgx/Public/weixin/new_guangbo/images/icon/tubiao.png" class="media-object">
            </div>
            <div class="media-body">
              <h4>广播电台名称</h4>
              <span>00:00</span><span>现时播出的节目名</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 items">
          <div class="media">
            <div class="media-left">
              <img src="/new_lgx/Public/weixin/new_guangbo/images/icon/tubiao.png" class="media-object">
            </div>
            <div class="media-body">
              <h4>广播电台名称</h4>
              <span>00:00</span><span>现时播出的节目名</span>
            </div>
          </div>
        </div>
      </div>
    </div>
 -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_guangbo/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_guangbo/js/guangbo.js"></script>
     
  </body>
</html>