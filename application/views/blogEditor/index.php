<section class="main">
    <div class="form-guest">
        <form class="form" action="/blogEditor/index" method="POST" enctype="multipart/form-data">
            <h3>Добавление блога</h3>
            <div class="form-row">
                <input type="text" name="title" placeholder="Тема сообщения" value="<?php echo @$data["title"]?>" required autocomplete="off">
                <span class="error"><?php echo @$errors["title"] ?></span>
            </div>
            <div class="form-row">
                <input type="file" name="img">
                <span class="error"><?php echo @$errors["img"] ?></span>
            </div>
            <div class="form-row">
                <textarea name="message" cols="30" placeholder="Введите текст сообщения" rows="8" value="<?php echo @$data["message"]?>"></textarea>
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
                    <th>Дата создания</th>
                    <th>Заголовок блока</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($allData as $key) {
                    echo '<tr><td>'.$key["date"].'</td><td>'.$key["title"].'</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <p class="pages">
        <?php
            for($i = 1; $i <= $num_pages; $i++) {
                if($i-1 == $page) {
                    echo $i." "; 
                } else {
                    echo '<a href="index?page='.$i.'">'.$i.'</a> ';
                }    
            }
        ?>
    </p>
</section>