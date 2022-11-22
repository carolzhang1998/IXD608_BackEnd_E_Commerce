<?
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart_items = getCartItems();
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
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>	
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<?= cartTotals() ?>
				</div>
			</div>
		</div>
	</div>
		
</body>
</html>
