window.onload = function() {
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
	var addCountL = parseInt(localStorage.getItem('T'))+1;
	localStorage.setItem('T',addCountL);
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

/*function validate() {

	if(document.test_form.fio.value=="") {
		alert("Не заполнено обязательное поле ФИО!");
		document.test_form.fio.focus();
		return false;
	}

	if(document.test_form.group.selectedIndex==0) {
		alert("Не выбрана группа!")
		document.test_form.group.focus();
		return false;
	}

	if(document.test_form.question1.value=="") {
		alert("Не введён ответ!");
		document.test_form.question1.focus();
		return false;
	}

	var count_select_answer = 0;
	var checkbx = document.test_form.question2;
	for(var i=0;i<checkbx.length;i++) {
		if(checkbx[i].checked == true) {
			count_select_answer++
		}
	}
	if(count_select_answer < 3) {
		alert("Выбрано неверное количество ответов");
		return false;
	}

	if(document.test_form.question3.selectedIndex==0) {
		alert("Не выбран ни один вариант!");
		document.test_form.question3.focus();
		return false;
	}

	return true;
}*/