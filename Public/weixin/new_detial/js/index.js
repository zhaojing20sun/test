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





































