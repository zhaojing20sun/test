$(function () {
  
    $("select[name='cityid']").live("change",function(){
         $.post(getarea,{cityid:$(this).val()},function(date){
          $('select[name="areaid"]').empty();
           $('select[name="areaid"]').append('<option >请选择城区</option>');
          if(date)
          {
             
              for(var i=0;i<date.length;i++)
              {
                 $('select[name="areaid"]').append('<option value="'+date[i].areaid+'">'+date[i].areaname+'</option>');
              }
           
          }
        },'json');
        
    });
     $("select[name='areaid']").live("change",function(){
         //alert( $("select[name='areaid']").val());
         $.post(getstreet,{areaid:$(this).val()},function(date){
        $('select[name="streetid"]').empty();
          if(date)
          {

              for(var i=0;i<date.length;i++)
              $('select[name="streetid"]').append('<option value="'+date[i].streetid+'">'+date[i].streetname+'</option>');
          }
        },'json');
    });
});