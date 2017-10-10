<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>举报</title>
    <!-- Bootstrap -->
    <link href="/new_lgx/Public/weixin/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/new_lgx/Public/weixin/new_message/css/gonggao.css?v1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_c1mtfvaqol84cxr.css">
  </head>
  <style type="text/css">
   body{background: #ccc;}
   p{font-size: 16px;margin:15px 0 5px 15px;}
   .select{background: #fff;border-top: 1px solid #999999;border-bottom: 1px solid #999999;height: auto;}

   .select .menu{width: 96%;margin-left: 4%;height:40px;line-height: 40px;border-bottom:1px solid #ccc; position: relative;}
   .last{width: 96%;margin-left: 4%;height:40px;line-height: 40px;}
   .icon-xiangqing{position: absolute;right:2%;color: #ccc;}
   .content{margin-top: 15px;width: 100%;height:80px;text-align: center;display: none}
.btn1 {
  margin-top: 10px;
   
    font-size: 15px;
    height: 35px;
    
    width: 90%;
}

.green {
    color: #FFFFFF;
    background-color: #3F89EC;
}
  </style>
  <body>


    <div class="tab-container">
      <div id="box">
        <!--顶部导航，tab选项卡-->
        <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 nav-container">
                <i class="back"></i>
               <h3>举报</h3>
              </div>
            </div>
          </div>
        </nav>
        <!--模块-->
        <div class="tab-content" id="moban1">
          <!--模块1-->
        <p>该动态传播了什么不良信息？</p>
       <div class="select">
        
           <div class="menu" title="1">色情低俗 <i class="icon iconfont icon-xiangqing"></i> </div>
           <div class="menu" title="2">政治敏感 <i class="icon iconfont icon-xiangqing"></i> </div>
           <div class="menu" title="3">违法暴力 <i class="icon iconfont icon-xiangqing"></i> </div>
           <div class="menu" title="4" style="border:none">暴恐血腥 <i class="icon iconfont icon-xiangqing"></i> </div>
       

       </div>
        </div>

       <div class="content" id="moban2">
       <form action="<?php echo U('release_jubao');?>" method="post">
       <input type="hidden" name="type" id="type" value="">
       <input type="hidden" name="rid"  value="<?php echo ($_GET['rid']); ?>">
          <textarea id="content" name="content" style="width:100%;height:80px;color:#ccc" onfocus="if(value=='  详细描述被举报人的恶意行为'){value=''}"
    onblur="if (value ==''){value='  详细描述被举报人的恶意行为'}">  详细描述被举报人的恶意行为</textarea>
          <button type="submit" class="btn1 green  btn jubao" onclick="alert('您的举报信息已提交，我们会尽快处理！')">   提 交   </button>  </form> 
       </div>

     

      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/new_lgx/Public/weixin/new_message/js/bootstrap.min.js"></script>
    <script src="/new_lgx/Public/weixin/new_message/js/gonggao.js"></script>
     <script type="text/javascript">
 $(function(){
  $(".back").click(function(){
        window.history.go(-1)
  })
    $("#content").focus(function(){
        $(this).css({'color':'#000','height':'80px'})
    })
     $("#content").blur(function(){
        if($(this).val()!='  详细描述被举报人的恶意行为' && $(this).val()!=''){
          $(this).css({'color':'#000','height':'80px'})
        }else{
          $(this).css({'color':'#ccc','height':'80px'})
        }
        
    })
     $(".menu").click(function(){
        var type=$(this).attr('title')
        $("#moban1").hide()
        $("#moban2").show()
        $("#type").val(type)
     })
     
 })
  
    </script>
  </body>
</html>