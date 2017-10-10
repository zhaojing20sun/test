 $(function(){
  jQuery.validator.addMethod("phone", function(value, element) {   
    var length = value.length;
        var tel =/^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;//电话号码验证
        return this.optional(element) || (length == 11 &&tel.test(value));
    }, "手机号码格式不正确");
    
 $('form').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
             
             tel : {
                required : true,
                phone : true
            },
            email : {
                   required : true,
                  email : true//自带邮箱验证
              }

        },
        messages : {

             tel : {
                required : "请输入手机号码"//如果只要求格式，不要求“必须”，可去掉tel：及后面部分
            },
             email : {
                required : "请输入邮箱！",
                email:"请输入正确的邮箱格式！"
            }
        }
    });
});