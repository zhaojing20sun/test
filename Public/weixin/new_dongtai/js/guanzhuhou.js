




window.onload = function(){


	var tab_btns = document.getElementById('tab-btn').getElementsByTagName('li');
	var tab_btns_len = tab_btns.length;

	for(var i = 0; i < tab_btns_len; i++){
		tab_btns[i].index = i;
		tab_btns[i].onclick = function(){
			var tab_content_items = document.getElementsByClassName('tab-content-item');
			for(var k = 0; k < tab_btns_len; k++){
				tab_content_items[k].style.display = '';
				tab_btns[k].className = '';
			}
			this.className = 'selected';
			tab_content_items[this.index].style.display = 'block';
		};
	}

	/*swiper.js  用来控制滑动的js代码*/
	$(function(){
	    var swiper = new Swiper('.swiper-container', {
	        slidesPerView: 3,
	        spaceBetween: 2,
	    });
	})


}












































