$(function () {
   

    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            username : {
                required : true
            }
        },
        messages : {
            username : {
                required : "组名称不能为空"
            }
        }
    });
});