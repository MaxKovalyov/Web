<div class="form-registration">
    <form class="form" action="/registration/index" method="POST">
        <h1>Регистрация</h1>
        <div class="form-row">
            <label for="fio">ФИО</label>
            <input class="row" type="text" name="fio" value="<?php echo @$data["fio"]?>" required autocomplete="off">
        </div>
        <div class="form-row">
            <label for="email">E-mail</label>
            <input class="row" type="email" name="email" value="<?php echo @$data["email"]?>" required autocomplete="off">
        </div>
        <div class="form-row">
            <label for="login">Логин</label>
            <input class="row" type="text" name="login" value="<?php echo @$data["login"]?>" required autocomplete="off">
            <span class="error"><?php echo @$error["login"] ?></span>
        </div>
        <div class="form-row">
            <label for="password">Пароль</label>
            <input class="row" type="password" name="password" value="<?php echo @$data["password"]?>" required autocomplete="off">
        </div>
        <p>
            <input type="submit" class="button" value="Отправить">
        </p>
    </form>
</div>