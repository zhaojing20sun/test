  $(".reply").live("click",function(){
       var tritem= $(this).parent().parent();
       //  alert( $(this).attr("qq"));
        // alert( $(this).parent().parent().html());
          // $(this).parent().parent().after('<tr><td>ddddddddd</td><td></td><td></td></tr>');
          $.post(getreply,{qid:$(this).attr("qq")},function(date){
          //    alert(date.length);
           for(i=0;i<date.length;i++)
           {
             tritem.after('<tr><td></td><td>'+date[i].id+'</td><td></td><td></td></tr>');
           }
         //   $(this).parent().parent().after('<tr><td>ddddddddd</td><td></td><td></td></tr>');
       /* $('select[name="streetid"]').empty();
          if(date)
          {

              for(var i=0;i<date.length;i++)
              $('select[name="streetid"]').append('<option value="'+date[i].streetid+'">'+date[i].streetname+'</option>');
          }*/
        },'json');
    });