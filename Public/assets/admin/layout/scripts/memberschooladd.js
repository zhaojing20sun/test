$(function () {
  
    $("select[name='cityid']").live("change",function(){
         $.post(getarea,{cityid:$(this).val()},function(date){
          $('select[name="areaid"]').empty();
           $('select[name="areaid"]').append('<option >请选择城区</option>');
          if(date)
          {
             
              for(var i=0;i<date.length;i++)
              {
                 $('select[name="areaid"]').append('<option value="'+date[i].areaid+'">'+date[i].areaname+'</option>');
              }
           
          }
        },'json');
       if( $("select[name='cityid']").val()!=0)
       {
          // alert($("select[name='cityid']").find("option:selected").text());
           serachlocal();
            
       }
     
    });
     $("select[name='areaid']").live("change",function(){
         //alert( $("select[name='areaid']").val());
         $.post(getstreet,{areaid:$(this).val()},function(date){
        $('select[name="streetid"]').empty();
          if(date)
          {

              for(var i=0;i<date.length;i++)
              $('select[name="streetid"]').append('<option value="'+date[i].streetid+'">'+date[i].streetname+'</option>');
          }
        },'json');
    });
   jQuery.validator.addMethod("user", function(value, element) {   
        var tel =  /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
        return this.optional(element) || (tel.test(value));
    }, " ");
 
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            username : {
                required : true
            },
            email : {
                required : true,
                user : true
            },
            password : {
                required : true
            },
            cname : {
                required : true
            },
            tname : {
                required : true
            }
        },
        messages : {
            username : {
                required : "用户帐号不能为空"
            },
            email : {
                required : "邮箱不能为空",
                 user : "邮箱格式不正确" 
            },
            password : {
                required : "密码不能为空" 
            },
            cname : {
                required : "联系人不能为空" 
            },
            tname : {
                required : "学校名称不能为空"
            }
        }
    });
});