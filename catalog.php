<?php include_once ('head.php'); ?>
<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->
<?php include_once ('aside.php'); ?>

		<div class="column column9">
			<div class="catalog">
				<!-- хлебные крошки -->
				<div class="breadcrumbs">
					<a href="index.php">Магазин</a>
					<p>Мини - утки</p>
				</div>
				<div class="row clearfix">
					<!-- элементы каталога -->
					<?php

					for ($i=0; $i<18; $i++) {
					 include ('single.php'); 
					}
					?>
					
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php include_once ('footer.php'); ?>