$(function () {


    //jQuery Validate 表单验证
    jQuery.validator.addMethod("user", function(value, element) {   
        var tel =  /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
        return this.optional(element) || (tel.test(value));
    }, "非法的电子邮件");
    jQuery.validator.addMethod("pwd", function(value, element) {   
        var tel = /^[a-zA-Z|0-9][\w]{4,16}$/;
        return this.optional(element) || (tel.test(value));
    }, "5-17 字母、数字、下划线'_'");
    

    $('.page-container form').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            username : {
                required : true,
                user : true
            },
            password : {
                required : true,
                pwd : true
            }
        },
        messages : {
            username : {
                required : "账号不能为空" 
            },
            password : {
                required : "密码不能为空"
            }
        }
    });

});