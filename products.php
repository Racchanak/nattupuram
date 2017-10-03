<?php 
	$title = 'Shop';
	$menu = 'menu_act';
	$submenu = 'prod';
	include('header.php');
?>	
	
	<!-- <section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section> -->
	
	<section>
		<div class="container">
			<div class="row">				
				<?php
					include('category.php');
					include('shop.php');
				?>
			</div>
		</div>
	</section>

<?php
	include('footer.php');
?>