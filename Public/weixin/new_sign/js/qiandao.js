




window.onload = function(){

	var qiandao_days = document.getElementById('qiandao-days');
	var qiandao_days_item = qiandao_days.getElementsByTagName('li');
	var qiandao_days_len = qiandao_days_item.length;
	for(var i = 0; i < qiandao_days_len; i++){
		qiandao_days_item[i].onclick = function(){
			this.addclassName = 'selected';

			//获取元素的兄弟元素
			function siblings(elem){
				var a = [];
				var elems = elem.parentNode.children;
				var elemsLen = elems.length;
				for(var i = 0; i < elemsLen; i++){
					if(elems[i] !== elem){
						a.push(elems[i]);
					}
				}
				return a;
			}

			var siblings = siblings(this);
			var siblingsLen = siblings.length;
			for(var i = 0; i < siblingsLen; i ++){
				siblings[i].className = '';
			}
		}
	}



	

}




























