<section class="main">
    <div class="table-messages">
        <table class="table">
            <thead>
                <tr>
                    <th>Время</th>
                    <th>Страница</th>
                    <th>IP</th>
                    <th>Имя хоста</th>
                    <th>Браузер</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $key) {
                    echo '<tr><td>'.$key["date"].'</td><td>'.$key["page"].'</td><td>'.$key["ip"].'</td><td>'.$key["host"].'</td><td>'.$key["browser"].'</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <p class="pages">
        <?php
        echo 'Страницы: ';
            if($page == 0) {
                if($num_pages > 2) {
                    echo '1 <a href="index?page=2&admin_area=1">2</a> ... <a href="index?page='.($num_pages).'&admin_area=1">'.($num_pages).'</a>';
                } else {
                    if($num_pages == 2) {
                        echo '1 <a href="index?page=2&admin_area=1">2</a>';
                    } else {
                        if($num_pages == 1) {
                            echo '1';
                        }
                    }
                }
            } else {
                if($page == 1) {
                    if($num_pages > 3) {
                        echo '<a href="index?page=1&admin_area=1">1</a> 2 <a href="index?page=3&admin_area=1">3</a> ... <a href="index?page='.($num_pages).'&admin_area=1">'.($num_pages).'</a>';
                    } else {
                        if($num_pages == 3) {
                            echo '<a href="index?page=1&admin_area=1">1</a> 2 <a href="index?page=3&admin_area=1">3</a>';
                        } else {
                            if($num_pages == 2) {
                                echo '<a href="index?page=1&admin_area=1">1</a> 2';
                            }
                        }
                    } 
                } else {
                    if($page == $num_pages-1) {
                        echo '<a href="index?page=1&admin_area=1">1</a> ... <a href="index?page='.($page).'&admin_area=1">'.($page).'</a> '.($page+1);
                    } else {
                        if($page == $num_pages-2) {
                            echo '<a href="index?page=1&admin_area=1">1</a> ... <a href="index?page='.($page).'&admin_area=1">'.($page).'</a> '.($page+1).' <a href="index?page='.($page+2).'&admin_area=1">'.($page+2).'</a>';
                        } else {
                            echo '<a href="index?page=1&admin_area=1">1</a> ... <a href="index?page='.($page).'&admin_area=1">'.($page).'</a> '.($page+1).' <a href="index?page='.($page+2).'&admin_area=1">'.($page+2).'</a> ... <a href="index?page='.($num_pages).'&admin_area=1">'.($num_pages).'</a>';
                        }
                    }
                }
            }
        ?>
    </p>
</section>