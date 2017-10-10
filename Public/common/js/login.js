 $(function(){
  jQuery.validator.addMethod("pwdd", function(value, element) {   
        var tel = /^[a-zA-Z|0-9][\w]{4,16}$/;
        return this.optional(element) || (tel.test(value));
    }, "5-17 字母、数字、下划线'_'");
    
 $('form[name=login]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            nickname : {
                required : true,
                remote : {
                    url : check_member,
                    type : 'post',
                    dataType : 'json',
                    data : {
                       nickname : function () {
                         return $('#nickname').val();
                       }
                     }
                }
            },
             pwd : {
                required : true,
                pwdd : true,
                remote : { 
                    url : check_pwd,
                    type : 'post',
                    dataType : 'json',
                    data : {
                       pwd : function () {
                         return $('#pwd').val();
                       },
                       nickname : function () {
                         return $('#nickname').val();
                       }
                     }
                }
            },
            ver : {
                required : true,
                remote : {
                    url : check_verify,
                    type : 'post',
                    dataType : 'json',
                    data : {
                       ver : function () {
                         return $('#ver').val();
                       }
                     }
                }
            }

        },
        messages : {
            nickname : {
                required : "请输入用户名",
                remote:"用户名不存在"
            },
             pwd : {
                required : "请输入密码！",
                remote:"密码错误"
            },
            ver : {
                required : "请输入验证码！",
                remote:"验证码错误"
            }
        }
        
    });
});