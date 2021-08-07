<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/scripts/jquery-3.5.1.min.js"></script>
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
            <a class="links" href="/">Главная страница</a>
			<a class="links" href="/about/index">Обо мне</a>
			<div class="dropdown">
				<a class="links" href="/interests/index" id="dropd" >Мои интересы</a>
				<ul class="sub-menu" id="myDropdown">
					<li>
						<a class="sub" href="/interests/index#myfilm">Фильмы</a>
					</li>
					<li>
						<a class="sub" href="/interests/index#myserial">Сериалы</a>
					</li>
					<li>
						<a class="sub" href="/interests/index#mysportgame">Виды спорта</a>
					</li>
					<li>
						<a class="sub" href="/interests/index#mygame">Компьютерные игры</a>
					</li>
					<li>
						<a class="sub" href="/interests/index#mymusic">Музыка</a>
					</li>
					<li><hr></li>
				</ul>
			</div>
			<a class="links" href="/study/index">Учёба</a>
			<a class="links" href="/photo/index">Фотоальбом</a>
			<a class="links" href="/contact/index">Контакт</a>
			<a class="links" href="/test/index">Тест по дисциплине</a>
			<a class="links" href="/history/index">История просмотра</a>
			<a class="links" href="/guestBook/index">Гостевая книга</a>
		</nav>
		<hr>
	</header>
    <?php echo $content; ?>
</body>
</html>