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

function zero_first_format(value) {
	if(value < 10) {
		value = '0'+value;
	}
	return value;
}
	
function startTime() {
	var data = new Date();
	var month = new Array("Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря");
	var day = zero_first_format(data.getDate());
	var year = data.getFullYear();
	var h = zero_first_format(data.getHours());
	var m = zero_first_format(data.getMinutes());
	var s = zero_first_format(data.getSeconds());
	var month = month[data.getMonth()];
	document.getElementById('time').innerHTML=day+" "+month+" "+year+" "+h+":"+m+":"+s;
	t=setTimeout('startTime()', 1000);
}