    <section class="main">
		<hr>
		<h1><a name="tobegin">Мои интересы</a></h1>
		<hr>
		<h3>Содержание</h3>
		<ol style="list-style-type: none;">
			<?php 
				for($i = 0; $i < 5; $i++) {
					echo '<li><a class="anchor" href="#my'.ANCHORS[$i].'">'.TITLES[$i].'</a></li>';
				}
			?>
		</ol>
		<?php 
			for($i = 0; $i < 5; $i++) {
				echo '<hr>';
				echo '<article>';
				echo '<h3><a name="my'.ANCHORS[$i].'">'.TITLES[$i].'</a></h3>';
				echo '<ul class="lists">';
				foreach(LISTS[$i] as $key) {
					echo '<li>'.$key.'</li>';
				}
				echo '</ul>';
				echo '</article>';
			}
		?>
		<h4><a class="anchor" href="#tobegin">В начало</a></h4>
		<hr>
    </section>