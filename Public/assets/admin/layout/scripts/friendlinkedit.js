$(function () {
   
   
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            title : {
                required : true
            },
             link : {
                required : true
            }
        },
        messages : {
            title : {
                required : "标题不能为空"
            },
            link : {
                required : "链接地址不能为空" 
            }
        }
    });
});