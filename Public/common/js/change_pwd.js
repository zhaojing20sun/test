 $(function(){
  jQuery.validator.addMethod("pwdd", function(value, element) {   
        var tel = /^[a-zA-Z|0-9][\w]{4,16}$/;
        return this.optional(element) || (tel.test(value));
    }, "5-17 字母、数字、下划线'_'");
    
 $('form[name=change_pwd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            ori_pwd : {
                required : true,
                remote : {
                    url : check_pwd,
                    type : 'post',
                    dataType : 'json',
                    data : {
                       nickname : function () {
                         return $('#ori_pwd').val();
                       }
                     }
                }
            },
             pwd : {
                required : true,
                pwdd : true
            },
            repwd : {
                   required : true,
                  equalTo : "#pwd"
              }

        },
        messages : {
            ori_pwd : {
                required : "请输入原密码",
                remote:"密码输入错误"
            },
             pwd : {
                required : "请输入新密码！"
            },
             repwd : {
                required : "请输入确认密码！",
                equalTo : "两次输入密码不一致"
            }
        }
    });
});