window.onload = function() {
	document.getElementById('dropd').onmouseover = function() {
		document.getElementById("myDropdown").style.display = "block";
	}
	
	document.onmouseover = function(event) {
		var target = event.target;
		if(target.className != 'sub' && target.className != 'links') {
			document.getElementById("myDropdown").style.display = "none";
		}
	}
	
	var items = new Array('BH','MP','AM','MI','S','PA','C','T');
	if(sessionStorage.length == 0) {
		for(var i = 0; i < items.length; i++) {
			sessionStorage.setItem(items[i],0);
		}
	}
	var addCountS = parseInt(sessionStorage.getItem('MI'))+1;
	sessionStorage.setItem('MI',addCountS);
	if(localStorage.length == 0) {
		for(var i = 0; i < items.length; i++) {
			localStorage.setItem(items[i],0);
		}
	}
	var addCountL = parseInt(localStorage.getItem('MI'))+1;
	localStorage.setItem('MI',addCountL);
}