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
            keyword_a : {
                required : true
            }
        },
        messages : {
            title : {
                required : "标题不能为空"
            },
            keyword_a : {
                required : "关键词不能为空"
            }
        }
    });
});