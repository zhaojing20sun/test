




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

}












































