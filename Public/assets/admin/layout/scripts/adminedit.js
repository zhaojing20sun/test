$(function () {
   
 
    $('form[name=adminadd]').validate({
        errorElement : 'span',
        success : function (label) {
            label.addClass('success');
        },
        rules : {
            group_id : {
                required : true
            },
            username : {
                required : true,
                 rangelength : [3,20]
            },
            realname : {
                required : true,
                rangelength : [3,20]
            }
        },
        messages : {
            group_id : {
                required : "管理员组不能为空"
            },
            username : {
                required : "管理员id不能为空",
                 rangelength : "管理员id在3-20个字之间" 
            },
            realname : {
                required : "真实姓名不能为空",
                rangelength : "真实姓名在3-20个字之间" 
            }
        }
    });
});