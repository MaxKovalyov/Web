function validate() {

	name = document.form_cont.fio.value;
	if(name=="") {
		alert("Не заполнено обязательное поле ФИО!");
		document.form_cont.fio.focus();
		return false;
	}

	for(var i=0;i<name.length;i++) {
		if((name[i]!=" ")&&((name[i]<'А')||(name[i]>'я'))&&((name[i]<'A')||(name[i]>'z'))) {
			alert("Недопустимые символы");
			document.form_cont.fio.focus();
			return false;
		}
	}

	var count_word = 0;
	for(var i=0;i<name.length-1;i++) {
		if((name[i] == " ") && (name[i+1] != " ")) {
			count_word++;
		}
	}
	if(count_word != 2) {
		alert("ФИО должно состоять из трёх слов!");
		document.form_cont.fio.focus();
		return false;
	}

	if((document.form_cont.sex[0].checked==false) && (document.form_cont.sex[1].checked==false)) {
		alert("Не выбран пол!");
		document.form_cont.sex[0].focus();
		return false;
	}

	if(document.form_cont.age.selectedIndex==0) {
		alert("Не выбран возраст!")
		document.form_cont.age.focus();
		return false;
	}

	if(document.form_cont.email.value=="") {
		alert("Не заполнено обязательное поле E-mail!");
		document.form_cont.email.focus();
		return false;
	}

	if (document.form_cont.telef.value=="") {
		alert("Не заполнено обязательное поле Телефон");
		document.form_cont.telef.focus();
		return false;
	}

	number = document.form_cont.telef.value;
	if(isNaN(number)) {
		alert("Номер должен быть числом");
		document.form_cont.telef.focus();
		return false;
	}

	if((number.length<9)||(number.length>11)) {
		alert("Длина номера должны быть от 9 до 11 символов");
		document.form_cont.telef.focus();
		return false;
	}

	if((number[0]!='+')||((number[1]!=7)&&(number[1]!=3))) {
		alert("Номер должен начинаться с +3 или +7");
		document.form_cont.telef.focus();
		return false;
	}

	return true;
}