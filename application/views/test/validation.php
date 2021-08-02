<div class="menu">
    <hr>
    <h3>Ошибки</h3>
    <hr>
    <?php
        foreach($errors as $key => $value) {
            echo '<p class="error">'.$key.': '.$value.'</p>';
        }
    ?>
    <hr>
</div>