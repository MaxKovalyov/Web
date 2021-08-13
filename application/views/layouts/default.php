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
            <a class="links" href="/main/index">Главная страница</a>
			<a class="links" href="/contact/index">Контакт</a>
			<a class="links" href="/test/index">Тест</a>
			<a class="links" href="/guestBook/index">Гостевая книга</a>
			<a class="links" href="/uploadBlogs/index">Загрузить блог</a>
			<a class="links" href="/myBlog/index">Мой блог</a>
			<div class="dropdown">
				<a class="links" href="" id="dropd" >Другое</a>
				<ul class="sub-menu" id="myDropdown">
					<li>
						<a class="sub" href="/about/index">Обо мне</a>
					</li>
					<li>
						<a class="sub" href="/interests/index">Мои интересы</a>
					</li>
					<li>
						<a class="sub" href="/study/index">Учёба</a>
					</li>
					<li>
						<a class="sub" href="/photo/index">Фотоальбом</a>
					</li>
					<li>
						<a class="sub" href="/history/index">История просмотра</a>
					</li>
					<li><hr></li>
				</ul>
			</div>
		</nav>
		<hr>
	</header>
    <?php echo $content; ?>
</body>
</html>