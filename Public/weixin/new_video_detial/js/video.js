





window.onload = function(){

	var yugaoBtn = document.getElementById('yugao-btn');
	var yugaoContent = document.getElementById('yugao-content');
	var close = document.getElementById('close');

	yugaoBtn.onclick = function(){
		yugaoContent.style.display = 'block';
		yugaoBtn.style.display = 'none';
	}

	close.onclick = function(){
		yugaoContent.style.display = 'none';
		yugaoBtn.style.display = 'block';
	}

}









































