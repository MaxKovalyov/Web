<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/scripts/jquery-3.5.1.min.js"></script>
	<script src="/public/scripts/General.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/styles/General.css">
    <?php 
        echo '<link rel="stylesheet" type="text/css" href="/public/styles/'.$name.'.css">';
        echo '<script src="/public/scripts/'.$name.'.js"></script>';
    ?>
    <title><?php echo $title; ?></title>
</head>
<body>
    <section class="time">
        <div id="time">
		    <script>
			    startTime();
		    </script>
	    </div>
    </section>
    <header class="menu">
		<hr>
		<nav>
            <a class="links" href="/blogEditor/index?admin_area=1">Редактор блога</a>
            <a class="links" href="/uploadFile/index?admin_area=1">Загрузка гостевой книги</a>
			<a class="links" href="/autorization/log_out?admin_area=1">Выход</a>
		</nav>
		<hr>
	</header>
    <?php include $content_view; ?>
</body>
</html>