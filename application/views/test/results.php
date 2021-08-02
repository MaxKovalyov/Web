<div class="menu">
    <hr>
    <h3>Результаты теста</h3>
    <hr>
    <?php
        foreach($results as $key => $value) {
            echo '<p class="result">'.$value.'</p>';
        }
    ?>
    <hr>
</div>