<section class="menu">
		<hr>
		<h1>Связь со мной</h1>
		<hr>
		<h3>Заполните форму</h3>
		<form class="form" method="post" action="/contact/validation" name="form_cont" id="forma">
				<div class="label">
					<label>ФИО  <input type="text" name="fio" id="fio" maxlength="30" size="30" value="<?php echo @$data["fio"]?>"></label>
					<span class="error"><?php echo @$errors["fio"] ?></span>
				</div>
				<div class="label">
					<label id="labSex">Пол
						<input type="radio" name="radio" id="sex" value="Мужской"
						<?php if (isset($data["radio"]) && @$data["radio"] == "Мужской") echo "checked";?>
						> Мужской
						<input type="radio" name="radio" id="sex" value="Женский"
						<?php if (isset($data["radio"]) && @$data["radio"] == "Женский") echo "checked";?>
						> Женский
					</label>
					<span class="error"><?php echo @$errors["radio"] ?></span>
				</div>
				<div class="label">
					<label for="age">Возраст</label>
					<select name="select" size="1" id="age">
						<option value="0" 
						<?php if (isset($data["select"]) && @$data["select"] == "0") echo "selected";?>
						>Неопределён</option>
						<option value="менее 16"
						<?php if (isset($data["select"]) && @$data["select"] == "менее 16") echo "selected";?>
						>Менее 16</option>
						<option value="от 16 до 21"
						<?php if (isset($data["select"]) && @$data["select"] == "от 16 до 21") echo "selected";?>
						>От 16 до 21</option>
						<option value="от 22 до 35"
						<?php if (isset($data["select"]) && @$data["select"] == "от 22 до 35") echo "selected";?>
						>От 22 до 35</option>
						<option value="От 36 до 50"
						<?php if (isset($data["select"]) && @$data["select"] == "От 36 до 50") echo "selected";?>
						>От 36 до 50</option>
						<option value="Старше 50"
						<?php if (isset($data["select"]) && @$data["select"] == "Старше 50") echo "selected";?>
						>Старше 50</option>
					</select>
					<span class="error"><?php echo @$errors["select"] ?></span>
				</div>
				<div class="label">
					<label>Дата рождения <input type="text" name="date" value="<?php echo @$data["date"]?>" id="data-r" readonly></label>
					<div name="calendar" class="calendar" id="icalendar">
						<div class="monayear">
							<select id="month" onchange="changeMonth()">
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
							<select id="year" onchange="changeYear()">
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
							</select>
						</div>
						<div class="day-name">
							<div class="dn">Su</div>
							<div class="dn">Mo</div>
							<div class="dn">Tu</div>
							<div class="dn">We</div>
							<div class="dn">Th</div>
							<div class="dn">Fr</div>
							<div class="dn">Sa</div>
						</div>
						<div class="day" id="days"></div>
					</div>
					<span class="error"><?php echo @$errors["date"] ?></span>
				</div>
				<div class="label">
					<label>E-Mail <input type="email" size="30" id="email" name="email" placeholder="Введите ваш e-mail" value="<?php echo @$data["email"]?>"></label>
					<span class="error"><?php echo @$errors["email"] ?></span>
				</div>
				<div class="label">
					<label>Телефон <input type="text" id="telef" name="phone" placeholder="Введите номер телефона" onsubmit="return validNumber();" value="<?php echo @$data["phone"]?>"></label>
					<span class="error"><?php echo @$errors["phone"] ?></span>
				</div>
				<div class="label">
					<input type="submit" value="Отправить" id="submit-but" class="button">
					<button type="reset" id="reset-but" class="button">Очистить</button>
				</div>
		</form>
		<hr>
		<div id="modal">
			<p>Вы действительно хотите это сделать?</p>
			<div id="yes">Да</div>
			<div id="no">Нет</div>
		</div>
		<div>

		</div>
	</section>