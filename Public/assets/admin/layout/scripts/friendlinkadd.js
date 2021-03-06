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
            linkpic : {
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
            linkpic : {
                required : "图片不能为空"
            },
            link : {
                required : "链接地址不能为空" 
            }
        }
    });
});