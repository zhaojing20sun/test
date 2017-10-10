$(function () {
   
   jQuery.validator.addMethod("user", function(value, element) {   
        var tel =  /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
        return this.optional(element) || (tel.test(value));
    }, " ");
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
            group_id : {
                required : true
            },
            username : {
                required : true,
                 rangelength : [3,20]
            },
             pseudonym : {
                required : true
            },
            password : {
                required : true,
                pwd : true
            },
            realname : {
                required : true,
                rangelength : [3,20]
            },
            email : {
                required : true,
                user : true
            }
        },
        messages : {
            group_id : {
                required : "管理员组不能为空"
            },
            username : {
                required : "管理员id不能为空",
                 rangelength : "管理员id在3-20个字之间" 
            },
            pseudonym : {
                required : "笔名不能为空" 
            },
            password : {
                required : "密码不能为空" 
            },
            realname : {
                required : "真实姓名不能为空",
                rangelength : "真实姓名在3-20个字之间" 
            },
            email : {
                required : "邮箱不能为空",
                user : "邮箱格式不正确" 
            }
        }
    });
});