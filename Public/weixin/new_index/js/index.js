











	// var style = document.getElementById('test').style;
	// var transform = style.transform || '';
	// var transformY = transform.match(/translate3d\((\-\d+)px,\s*(\d+)px,\s*(\d+)px\)/i)[1];
	// console.log(transformY);


	

/*Tab 选项卡 标签*/
$(function(){
	var $div_tab = $("div.tab-menu div");
	$div_tab.click(function(){
		$(this).addClass("selected").siblings().removeClass("selected");
		var index = $div_tab.index(this);
		$("div.tab-box > div").eq(index).show().removeClass("hide").siblings().hide();
	})
	// $div_tab.each(function(index){
	// 	$(this).click(function(){

	// 	})
	// })

})






$(function(){

	//获取元素距离页面顶部的距离
	var anchorOffsetTop = $("#anchor").offset().top;

	//获取元素的高度
	var anchorHeight = $("#anchor").height();

	//获取浏览器可见区域的高度
	var windowHeight = $(window).height();

	$(window).scroll(function(){
		//获取页面滚动的距离
		var winScrollTop = $(window).scrollTop();
		if(winScrollTop < anchorOffsetTop + anchorHeight){
			$("#fixed-bottom-slidebox").slideDown();
			$("#fixed-bottom-bar").slideUp();
		} else{	
			$("#fixed-bottom-slidebox").slideUp();
			$("#fixed-bottom-bar").slideDown();			
		}
	});

	//点击蓝条，蓝条隐藏，滑动容器出现
	$("#fixed-bottom-bar").click(function(){
		$(this).slideUp();
		$("#fixed-bottom-slidebox").slideDown();
	});

	//滑动容器从左向右划，#swipe-right-container淡入,slide-right-button从左向右滑出
	$("#fixed-bottom-slidebox").on("swiperight",function(){
		
		$(".slide-right-button").animate({
			"bottom":'133px',
			"right":"-50"
		});

		var transformStyle = document.getElementById("swiper-wrapper").style;

		var transform = transformStyle.transform || '';
	  //  alert(transform);
	    if(transform!=null){
	    	var transformX = transform.match(/translate3d\((0|\-\d+)px,\s*(\d+)px,\s*(\d+)px\)/i)[1];
	    	if(transformX == 0){
	    		$("#swipe-right-container").fadeIn();
	    	}	
	    }

	});

	//从左向右或从右向左划#swipe-right-container，这个容器淡出
	$("#swipe-right-container").on("swipe",function(){
		$(this).fadeOut();
	});

	//滑动容器从右向左划，slide-right-button从右向左滑入
	$("#fixed-bottom-slidebox").on("swipeleft",function(){
		

		$(".slide-right-button").animate({
			"bottom":'133px',
			"right":"0"
		},500);


	});

	//点击slide-right-button，从下往上滑出一个容器
	$(".slide-right-button").click(function(){
		if($(".bottom-click-container").height() == 0){
			var bottomClickContainerRow = $(".bottom-click-container-row").height();
			var navbarBottomHeight = $(".navbar-bottom-height").height();
			$(".bottom-click-container").animate({
				"height":bottomClickContainerRow + 8
			},500);
			$(this).animate({
				"bottom":bottomClickContainerRow + navbarBottomHeight + 10 
			},500)
		} else{
			$(".bottom-click-container").animate({
				"height":"0"
			});
			$(this).animate({
				"right":"-50"
			},500)
			$(this).animate({
				"bottom":"128"
			},0)
		}
	})

});
 /* <div style="bottom:0px;background:#1E90FF;height:72px;width:100%;position:absolute;left:-10%;text-align:center;line-height:70px;">
      <a href="{:U('new_zone',array('wid'=>$_SESSION['wid']))}">  <i class="icon iconfont icon-wo1" style="font-size:30px;color:white"></i> <span style="position:relative;top:-6%;color:white">个人中心</span>
      </a>
     </div> */







/*swiper.js  用来控制滑动的js代码*/

$(function(){
    var swiper = new Swiper('.fixed-bottom-slidebox', {
        slidesPerView: 5,
        spaceBetween: 0,
       
    });
})

























	






























