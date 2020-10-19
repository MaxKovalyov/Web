function validate() {
	valid = true;

	if(document.test_form.fio.value=="") {
		alert("Не заполнено обязательное поле ФИО!");
		valid = false;
		document.test_form.fio.focus();
	}

	if(document.test_form.group.selectedIndex==0) {
		alert("Не выбрана группа!")
		valid = false;
		document.test_form.group.focus();
	}

	if(document.test_form.question1.value=="") {
		alert("Не введён ответ!");
		valid = false;
		document.test_form.question1.focus();
	}

	if((document.test_form.question2[0].checked==false)&&(document.test_form.question2[1].checked==false)&&(document.test_form.question2[2].checked==false)&&(document.test_form.question2[3].checked==false)) {
		alert("Не выбран ни один вариант!");
		valid = false;
		document.test_form.question2[0].focus();
	}

	if(document.test_form.question3.selectedIndex==0) {
		alert("Не выбран ни один вариант!");
		valid = false;
		document.test_form.question3.focus();
	}

	return valid;
}