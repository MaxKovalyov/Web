window.onload = function() {
	var fotos = new Array(15);
	fotos[0] = "Images/1.jpg";
	fotos[1] = "Images/2.jpg";
	fotos[2] = "Images/3.jpg";
	fotos[3] = "Images/4.jpg";
	fotos[4] = "Images/5.jpg";
	fotos[5] = "Images/6.jpg";
	fotos[6] = "Images/7.jpg";
	fotos[7] = "Images/8.jpg";
	fotos[8] = "Images/9.jpg";
	fotos[9] = "Images/10.jpg";
	fotos[10] = "Images/11.jpg";
	fotos[11] ="Images/12.jpg";
	fotos[12] = "Images/13.jpg";
	fotos[13] = "Images/14.jpg";
	fotos[14] = "Images/15.jpg";

	var titles = new Array(15);
	titles[0] = "Звёздное небо над поляной";
	titles[1] = "Звёздное небо над горами";
	titles[2] = "Звёздное небо над озером";
	titles[3] = "Огненный дракон";
	titles[4] = "Каменный дракон";
	titles[5] = "Дракон тьмы";
	titles[6] = "Дракон света";
	titles[7] = "Повелитель драконов";
	titles[8] = "Фрегат";
	titles[9] = "Ракетный крейсер";
	titles[10] = "Атомный ракетный крейсер";
	titles[11] = "Мечники";
	titles[12] = "Спартанцы";
	titles[13] = "Ведьмак";
	titles[14] = "Horizon";

	const ImageCollection = document.images;
	for(var i = 0; i < 15; i++)
	{
		ImageCollection[i].id = 'img';
		ImageCollection[i].src = fotos[i];
		ImageCollection[i].title = titles[i];
		ImageCollection[i].alt = i;
	}
	document.getElementById('dropd').onmouseover = function() {
		document.getElementById("myDropdown").style.display = "block";
	}
	
	document.onmouseover = function(event) {
		var target = event.target;
		if(target.className != 'sub' && target.className != 'links') {
			document.getElementById("myDropdown").style.display = "none";
		}
	}

	document.onclick = function(event) {
		var modalImg = document.getElementById('popupImg');
		var target = event.target;
		if(target.id == 'img') {
			var newDiv = document.createElement('div');
			newDiv.id = 'shadow';
			var modalImg = document.getElementById('popupImg');
			var newImg = document.createElement('img');
			newImg.src = target.src;
			newImg.title = target.title;
			newImg.alt = target.alt;
			newImg.id = 'bigimg';
			modalImg.appendChild(newImg);
			document.body.appendChild(newDiv);
			modalImg.style.display = "block";
		}
		if(target.id == 'shadow') {
			var shadowDiv = document.getElementById('shadow');
			var bigImg = document.getElementById('bigimg');
			shadowDiv.parentNode.removeChild(shadowDiv);
			bigImg.parentNode.removeChild(bigImg);
			modalImg.style.display = "none";
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