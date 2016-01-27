<?php include_once ('head.php'); ?>
<section>
<div class="container">
	<div class="row clearfix">
	    <!-- боковое меню -->

<?php include_once ('head.php'); ?>

<?php include ('goods.php'); ?>

		<div class="catalog column column9">
			<div class="order-status ">
				<div class="row clearfix">
					<p>Мини-утка брелок добавлена в корзину</p>
					<a href="" class="order-status-btn-basket">В Корзину</a>
				</div>
			</div>
			<!-- хлебные крошки -->
			<div class="breadcrumbs item-breadcrumbs">
				<a href="index.php">Магазин</a>
				<a href="catalog.php">Мини - утки</a>
			</div>
			
			<div class=" row clearfix item-heading">
				<!-- название товара -->
				<h1 class="item-name column column6">
				<?php
	
				echo $items[0]["name"];
				 ?>
				 </h1>
				<!-- цена -->
				<p class="price column column6">
					<?php
					echo $items[0]["price"] . " &#8381;";
				 	?>


				</p>
			</div>
			<div class="row clearfix">
				<div class="column column6">
					<!-- галерея картинок -->
					<div class="item-gallery">
						<img src="img/item.jpeg" alt="уточка">
						<div class="small-images">
							<img src="img/item.jpeg" alt="уточка">
							<img src="img/item.jpeg" alt="уточка">
							<img src="img/item.jpeg" alt="уточка">
						</div>
					</div>
				</div>
				<div class="column column6">
				<!-- описание -->
					<p class="item-description">
					<span class="grey-bold">

					<?php
					echo $items[0]["description"];
				 	?>

					</p>
					<!-- цена -->
					<p class="price">
					<?php
					echo $items[0]["price"] . " &#8381;";
				 	?>

					</p>
					<div class="order-btns">
						<a href="" class="btn-basket">В Корзину</a>
						<a href="" class="btn-click">Купить в 1 клик</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php include_once ('footer.php'); ?>