<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>新闻线索爆料</title>

    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_baoliao/css/baoliao.css" rel="stylesheet">
    <script type="text/javascript" src="/new_lgx/Public/common/js/wangEditor.min.js"></script>
      <link href="http://at.alicdn.com/t/font_gijl9do9zkqehfr.css" rel="stylesheet">
  </head>
  <body >

    <!--顶部导航-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 nav-container">
            <i class="cancel"></i>
            <h3>新闻线索爆料</h3>
              
           <!--  <i class="send"><a href="" id="tijiao">发送</a></i> -->
          </div>
        </div>
      </div>
    </nav>

    <!--表单-->
    <div class="container-fluid">
      <div class="row">
       <form  id="fabu1" action="<?php echo U('baoliao_add_save');?>"  method="post" enctype="multipart/form-data">
        <div class="col-xs-offset-1 col-xs-10 margin-top-24">
        <input type="hidden" name="p" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
         <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
          <!--   <div class="form-group">
            <label for="name">姓名</label>
            <input type="text" name="name" required id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="contact">联系方式</label>
            <input type="text" name="tel" required id="contact" class="form-control">
          </div> -->
            <div class="form-group">
              <label for="contact">标题</label>
              <input type="text" name="title"  id="title"  class="form-control" value="<?php echo ($news["title"]); ?>">
            </div>
             <div class="form-group">
              <label for="contact">类别</label><br>
             <select name="type" id="type">
                <option value="0">请选择分类</option>
                <?php if(is_array($type)): foreach($type as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($news['type']==$v['id']) echo "selected"; ?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
             </select>
            </div>
            <div class="form-group">
              <label for="content">爆料内容</label>
              <div id="div1" style="width:100%"><?php echo htmlspecialchars_decode($news['content']) ?></div>  
            </div>
              <textarea name="content" style="display:none" id="content" ></textarea>
          <div class="camera-container">
            <i class="camera"></i>
            <span>添加封面图片</span>   
            <input type="file" name="path"  style="display:none"> 
          </div>
           <div class="form-group" style="margin-top:10%;padding-left:40%">
              <input type="submit" id="fabu" value="提交" style="background:#fcd2de;    background-color: #fff;width:50px">
            </div>
        </div>
      </div>
    </div>
</form>
<form id='myupload' action="<?php echo U('ajax_upload');?>" method='post' enctype='multipart/form-data'>
    <input type="file" id="uploadphoto" name="uploadfile" value="请点击上传图片"  style="display:none;" />
  </form>
  
    <script src="/new_lgx/Public/weixin/new_baoliao/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_baoliao/js/baoliao.js"></script>
      <script type='text/javascript' src='/new_lgx/Public/common/js/jquery-2.0.3.min.js'></script>
<script type='text/javascript' src='/new_lgx/Public/common/js/jquery.form.js'></script>
<script type="text/javascript">
    $(".w-e-text").html('')
    <?php if(I('id')){ ?>
    // $(".w-e-text").html('')
      $('.w-e-text').html("<?php echo htmlspecialchars_decode($news['content']) ?>")
      <?php
 } ?>
</script>
       <script type="text/javascript">
$(document).ready(function(e) {
   //

 
   $("#uploadphoto").change(function(){
    //alert(1)
     $("#myupload").ajaxSubmit({ 
        dataType:  'json', 
        success: function(data) {
             
            if(data.status == 1){
                var src = data.url;  
                var attstr= '<img src="/new_lgx'+src.substr(1)+'">';  
                $(".w-e-text").append(attstr);
               // $(".w-e-text").html("上传图片"+data.name+"成功，图片大小："+data.size+"K,文件地址："+data.url);
            }else{
                $(".w-e-text").html(data.content);
            }
             
        }, 
        error:function(xhr){ //上传失败 
           alert("上传失败"); 
          
        } 
    }); 
   });
   $("#fabu").click(function(){
    $("#content").val($(".w-e-text").html())
    //alert('已提交，请等待审核')
   })
    $("#fabu1").submit(function(){
        if($("#title").val()==''){
          alert('请填写标题!')
          return false
        }else if($("#type").val()=='0'){
          alert('请选择分类!')
          return false
        }else if($("#content").val()==''){
          alert('请填写内容!')
          return false
        }else{
          alert('已提交，请等待审核')
          return true
        }
    })
});
</script>
      <script type="text/javascript">
      $(".cancel").click(function(){
           window.history.go(-1)
      })
    $(".camera").click(function(){
       $("input[name='source']").click()
    })
     $(".camera").next().click(function(){
       $("input[name='path']").click()
    })

    </script>
        <script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#div1')

    // 下面两个配置，使用其中一个即可显示“上传图片”的tab。但是两者不要同时使用！！！
     editor.customConfig.uploadImgShowBase64 = true   // 使用 base64 保存图片
    // editor.customConfig.uploadImgServer = '/upload'  // 上传图片到服务器
editor.customConfig.menus = [
        
        'link',
       
        'bold',
        'head'
    ]
    editor.create()
      $(".w-e-toolbar").append("<div class='w-e-menu tupian' onclick='uploadphoto.click()' style='z-index:10001;padding: 3px 10px;'><i class='icon iconfont icon-tupian' style='font-size:16px;padding-top:0;'></i></i></i></div>")
</script>
  </body>
</html>