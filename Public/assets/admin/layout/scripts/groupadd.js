$(function () {
   

    $('form[name=groupadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            groupname : {
                required : true
            }
        },
        messages : {
            groupname : {
                required : "名称不能为空" 
            }
        }
    });
});