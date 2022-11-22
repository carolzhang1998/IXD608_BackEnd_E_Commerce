<?
	include_once "lib/php/functions.php";
	// print_p($_SESSION,$_GET,$_POST);

	resetCart();
	// print_p($_SESSION,$_GET,$_POST);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
	<? include "parts/meta.php"; ?>	
</head>
<body>
	<? include "parts/navbar.php"; ?>
	<div class="container">
		<div class="card soft">
			<h2>Thank you for your purchase</h2>
			<p><a href="product_list.php">Continue Shopping</a></p>
		</div>
	</div>
	
</body>
</html>