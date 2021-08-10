<section class="main">
    <div class="form-container">
        <form action="/uploadBlogs/index" method="POST" enctype="multipart/form-data">
            <h4>Загрузка файла для блога</h4>
            <input type="file" name="blogs">
            <?php 
                foreach($errors as $key) {
                    echo "<span class='error'>".$key."</span>";
                }
            ?>
            <input type="submit" class="button">
        </form>
    </div>
</section>