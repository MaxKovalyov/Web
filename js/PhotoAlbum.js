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
	for(i = 0; i < 15; i++)
	{
		ImageCollection[i].src = fotos[i];
		ImageCollection[i].title = titles[i];
		ImageCollection[i].alt = i;
		/*//document.figure.writeln('<img src="'+fotos[i]+'" alt="'+i+'" title="'+titles[i]+'" class="gall_image">');
		var img = document.createElement('IMG');
      img.src = fotos[i];
      img.alt = titles[i];
      img.height = '200';
      img.width = '300';
      //document.body.appendChild(img);
      //document.getElementById("demo").innerHTML = img;*/
	}
}