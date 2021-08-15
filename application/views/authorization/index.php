<div class="form-authorization">
    <form class="form" action="/authorization/index" method="POST">
        <h1>Авторизация</h1>
        <div class="form-row">
            <label for="login">Логин</label>
            <input class="row" type="text" name="login" required autocomplete="off">
        </div>
        <div class="form-row">
            <label for="password">Пароль</label>
            <input class="row" type="password" name="password" required autocomplete="off">
        </div>
        <span class="error"><?php echo @$error ?></span>
        <p>
            <input type="submit" class="button" value="Отправить">
        </p>
        <p class="links">
            <a href="/registration/index">Регистрация</a>
            <a href="/main/index">Назад</a>
        </p>
    </form>
</div>