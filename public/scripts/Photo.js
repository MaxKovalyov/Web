window.onload = function() {
	var fotos = 15;
	var titles = new Array("Небо над поляной","Небо над горами","Небо над озером","Огненный дракон","Каменный дракон","Дракон тьмы","Дракон света","Повелитель драконов","Фрегат","Ракетный крейсер","Атомный ракетный крейсер","Мечники","Спартанцы","Ведьмак","Horizon");

	/*Просмотр галереи изображений*/
	$('#next-btn').click(function() {
		$('#popupImg').css("opacity", "0");
		var indexImg = $('#bigimg').attr('alt');
		indexImg++;
		if(indexImg > fotos-1) {
			indexImg = 0;
		}
		$('#bigimg').attr({
			src: "/public/Images/"+(indexImg+1)+".jpg",
			title: titles[indexImg],
			alt: indexImg
		})
		$('#popupImg').animate({opacity: "1"},500);
	});

	$('#prev-btn').click(function() {
		$('#popupImg').css("opacity", "0");
		var indexImg = $('#bigimg').attr('alt');
		indexImg--;
		if(indexImg < 0) {
			indexImg = fotos-1;
		}
		$('#bigimg').attr({
			src: "/public/Images/"+(indexImg+1)+".jpg",
			title: titles[indexImg],
			alt: indexImg
		})
		$('#popupImg').animate({opacity: "1"},500);
	});

	/*Выпадающая меню "Мои интересы"*/
	document.getElementById('dropd').onmouseover = function() {
		document.getElementById("myDropdown").style.display = "block";
	}
	
	document.onmouseover = function(event) {
		var target = event.target;
		if(target.className != 'sub' && target.className != 'links') {
			document.getElementById("myDropdown").style.display = "none";
		}
	}

	/*Вывод фотографии в отдельное окно поверх других при нажатии*/
	document.onclick = function(event) {
		var modalImg = document.getElementById('popupImg');
		var target = event.target;
		if(target.id == 'img') {
			var newDiv = document.createElement('div');
			newDiv.id = 'shadow';
			var modalImg = document.getElementById('popupImg');
			var bigImg = document.getElementById('bigimg');
			bigImg.src = target.src;
			bigImg.title = target.title;
			bigImg.alt = target.alt;
			document.body.appendChild(newDiv);
			modalImg.style.display = "block";
		}
		if(target.id == 'shadow') {
			var shadowDiv = document.getElementById('shadow');
			shadowDiv.parentNode.removeChild(shadowDiv);
			modalImg.style.display = "none";
		}
	}

	/*Сохранение данных о посещении страницы*/
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
	var addCountL = parseInt(localStorage.getItem('PA'))+1;
	localStorage.setItem('PA',addCountL);
}

/*Функция вывода текущего времени на экран*/
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