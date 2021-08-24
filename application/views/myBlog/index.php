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
            echo '<div class="comments">';
                echo '<div class="comment-title">';
                    echo '<h3>Комментарии</h3>';
                    if(array_key_exists("login",$_SESSION)) {
                        echo '<a onclick="addComment.call(this,'.$key["id"].')">Добавить комментарий</a>';
                    }
                echo '</div>';
                echo '<table class="table" id="'.$key["id"].'">';
                    echo '<thead><tr><th>Дата</th><th>Пользователь</th><th>Комментарий</th></tr></thead>';
                    echo '<tbody>';
                    foreach($comments as $value) {
                        if($value["id_blog"]==$key["id"]) {
                            echo '<tr><td>'.$value["date"].'</td><td>'.$value["author"].'</td><td>'.$value["message"].'</td></tr>';
                        }
                    }
                    echo '</tbody>';
                echo '</table>';
            echo '</div>';
            echo '<hr>';
        }
    ?>
    <p class="pages">
        <?php
        echo 'Страницы: ';
            if($page == 0) {
                if($num_pages > 2) {
                    echo '1 <a href="index?page=2">2</a> ... <a href="index?page='.($num_pages).'">'.($num_pages).'</a>';
                } else {
                    if($num_pages == 2) {
                        echo '1 <a href="index?page=2">2</a>';
                    } else {
                        if($num_pages == 1) {
                            echo '1';
                        }
                    }
                }
            } else {
                if($page == 1) {
                    if($num_pages > 3) {
                        echo '<a href="index?page=1">1</a> 2 <a href="index?page=3">3</a> ... <a href="index?page='.($num_pages).'">'.($num_pages).'</a>';
                    } else {
                        if($num_pages == 3) {
                            echo '<a href="index?page=1">1</a> 2 <a href="index?page=3">3</a>';
                        } else {
                            if($num_pages == 2) {
                                echo '<a href="index?page=1">1</a> 2';
                            }
                        }
                    } 
                } else {
                    if($page == $num_pages-1) {
                        echo '<a href="index?page=1">1</a> ... <a href="index?page='.($page).'">'.($page).'</a> '.($page+1);
                    } else {
                        if($page == $num_pages-2) {
                            echo '<a href="index?page=1">1</a> ... <a href="index?page='.($page).'">'.($page).'</a> '.($page+1).' <a href="index?page='.($page+2).'">'.($page+2).'</a>';
                        } else {
                            echo '<a href="index?page=1">1</a> ... <a href="index?page='.($page).'">'.($page).'</a> '.($page+1).' <a href="index?page='.($page+2).'">'.($page+2).'</a> ... <a href="index?page='.($num_pages).'">'.($num_pages).'</a>';
                        }
                    }
                }
            }
            // for($i = 1; $i <= $num_pages; $i++) {
            //     if($i-1 == $page) {
            //         echo $i." "; 
            //     } else {
            //         if($i == 1)
            //     }    
            // }
        ?>
    </p>
    <hr>
</section>
