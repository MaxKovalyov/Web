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
	if(sessionStorage.length == 0) {
		sessionStorage.setItem('BH',0);
		sessionStorage.setItem('MP',0);
		sessionStorage.setItem('AM',0);
		sessionStorage.setItem('MI',0);
		sessionStorage.setItem('S',0);
		sessionStorage.setItem('PA',0);
		sessionStorage.setItem('C',0);
		sessionStorage.setItem('T',0);
	}
	var addCountS = parseInt(sessionStorage.getItem('AM'))+1;
	sessionStorage.setItem('AM',addCountS);
	if(localStorage.length == 0) {
		localStorage.setItem('BH',0);
		localStorage.setItem('MP',0);
		localStorage.setItem('AM',0);
		localStorage.setItem('MI',0);
		localStorage.setItem('S',0);
		localStorage.setItem('PA',0);
		localStorage.setItem('C',0);
		localStorage.setItem('T',0);
	}
	var addCountL = parseInt(localStorage.getItem('AM'))+1;
	localStorage.setItem('AM',addCountL);
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

