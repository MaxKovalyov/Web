window.onload = function() {
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
	var addCountS = parseInt(sessionStorage.getItem('C'))+1;
	sessionStorage.setItem('C',addCountS);
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
	var addCountL = parseInt(localStorage.getItem('C'))+1;
	localStorage.setItem('C',addCountL);
	var valid = [false,false,false,false,false,false];
	/*Всплывающее меню при наведении на "Мои интересы"*/
	document.getElementById('dropd').onmouseover = function() {
		document.getElementById("myDropdown").style.display = "block";
	}
	
	document.onmouseover = function(event) {
		var target = event.target;
		if(target.className != 'sub' && target.className != 'links') {
			document.getElementById("myDropdown").style.display = "none";
		}
	}
	/*Всплывающие подсказки по заполнению форм*/
	/*$('#fio').mouseover(function() {
		addPopover('#fio','Введите фамилию, имя и отчество через пробелы, без цифр и лишних символов');
	});

	$('#fio').mouseout(function(){
		setTimeout(function() {
			$('.popover').remove();
		}, 2000);
	});

	$('#labSex').mouseover(function() {
		addPopover('#labSex','Выберите пол: мужской или женский');
	});

	$('#labSex').mouseout(function(){
		setTimeout(function() {
			$('.popover').remove();
		}, 2000);
	});

	$('#age').mouseover(function() {
		addPopover('#age','Выберите примерный возраст');
	});

	$('#age').mouseout(function(){
		setTimeout(function() {
			$('.popover').remove();
		}, 2000);
	});

	$('#data-r').mouseover(function() {
		addPopover('#data-r','Выберите дату рождения по календарю');
	});

	$('#data-r').mouseout(function(){
		setTimeout(function() {
			$('.popover').remove();
		}, 2000);
	});

	$('#email').mouseover(function() {
		addPopover('#email','Введите свой e-mail адрес, используя символ собаки "@"');
	});

	$('#email').mouseout(function(){
		setTimeout(function() {
			$('.popover').remove();
		}, 2000);
	});

	$('#telef').mouseover(function() {
		addPopover('#telef','Номер телефона должен состоять из цифр, начинаться с +3 или +7 и содержать от 9 до 11 символов');
	});

	$('#telef').mouseout(function(){
		setTimeout(function() {
			$('.popover').remove();
		}, 2000);
	});*/

	/*Вывод модального окна*/
	$("#reset-but").click(function(event) {
		event.preventDefault();
		var newModalBlur = $('<div class="modal-blur"></div>')
		$("body").append(newModalBlur);
		$("#modal").css('display','block');
	});

	$("#no").click(function() {
		$("#modal").css('display','none');
		$(".modal-blur").remove();
	});

	$("#yes").click(function() {
		$(".form").trigger("reset");
		$("#modal").css('display','none');
		$(".modal-blur").remove();
		$("#fio").css('boxShadow','0 0 15px 4px #aaa');
		$("#age").css('boxShadow','0 0 15px 4px #aaa');
		$("#sex").css('boxShadow','0 0 15px 4px #aaa');
		$("#telef").css('boxShadow','0 0 15px 4px #aaa');
		$("#email").css('boxShadow','0 0 15px 4px #aaa');
		$("#data-r").css('boxShadow','0 0 15px 4px #aaa');
		valid = [false, false, false, false, false, false];
	})

	/*Отображение календаря при клике на текстовое поле*/
	document.getElementById('data-r').onclick = function() {
		document.getElementById("icalendar").style.display = "block";
	}	
	/*Проверка валидности всех полей, выбор дня в календаре и закрытие календаря по нажатию, проверка даты*/
	document.onclick = function(event) {
		/*if(valid[0] && valid[1] && valid[2] && valid[3] && valid[4] && valid[5]) {
			document.getElementById('submit-but').disabled = false;
		}
		else {
			document.getElementById('submit-but').disabled = true;
		}*/
		var target = event.target;
		if(target.className == 'day-value') {
			var date_text = document.getElementById('data-r').value;
			var y = date_text[date_text.length-4]+date_text[date_text.length-3]+date_text[date_text.length-2]+date_text[date_text.length-1];
			var m='';
			var i = 3;
			while(date_text[i] != '.') {
				m+=date_text[i];
				i++;
			}
			var d = zero_first_format(target.innerHTML);
			date_text = d+'.'+m+'.'+y;
			document.getElementById('data-r').value = date_text;
		}
		if(target.id != 'data-r' && target.id != 'icalendar' && target.id != 'month' && target.id != 'year' && target.className != 'day-name' && target.className != 'day' && target.className != 'monayear' && target.className != 'dn' && target.className != 'day-value') {
			document.getElementById("icalendar").style.display = "none";
		}
	}
	/*Валидация полей формы*/
	/*document.getElementById('fio').onblur = function() {
		var name = this.value;
		var val = true;
		valid[0] = false;
		if(name=="") {
			document.getElementById('demo1').innerHTML = "Поле пустое!";
			this.style.boxShadow = "0 0 15px 4px #f00";
			val = false;
		}
		else {
			for(var i=0;i<name.length;i++) {
				if((name[i]!=" ")&&((name[i]<'А')||(name[i]>'я'))&&((name[i]<'A')||(name[i]>'z'))) {
					document.getElementById('demo1').innerHTML = "Недопустимые символы!";
					this.style.boxShadow = "0 0 15px 4px #f00";
					val = false;
				}
			}
			if(val) {
				var count_word = 0;
				for(var i=0;i<name.length-1;i++) {
					if((name[i] == " ") && (name[i+1] != " ")) {
						count_word++;
					}
				}
				if(count_word != 2) {
					document.getElementById('demo1').innerHTML = "ФИО должно состоять из трёх слов!";
					this.style.boxShadow = "0 0 15px 4px #f00";
					val = false;
				}
			}
		}
		if(val) {
			this.style.boxShadow = "0 0 15px 4px #0f0";
			document.getElementById('demo1').innerHTML = '';
			valid[0] = true;
		}
	}

	document.form_cont.sex[0].onfocus = function() {
			this.style.boxShadow = "0 0 15px 4px #0f0";
			document.form_cont.sex[1].style.boxShadow = "0 0 15px 4px #aaa";
			valid[1] = true;
	}
	document.form_cont.sex[1].onfocus = function() {
			this.style.boxShadow = "0 0 15px 4px #0f0";
			document.form_cont.sex[0].style.boxShadow = "0 0 15px 4px #aaa";
			valid[1] = true;
	}

	document.getElementById('age').onchange = function() {
		if(this.value != "0") {
			this.style.boxShadow = "0 0 15px 4px #0f0";
			document.getElementById('demo2').innerHTML = '';
			valid[2] = true;
		}
		else {
			valid[2] = false;
			this.style.boxShadow = "0 0 15px 4px #f00";
			document.getElementById('demo2').innerHTML = 'Возраст не выбран!';
		}
	}

	document.getElementById('data-r').onmouseover = function() {
		var dat_box = document.getElementById('data-r').value;
		if(dat_box[0]=='д' || dat_box[3]=='м' || dat_box[dat_box.length-1]=='г') {
			document.getElementById('demo5').innerHTML = "Выбрана не полная дата!";
			document.getElementById('data-r').style.boxShadow = "0 0 15px 4px #f00";
			valid[3] = false;
		}
		else {
			valid[3] = true;
			document.getElementById('demo5').innerHTML = "";
			document.getElementById('data-r').style.boxShadow = "0 0 15px 4px #0f0";
		}
	}

	document.getElementById('email').onblur = function() {
		if(this.value == '') {
			this.style.boxShadow = "0 0 15px 4px #f00";
			document.getElementById('demo3').innerHTML = 'E-mail не введён!';
			valid[4] = false;
		}
		else {
			valid[4] = true;
			this.style.boxShadow = "0 0 15px 4px #0f0";
			document.getElementById('demo3').innerHTML = '';
		}
	}

	document.getElementById('telef').onblur = function() {
		var num = this.value;
		var val = true;
		valid[5] = false;
		if (num=="") {
			document.getElementById('demo4').innerHTML = "Поле пустое!";
			this.style.boxShadow = "0 0 15px 4px #f00";
			val = false;
		}
		else {
			if(isNaN(num)) {
				document.getElementById('demo4').innerHTML = "Недопустимые символы!";
				this.style.boxShadow = "0 0 15px 4px #f00";
				val = false;
			}
			else {
				if((num.length<9)||(num.length>12)) {
					document.getElementById('demo4').innerHTML = "Длина должна быть от 9 до 11 символов!";
					this.style.boxShadow = "0 0 15px 4px #f00";
					val = false;
				}
				else {
					if((num[0]!='+')||((num[1]!=7)&&(num[1]!=3))) {
						document.getElementById('demo4').innerHTML = "Начинаться должен с +3 или +7!";
						this.style.boxShadow = "0 0 15px 4px #f00";
						val = false;
					}
				}
			}
		}
		if(val) {
			valid[5] = true;
			this.style.boxShadow = "0 0 15px 4px #0f0";
			document.getElementById('demo4').innerHTML = "";
		}
	}*/

	
}
/*Вставляет ноль перед однозначными значениями*/
function zero_first_format(value) {
	if(value < 10) {
		value = '0'+value;
	}
	return value;
}
/*Запуск системного времени*/
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
/*Изменение месяца в календаре*/
function changeMonth() {
	var sel = document.getElementById('month')
	var date_text = document.getElementById('data-r').value;
	var d = date_text[0]+date_text[1];
	var y = date_text[date_text.length-4]+date_text[date_text.length-3]+date_text[date_text.length-2]+date_text[date_text.length-1];
	var m = sel[sel.selectedIndex].text;
	date_text = d+'.'+m+'.'+y;
	document.getElementById('data-r').value = date_text;
	var days = document.getElementById('days');
	while(days.lastChild) {
		days.removeChild(days.lastChild);
	}
	for(var i=1; i<29;i++) {
		var newDiv = document.createElement("div");
		newDiv.className = "day-value";
		newDiv.innerHTML = i;
		days.appendChild(newDiv);
	}
	if(sel.value==1||sel.value==3||sel.value==5||sel.value==7||sel.value==8||sel.value==10||sel.value==12) {
		for(var i = 29; i<32;i++) {
			var newDiv = document.createElement("div");
			newDiv.className = "day-value";
			newDiv.innerHTML = i;
			days.appendChild(newDiv);
		}
	}
	else {
		if(sel.value==4||sel.value==6||sel.value==9||sel.value==11) {
			for(var i = 29; i<31;i++) {
				var newDiv = document.createElement("div");
				newDiv.className = "day-value";
				newDiv.innerHTML = i;
				days.appendChild(newDiv);
			}
		}
		else {
			if(sel.value==2 && document.getElementById('year').value % 4 == 0) {
				var newDiv = document.createElement("div");
				newDiv.className = "day-value";
				newDiv.innerHTML = 29;
				days.appendChild(newDiv);
			}
		}
	}
}
/*Измеенение дня в календаре*/
function changeYear() {
	var date_text = document.getElementById('data-r').value;
	var sel = document.getElementById('year')
	var d = date_text[0]+date_text[1];
	var m='';
	var i = 3;
	while(date_text[i] != '.') {
		m+=date_text[i];
		i++;
	}
	var y = sel[sel.selectedIndex].text;
	date_text = d+'.'+m+'.'+y;
	document.getElementById('data-r').value = date_text;
}

/*Отображение всплывающей подсказки*/
function addPopover(target, string) {
	var newDiv = $('<div class="popover"><p>'+string+'</p></div>');
	$(target).parent().append(newDiv);
}