$(function () {
   
   
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            title : {
                required : true
            }
        },
        messages : {
            title : {
                required : "字符不能为空"
            }
        }
    });
});