
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