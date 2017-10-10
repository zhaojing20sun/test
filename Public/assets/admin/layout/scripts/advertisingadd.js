$(function () {
   
   
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
             position : {
                required : true
            },
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
             position : {
                required : "网站位置不能为空"
            },
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