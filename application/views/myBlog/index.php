<section class="main">
    <hr>
    <?php
        foreach($data as $key) {
            echo '<div class="row">';
            echo '<div class="col-md-7">';
            echo '<h2>'.$key["title"].'</h2>';
            echo '<p class="lead">Автор: '.$key["autor"].'</p>';
            echo '<p class="lead">Дата добавления: '.$key["date"].'</p>';
            echo '<p class="lead">Описание: '.$key["message"].'</p>';
            echo '</div>';
            echo '<div class="col-md-5">';
            echo '<img class="img-fluid mx-auto" alt="300x300" style="width: 300px; height: 300px;" src="/'.$key["img"].'" data-holder-rendered="true">';
            echo '</div>';
            echo '</div>';
            echo '<hr>';
        }
    ?>
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
    <hr>
</section>
