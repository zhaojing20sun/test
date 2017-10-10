 $(function(){
  jQuery.validator.addMethod("pwdd", function(value, element) {   
        var tel = /^[a-zA-Z|0-9][\w]{4,16}$/;
        return this.optional(element) || (tel.test(value));
    }, "5-17 字母、数字、下划线'_'");
    
 $('form[name=register]').validate({
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
                pwdd : true
            },
            repwd : {
                   required : true,
                  equalTo : "#pwd"
              }

        },
        messages : {
            nickname : {
                required : "用户名不能为空",
                remote:"用户名已经存在"
            },
             pwd : {
                required : "请输入密码！"
            },
             repwd : {
                required : "请输入确认密码！",
                equalTo : "两次输入密码不一致"
            }
        }
    });
});