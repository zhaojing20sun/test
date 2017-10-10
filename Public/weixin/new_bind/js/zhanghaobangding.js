window.onload=function(){

        var div2=document.getElementById("div2");
        var div1=document.getElementById("div1");
        div2.onclick=function(){
          div1.className=(div1.className=="close1")?"open1":"close1";
          div2.className=(div2.className=="close2")?"open2":"close2";
        }


        var div4=document.getElementById("div4");
        var div3=document.getElementById("div3");
        div4.onclick=function(){
          div3.className=(div3.className=="close3")?"open3":"close3";
          div4.className=(div4.className=="close4")?"open4":"close4";
        }

        var div6=document.getElementById("div6");
        var div5=document.getElementById("div5");
        div6.onclick=function(){
          div5.className=(div5.className=="close5")?"open5":"close5";
          div6.className=(div6.className=="close6")?"open6":"close6";
        }



    }


























