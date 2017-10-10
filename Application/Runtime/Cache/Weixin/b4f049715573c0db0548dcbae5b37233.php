<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>我的草稿</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_message/css/gonggao.css" rel="stylesheet">
  </head>
  <body>


    <div class="tab-container">
      <div id="box">
        <!--顶部导航，tab选项卡-->
       <!--  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
         <div class="container-fluid">
           <div class="row">
             <div class="col-xs-12 nav-container">
               <i class="back"></i>
               
                 <h3 style="font-size:20px;">我的草稿</h3>
               
             </div>
           </div>
         </div>
       </nav> -->
        <!--模块-->
        <div class="tab-content">
          <!--模块1--> <?php if($news){ ?>
          <div class="tab-content-item" style="display: block;">
         
          <?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="container-fluid">
              <div class="row">
   <a href="<?php echo U('new_baoliao',array('id'=>$v['id']));?>" style="color:#666">
                <div class="col-xs-12 items">
                  <div class="media">
                    
                    <div class="media-body" style="height:50px;line-height:50px;">
                     
                      <span style="font-size:16px;"><?php echo ($v["title"]); ?></span>
                      <span class="fr "><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?></span>
                    </div>
                  </div>
                </div>
</a>
              </div>
            </div><?php endforeach; endif; ?>
  
           
          </div>
    <?php }else{ ?>
    <div style="width:100%;text-align:center;padding-top:5%">
     咦，这里居然没有东西 ^_^
    </div>
  <?php } ?>
          
          </div>
        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_message/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_message/js/gonggao.js"></script>
      <script type="text/javascript">
      $(".back").click(function(){
           window.history.go(-1)
      })
     
    </script>
  </body>
</html>