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
}
function zero_first_format(value) {
	if(value < 10) {
		value = '0'+value;
	}
	return value;
}
	
function startTime() {
	var data = new Date();
	var month = new Array(12);
		month[0] = "Января";
		month[1] = "Февраля";
		month[2] = "Марта";
		month[3] = "Апреля";
		month[4] = "Мая";
		month[5] = "Июня";
		month[6] = "Июля";
		month[7] = "Августа";
		month[8] = "Сентября";
		month[9] = "Октября";
		month[10] = "Ноября";
		month[11] = "Декабря";
	var day = zero_first_format(data.getDate());
	var year = data.getFullYear();
	var h = zero_first_format(data.getHours());
	var m = zero_first_format(data.getMinutes());
	var s = zero_first_format(data.getSeconds());
	var month = month[data.getMonth()];
	document.getElementById('time').innerHTML=day+" "+month+" "+year+" "+h+":"+m+":"+s;
	t=setTimeout('startTime()', 1000);
}
