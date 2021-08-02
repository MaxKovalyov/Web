<section class="menu">
		<hr>
		<form method="post" action="/test/validation" name="test_form" onsubmit="return validate();">
			<h3>Введите ваши данные</h3>
			<div class="form1">
				<fieldset>
					<div>
						<label>ФИО  <input type="text" name="fio" maxlength="30" size="30"></label>
					</div>
					<div>
						<label for="group">Группа</label>
						<select id="group" name="select[]">
							<option value="0" selected>Неопределено</option>
							<optgroup label="1 курс">
								<option value="1IS1">ИС-20-1</option>
								<option value="1IS3">ИС-20-2</option>
								<option value="1IS2">ИС-20-3</option>
								<option value="1PI1">ПИ-20-1</option>
							</optgroup>
							<optgroup label="2 курс">
								<option value="2IS1">ИС-19-1</option>
								<option value="2IS2">ИС-19-2</option>
								<option value="2IS3">ИС-19-3</option>
								<option value="2PI1">ПИ-19-1</option>
							</optgroup>
							<optgroup label="3 курс">
								<option value="3IS1">ИС-18-1</option>
								<option value="3IS2">ИС-18-2</option>
								<option value="3IS3">ИС-18-3</option>
								<option value="3PI1">ПИ-18-1</option>
							</optgroup>
							<optgroup label="4 курс">
								<option value="4IS1">ИС-17-1</option>
								<option value="4IS2">ИС-17-2</option>
								<option value="4PI1">ПИ-17-1</option>
							</optgroup>
							<optgroup label="Магистры">
								<option value="m1IS">ИС/м-16</option>
								<option value="m2IS">ИС/м-15</option>
								<option value="m1PI">ПИ/м-16</option>
								<option value="m2PI">ПИ/м-15</option>
							</optgroup>
						</select>
					</div>
				</fieldset>
			</div>
			<hr>
			<h3>Ответьте на тестовые вопросы по дисциплине "Методы исследования операций"</h3>
			<div class="form2">
				<fieldset>
					<div>
						<p>Сколько всего основных теорем линейного программирования?</p>
						<input type="text" placeholder="Введите число" name="number"><br>
					</div>
					<div>
						<p>Условия применения графического метода при решение задач ЛП? (несколько вариантов)</p>
						<input type="checkbox" value="A" name="checkbox[]"> более двух переменных <br>
						<input type="checkbox" value="B" name="checkbox[]"> две переменные <br>
						<input type="checkbox" value="B" name="checkbox[]"> требуется найти оптимальное значение <br>
						<input type="checkbox" value="B" name="checkbox[]"> уравнения заданы в каноническом виде
					</div>
					<div>
						<p>Что такое оптимум и с чем он связан?</p>
						<select id="select" name="select[]">
							<option value="0" selected>Выберите ответ</option>
							<optgroup label="Связан с min и max">
								<option value="true">Означает min и max</option>
								<option value="false">Означает min или max</option>
							</optgroup>
							<optgroup label="Связан со знаком функции">
								<option value="false">Отрицательное значение</option>
								<option value="false">Положительное значение</option>
							</optgroup>
						</select>
					</div>
				</fieldset>
			</div>
			<div>
				<input type="submit" value="Отправить">
				<input type="reset" value="Сбросить">
			</div>
		</form>
		<hr>
	</section>