<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>新动态</title>
<link href="/new_lgx/Public/weixin/new_write/css/webiaoqing.css" rel="stylesheet" type="text/css">
 
   
    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_write/css/xindongtai.css?v1.0" rel="stylesheet">
     <link href="http://at.alicdn.com/t/font_gijl9do9zkqehfr.css" rel="stylesheet">
      <link href="http://at.alicdn.com/t/font_eyaq1p86sq44e7b9.css" rel="stylesheet">
  
  </head>
  <body>

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="cancel"></i>
            <h3>新动态</h3>
         
          </div>
        </div>
      </div>
    </nav>
<style type="text/css">
  .biaoqian{
    color:#000;
    border: 1px solid #ccc;
    padding:2px;
    font-size: 16px;
  }
 
</style>
<!-- <script type="text/javascript" src="/new_lgx/Public/common/js/wangEditor.min.js"></script> -->

    <!--表单-->
    <div class="container-fluid">
      <div class="row" >
      <form  action="<?php echo U('write_save');?>"  method="post" enctype="multipart/form-data">
        
        <div class="col-xs-offset-1 col-xs-10 margin-top-24">
          
       

            <div class="form-group">
          
          <article id="form_article" contenteditable="true" onkeydown="myInput.listen(this, event);" style="width:100%;height:230px;border:1px solid #ccc;border-radius:5px;padding:2%;">
            <?php echo (htmlspecialchars_decode($news["content"])); ?>
          </article>
          <hr style="margin:0;    border-top: 1px solid #ccc;position:relative;top:-30px;">
          <i class="icon iconfont icon-biaoqing" style="font-size:20px;color:gary;position:absolute;top:200px;left:16px;" id="biaoqing" title="true"></i>

    <div class="page_emotion box_swipe" id="page_emotion" style="opacity:0.8;width:100%;overflow:hidden;position:absolute;left:-1px;top:-372px;z-index:2">
      <dl id="list_emotion" class="list_emotion pt_10" style="width:100%;"></dl><!-- 表情框 -->
      <dt><ol id="nav_emotion" class="nav_emotion" style="width:100%;"></ol></dt><!-- 分页提示点 -->
    </div>


             <textarea  name="content" id="content" class="form-control" placeholder="分享您的动态" rows="10" style="display:none"></textarea> 
             

            </div>
         
        </div>
         <input type="hidden" name="id" value="<?php echo ($news["id"]); ?>">
         <input type="hidden" name="p" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
           <!--  <input type="hidden" name="type" value="<?php echo ($_GET['type']); ?>"> -->
               <!--    <div class="col-xs-offset-1 col-xs-10 weizhi-container">
                      <input type="radio" value="0" name="fenlei" checked="">
                       不分类(默认杂说)
                   </div>  -->
             <div class="col-xs-offset-1 col-xs-10 weizhi-container">
            <!-- <input type="radio" value="1" name="fenlei">  -->
           分类:
           <select name="type" >
             <option value="0">请选择分类</option>
             <?php if(is_array($type)): foreach($type as $key=>$v): if($v['title']!='热门' and $v['title']!='关注'){ ?>
             <option value="<?php echo ($v["id"]); ?>" <?php if($news['type']==$v['id']) echo 'selected' ?>><?php echo ($v["title"]); ?></option>
             <?php } endforeach; endif; ?>
           </select>
          </div>
         <!--  <div class="col-xs-offset-1 col-xs-10 weizhi-container">
           <i class="weizhi"></i>
           <span>显示位置</span>
         </div> -->
          <!-- <div class="col-xs-offset-1 col-xs-10 xuanzebankuai-container">
            <i class="xuanzebankuai"></i>
            <span>选择发布版块</span>
          </div> -->
          <div class="col-xs-offset-1 col-xs-10 camera-container" id="image"  style="height:auto">
<!--           <input type="text" name="pic" value=""> -->
<?php $re=M('weixin_release_pic')->where(array('aid'=>$news['id']))->select(); if($re){ foreach ($re as $key => $value) { ?>
<img src="/new_lgx<?php echo ($value["pic"]); ?>" style="width:30%;max-height:100px;margin-left:2%" class="uploadimg touch" title="<?php echo ($value["id"]); ?>">
<input type='text' name='pic[]' value="<?php echo ($value["pic"]); ?>" style='display:none'/>
           <?php
 } } ?>
          </div>
          <div class="col-xs-offset-1 col-xs-10 camera-container" id="upload">
            <i class="camera"></i>
            <span>添加图片</span>
           
          </div>
          <input type="file" name="source" style="display:none;" id="source">
          <div class="col-xs-offset-1 col-xs-10 tongzhi-container">
            <i class="tongzhi"></i>
            <span>通知联系人</span>
          </div>

          <div class="col-xs-offset-1 col-xs-10 tongzhi-container" style="text-align:center;margin-bottom:100px;">
         
             <input type="submit" id="fabu" value="发布" style="margin-bottom:90px;position:relative;z-index:99;padding:3px 40px;margin-top:10px;border:0;background:#9E1E92;color:white;">
          </div>

        

      </div>
    </div>
</form>
 <form id='myupload' action="<?php echo U('ajax_upload');?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="uploadphoto" multiple="multiple" name="uploadfile[]" value="请点击上传图片"  style="display:none;" />
  </form>
   <img src="/new_lgx/Public/weixin/new_write/images/foot.png" style="position:fixed;bottom:0;max-width:100%">
   
    <script src="/new_lgx/Public/weixin/new_write/js/xindongtai.js"></script>
      <script type='text/javascript' src='/new_lgx/Public/common/js/jquery-2.0.3.min.js'></script>
       <script src="/new_lgx/Public/weixin/new_write/js/bootstrap.min.js"></script>
<script type='text/javascript' src='/new_lgx/Public/common/js/jquery.form.js'></script>
 <script src="/new_lgx/Public/weixin/new_write/js/webiaoqin.js" ></script>
 <script type="text/javascript">
 var timeoutevent=0;
      $(function(){
            $(".touch").on({
                   touchstart:function(e){
                      timeoutevent=setTimeout('change()',600);
                       e.preventDefault();
                   },
                   touchmove:function(){
                       clearTimeout(timeoutevent)
                       timeoutevent=0
                   },
                   touchend:function(){
                    
                    clearTimeout(timeoutevent)
                  
                       if(timeoutevent!=1){
                     //  longpress('+$(this).attr('title')+')
                          if(confirm("确定要删除吗")){
                              longpress($(this).attr('title'))
                          }
                       }
                       return false
                   } 
            })
      })
      function change(){
        timeoutevent=1
      }
      function longpress(id){
         timeoutevent=0;
         $.ajax({
            url:"<?php echo U('ajaxdeleteimg');?>",
            type:'post',
            data:'id='+id,
            success:function(msg){
               if(msg==1){
                $("img[title='"+id+"']").next().next().remove()
                 $("img[title='"+id+"']").next().remove()
                   $("img[title='"+id+"']").remove()
                  
               }
            }
         })
      }
 </script>
    <script type="text/javascript">
$(document).ready(function(e) {
   //
   
   $("#uploadphoto").change(function(){
    var img=$(".uploadimg").size()
    
    $("#myupload").append("<input type='hidden' name='num' value='"+img+"'>");
    //alert(1)
     $("#myupload").ajaxSubmit({ 
        dataType:  'json', 
        success: function(data) {
         if(data=='2'){
         alert('最多可上传9张图片')
           
         }else{
          
                         var myobj=eval(data);

                for(var i=0;i<myobj.length;i++){
                    
                    var src ='/Uploads/'+myobj[i].savepath+myobj[i].savename;
                    var src1='/Uploads/'+myobj[i].showimg
                  var attstr= '<img src="/new_lgx'+src1+'" style="width:30%;height:100px;margin-left:2%" class="uploadimg" >';
                     $("#image").next().css('margin-top',"10px")  
                                $("#image").append(attstr);
                                   $("#image").append("<input type='text' name='pic[]' value='"+src+"' style='display:none'/>");
                                   $("#image").append("<input type='text' name='showpic[]' value='"+src1+"' style='display:none'/>");

                }
           
         }


        }, 
        error:function(xhr){ //上传失败 
           alert("上传失败"); 
          
        } 
    }); 
   });
 

});
</script>
           <script type="text/javascript">
      $(".cancel").click(function(){
           window.history.go(-1)
      })
         $("#upload").click(function(){
           $("#uploadphoto").click()
         })
     
      
          $("form").submit(function(){
            var type=$("select[name='type']").val()
              var pic=$("input[name='pic[]']").size()
            if(type!=0){
                if(pic<1){
                  alert("已选分类，请上传图片")
                  return false
                }
            }
          
            
             var con=$("#form_article").html()
             $("#content").val(con)
              //alert($("#content").val())
             if($("#content").val()==''){
                  alert("请填写内容")
                return false
              }else{
                return true
              }
          })
 
       
    </script>
     <script>
  $(function(){
    var say = '说点什么...';
    if ($("#form_article").html() === "") {
      $("#form_article").html(say);
    }
    $("#form_article").click(function(){
            if($("#form_article").html() == say){
                $("#form_article").html("");
            }
      });
      $("#page_emotion  dd").click(function(){
            $("#form_article").html( $("#form_article").html().replace(say, '') );
      });
      $("#biaoqing").click(function(){
        var title=$(this).attr('title')
        if(title=='true'){
           $("#page_emotion").css({'top':'232px'})
         $(".weizhi-container").css({"margin-top":'152px'})
         $(this).attr('title','false')
        }else{
          $("#page_emotion").css({'top':'-372px'})
         $(".weizhi-container").css({"margin-top":'0px'})
         $(this).attr('title','true')
        }
         
      })
  });
</script> 
    <script type="text/javascript">
   /* $(function(){
   
      
         $(".w-e-toolbar").append("<div class='w-e-menu tupian' onclick='uploadphoto.click()' style='z-index:10001;padding: 3px 10px;'><i class='icon iconfont icon-tupian' style='font-size:16px;padding-top:0;'></i></i></i></div>")
      

    })*/
    </script>
   
  </body>
</html>