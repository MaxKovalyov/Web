function validate() {
	valid = true;

	if(document.form_cont.fio.value=="") {
		alert("Не заполнено обязательное поле ФИО!");
		valid = false;
		document.form_cont.fio.focus();
	}

	if((document.form_cont.sex[0].checked==false) && (document.form_cont.sex[1].checked==false)) {
		alert("Не выбран пол!");
		valid = false;
		document.form_cont.sex[0].focus();
	}

	if(document.form_cont.age.selectedIndex==0) {
		alert("Не выбран возраст!")
		valid = false;
		document.form_cont.age.focus();
	}

	if(document.form_cont.email.value=="") {
		alert("Не заполнено обязательное поле E-mail!");
		valid = false;
		document.form_cont.email.focus();
	}

	if (document.form_cont.telef.value=="") {
		alert("Не заполнено обязательное поле Телефон");
		valid = false;
		document.form_cont.telef.focus();
	}

	return valid;
}

function validNumber() {
	valid = true;
	number = document.form_cont.telef.value;

	if((number[0]!='+')&&((number[1]!='7')||(number[1]!='3'))) {
		valid = false;
	}

	if((number.length()<9)||(number.length()>11)) {
		valid = false;
	}

	if(number.indexOf(" ")) {
		valid = false;
	}
}