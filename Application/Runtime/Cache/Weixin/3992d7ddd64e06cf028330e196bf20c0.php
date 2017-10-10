<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>wo的信息</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_message/css/gonggao.css?v1.0" rel="stylesheet">
  </head>
  <body>


    <div class="tab-container">
      <div id="box">
        <!--顶部导航，tab选项卡-->
        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 nav-container">
             <a href="<?php echo U('new_my');?>">   <i class="back"></i></a>
                <ul id="tab-btn">
                  <li class="selected">公告</li>
                  <li>信息</li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!--模块-->
        <div class="tab-content">
          <!--模块1-->
          <div class="tab-content-item" style="display: block;">
          <?php if(is_array($message1)): foreach($message1 as $key=>$v): ?><div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 items">
                  <div class="media">
                    
                    <div class="media-body" style="height:50px;line-height:50px;">
                     
                      <span style="font-size:16px;"><?php echo ($v["title"]); ?></span>
                      <span class="fr "><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><?php endforeach; endif; ?>
           
          </div>
          <!--模块2-->
          <div class="tab-content-item" >
          <?php if(is_array($message2)): foreach($message2 as $k=>$v): ?><div class="container-fluid" style="border-bottom:1px solid #8B7765" class="<?php echo ($v["id"]); ?>">
              <div class="row">
                <div class="message2 items" style="padding-right: 10px;
    padding-left: 10px;" title="<?php echo ($v["id"]); ?>">
                  <div class="media">
                  <!--   <div class="media-left">
                    <img src="/new_lgx/Public/weixin/new_message/images/icon/tubiao.png" class="media-object">
                  </div> -->
                    <div class="media-body" <?php if($v['view']==0){ echo "style='color:red'";}?>  id="<?php echo ($v["id"]); ?>">
                      <span style="height:50px;font-size:16px;line-height:50px;float:left;display:inline-block;width:50%;overflow:hidden"><?php echo (htmlspecialchars_decode($v["content"])); ?></span>
                      <span style="font-size:14px;height:50px;line-height:50px;float:right" class="time<?php echo ($k); ?>"><?php echo date('Y-m-d H:i:s',$v['addtime'])?>
                    
                      </span>

                    </div>

                  </div>

                </div>
   <div style="position:absolute;width:50px;height:50px;line-height:50px;text-align:center;display:none" title="<?php echo ($k); ?>" id="<?php echo ($v["id"]); ?>" class="delete">删除</div>
                <div  class="content" style="text-indent:1em;min-height:auto;padding:2%;display:none"><?php echo (htmlspecialchars_decode($v["content"])); ?>
                </div>
              </div>
            </div><?php endforeach; endif; ?>
          
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
 var timeoutevent=0;
 var display=0;
   var startX = 0
   var startY = 0;  
      $(function(){
            $(".message2").on({
                   touchstart:function(e){
                      timeoutevent=setTimeout('change()',600);
                       e.preventDefault();
                        var touch = event.targetTouches[0];
                        var x = Number(touch.pageX); //页面触点X坐标  
                    var y = Number(touch.pageY); //页面触点Y坐标  
                     startX = x;  
                    startY = y;  
                    
                   },
                   touchmove:function(){
                       clearTimeout(timeoutevent)
                       timeoutevent=0
                       var touch = event.targetTouches[0];
                        var x = Number(touch.pageX); //页面触点X坐标  
                    var y = Number(touch.pageY); //页面触点Y坐标  
                     if(x-startX < 0){
                       $(this).css({'margin-right':'50px'})
                      var title=$(this).next().attr('title')
                      $(this).next().css({"top":$(this).next().attr('title')*50+'px','right':'0px','background':'white','color':'red','z-index':'99','display':'block'})
                      $(".time"+title).css({'font-size':'10px'})
                     timeoutevent=0
                     }else if(x-startX > 0){
                      $(this).css({'margin-right':'0px'})
                      var title=$(this).next().attr('title')
                    $(this).next().css({"top":$(this).next().attr('title')*50+'px','right':'0px','background':'white','color':'red','z-index':'99',"display":'none'})
                    $(".time"+title).css({'font-size':'14px'})
                     }
                   },
                   touchend:function(){
                    // alert(timeoutevent)
                    clearTimeout(timeoutevent)
                  
                       if(timeoutevent!=0)
                       {
                        var id=$(this).attr('title')
                        change1(id)
                         if(display==0){
                          $(this).next().next().slideDown(300)
                          display=1
                         }else{
                          $(this).next().next().slideUp(300)
                          display=0
                         }
                         
                       }
                       return false
                   } 
            })
      })
      function change(){
        timeoutevent=1
      }
           function change1(id){
         $.ajax({
           url:"<?php echo U('change_view');?>",
           type:'post',
           data:'id='+id,
           success:function(msg){
              if(msg==1){
                $("#"+id).css({'color':'#333'})
              }
           }
         })
      }
 </script>
      <script type="text/javascript">
      $(function(){
         $(".delete").click(function(){
    var id=$(this).attr('id')
    if(confirm('确定要删除吗')){
          $.ajax({
           url:"<?php echo U('notice_delete');?>",
           type:'post',
           data:'id='+id,
           success:function(msg){
              if(msg>0){
                location.reload()
              }
           }
       })
    }
       
    
   })
      $(".message2").click(function(){
         var status=$(this).next().css('display')
       // alert(status)
        if(status=='none'){
              $(this).next().slideDown(300)
            }else{
              $(this).next().slideUp(300)
            }
    
      })
 
      })
  
    </script>
  </body>
</html>