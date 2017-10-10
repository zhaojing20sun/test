$(function () {
   
   
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
             name : {
                required : true
            },
            
            link : {
                required : true
            },
             desc : {
                required : true
            },
             account : {
                required : true
            }
        },
        messages : {
             name : {
                required : "名称不能为空"
            },
           
            link : {
                required : "链接不能为空"
            },
            desc : {
                required : "描述不能为空" 
            },
            account : {
                required : "账号不能为空" 
            }
        }
    });
});