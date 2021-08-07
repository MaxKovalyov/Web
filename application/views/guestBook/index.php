<section class="main">
    <div class="form-guest">
        <form class="form" action="/guestBook/index" method="POST">
            <h3>Заполните отзыв</h3>
            <div class="form-row">
                <input type="text" name="name" placeholder="Имя" required autocomplete="off">
            </div>
            <div class="form-row">
                <input type="text" name="surname" placeholder="Фамилия" required autocomplete="off">
            </div>
            <div class="form-row">
                <input type="text" name="patronymic" placeholder="Отчество" required autocomplete="off">
            </div>
            <div class="form-row">
                <input type="email" name="email" placeholder="E-mail" required autocomplete="off">
            </div>
            <div class="form-row">
                <textarea name="message" cols="30" placeholder="Введите ваш отзыв" rows="8"></textarea>
            </div>
            <p>
                <input type="submit" class="button" value="Отправить">
            </p>
        </form>
    </div>
    <div class="table-messages">
        <table class="table">
            <thead>
                <tr>
                    <th>Дата</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>E-mail</th>
                    <th>Отзыв</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $key) {
                    echo '<tr><td>'.$key[0].'</td><td>'.$key[1].'</td><td>'.$key[2].'</td><td>'.$key[3].'</td><td>'.$key[4].'</td><td>'.$key[5].'</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</section>