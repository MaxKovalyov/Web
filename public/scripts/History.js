window.onload = function () {
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
	var addCountS = parseInt(sessionStorage.getItem('BH'))+1;
	sessionStorage.setItem('BH',addCountS);
	var counters = document.getElementsByClassName('counter');
	counters[0].innerHTML = sessionStorage.getItem('MP');
	counters[1].innerHTML = sessionStorage.getItem('PA');
	counters[2].innerHTML = sessionStorage.getItem('AM');
	counters[3].innerHTML = sessionStorage.getItem('C');
	counters[4].innerHTML = sessionStorage.getItem('MI');
	counters[5].innerHTML = sessionStorage.getItem('T');
	counters[6].innerHTML = sessionStorage.getItem('S');
	counters[7].innerHTML = sessionStorage.getItem('BH');

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
	var addCountL = parseInt(localStorage.getItem('BH'))+1;
	localStorage.setItem('BH',addCountL);
	var counters = document.getElementsByClassName('counter');
	counters[8].innerHTML = localStorage.getItem('MP');
	counters[9].innerHTML = localStorage.getItem('PA');
	counters[10].innerHTML = localStorage.getItem('AM');
	counters[11].innerHTML = localStorage.getItem('C');
	counters[12].innerHTML = localStorage.getItem('MI');
	counters[13].innerHTML = localStorage.getItem('T');
	counters[14].innerHTML = localStorage.getItem('S');
	counters[15].innerHTML = localStorage.getItem('BH');
	// function getCookie(name) {
	// 	var results = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
	// 	if(results) {
	// 		return (unescape(results[2]));
	// 	}
	// 	else {
	// 		return null;
	// 	}
	// }

	// function setCookie(name, value, expiration_days) {
	// 	var current_date = new Date();
	// 	var day = current_date.getDate()+expiration_days;
	// 	var year = current_date.getFullYear();
	// 	var month = current_date.getMonth();
	// 	var expires = new Date(year, month, day);
	// 	var cookie_string = name + "=" + escape(value) + "; expires=" + expires.toGMTString();
	// 	console.log(cookie_string);
	// 	document.cookie = cookie_string;
	// }
}

// window.onunload = function() {
// 	sessionStorage.clear();
// }