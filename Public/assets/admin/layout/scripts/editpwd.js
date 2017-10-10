$(function () {
   
    jQuery.validator.addMethod("pwd", function(value, element) {   
        var tel = /^[a-zA-Z|0-9][\w]{4,16}$/;
        return this.optional(element) || (tel.test(value));
    }, "5-17 字母、数字、下划线'_'");

    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            oldpassword : {
                required : true,
                remote : {
                    url : checkpassword,
                    type : 'post',
                    dataType : 'json',
                    data : {
                        oldpassword : function () {
                            return $('#oldpassword').val();
                        }
                    }
                }
            },
            newpassword : {
                required : true,
                 pwd : true
            },
            confirmpassword : {
                required : true,
                equalTo : "#newpassword"
            }
        },
        messages : {
            oldpassword : {
               required : "旧密码不能为空",
               remote : "旧密码不正确"
            },
            newpassword : {
               required : "新密码不能为空" 
            },
            confirmpassword : {
               required : "确认密码不能为空",
                equalTo : "两次输入的密码不一致"
            }
        }
    });
});