$(function () {
   
   
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            catname : {
                required : true
            }
        },
        messages : {
            catname : {
                required : "分类名称不能为空"
            }
        }
    });
});