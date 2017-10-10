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
                required : "栏目名称不能为空"
            }
        }
    });
});