
jQuery(document).ready(function() {

   var verifyUrl = $('#verify-img').attr('src');
    $('#verify-img').click(function () {
        $(this).attr('src', verifyUrl + '/' + Math.random());
    });

    $('.page-container form').submit(function(){
        var username = $(this).find('.username').val();
        var password = $(this).find('.password').val();
        var verify = $('#verify').val();
       // alert(password);
       // alert(verify);
        if(username == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '27px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.username').focus();
            });
            return false;
        }
		
        if(password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '96px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }
         if(verify == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '166px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $('#verify').focus();
            });
            return false;
        }
        $.post(checkVerify,{verify:verify,username:username,password:password},function(date){ 
          //  alert(date);
           if(date=="false")
            {
               // alert(date);
                $('.error').fadeOut('fast', function(){
                $(this).css('top', '166px');
                });
                  $('.error').fadeIn('fast', function(){
                   $('#verify').focus();
                });
                 $('.msg').html("验证码错误");
            }
            else
            {
                if(date=="1")
               {
                 location.href =index;
                 //$('.page-container form').submit();
                }
               else
               {
                   $('.msg').html("用户名或者密码不正确");
                   
               }
            }
           return false;
        },'html');
       return false;

    });
   
    $('.page-container form .username, .page-container form .password').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
        $('.msg').html("");
    });
      $('#verify').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
         $('.msg').html("");
    });

});
