<section class="main" id="galer">
		<div class="gall">
			<?php 
				for($i=1; $i <= 15; $i++) {
					echo '<figure class="cell"> <img id="img" src="/public/Images/'.$i.'.jpg" title="'.TITLES[$i].'" alt='.$i.'> </figure>';
				}
			?>
		</div>
		<div id="popupImg">
			<img src="" alt="" title="" id="bigimg">
			<div id="prev-btn">
				<img src="/public/Images/left-arrow.jpg" alt="Arrow-left">
			</div>
			<div id="next-btn">
				<img src="/public/Images/right-arrow.jpg" alt="Arrow-right">
			</div>
		</div>
	</section>