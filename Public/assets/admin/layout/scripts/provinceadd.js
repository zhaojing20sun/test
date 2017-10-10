$(function () {
   
   
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            name : {
                required : true
            }
        },
        messages : {
            name : {
                required : "名称不能为空"
            }
        }
    });
});