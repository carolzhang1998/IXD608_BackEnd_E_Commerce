<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,5,7)");
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Cart Page</title>
	<? include "parts/meta.php"; ?>	
</head>
<body>
	<? include "parts/navbar.php"; ?>
	
	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart,'cartListTemplate') ?>
				</div>	
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;7.00</div>
					</div>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button checkout-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</body>
</html>
