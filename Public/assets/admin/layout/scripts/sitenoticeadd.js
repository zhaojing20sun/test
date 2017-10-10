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
            content : {
                required : true
            }
        },
        messages : {
            title : {
                required : "标题不能为空"
            },
            content : {
                required : "管内容不能为空"
            }
        }
    });
});