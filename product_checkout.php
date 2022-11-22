<?
	include_once "lib/php/functions.php";
	// print_p($_SESSION, $_GET,$_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout Page</title>
	<? include "parts/meta.php"; ?>	
</head>
<body>
	<? include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Checkout</h2>

			<form class="form">
				<h3>Address</h3>
				<div class="form-control">
					<label for="address-street" class="form-label">Street</label>
					<input type="text" class="form-input" id="address-street" placeholder="Street Name">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-city" class="form-label">City</label>
							<input type="text" class="form-input" id="address-city" placeholder="City">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="address-state" class="form-label">State</label>
							<input type="text" class="form-input" id="address-state" placeholder="State">
						</div>
					</div>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-zip" class="form-label">Zip Code</label>
							<input type="text" class="form-input" id="address-zip" placeholder="Zip Code">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="address-country" class="form-label">Country</label>
							<input type="text" class="form-input" id="address-country" placeholder="Country">
						</div>
					</div>
				</div>
				<h3>Payment</h3>
				<div class="form-control">
					<label for="payment-name" class="form-label">Name</label>
					<input type="text" class="form-input" id="payment-name" placeholder="Name">
				</div>
				<div class="form-control">
					<label for="payment-number" class="form-label">Card Number</label>
					<input type="text" class="form-input" id="address-number" placeholder="####-####-####-####">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="payment-expiration" class="form-label">Expiration Dater</label>
							<input type="text" class="form-input" id="payment-expiration" placeholder="MM-YY">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="payment-cvv" class="form-label">CVV</label>
							<input type="text" class="form-input" id="payment-cvv" placeholder="CVV">
						</div>
					</div>
				</div>
				<div class="form-control">
					<label for="payment-zip" class="form-label">Zip Code</label>
					<input type="text" class="form-input" id="payment-zip" placeholder="Zip Code">
				</div>
				<div class="form-control">
					<a href="product_confirmation.php" class="form-button checkout-button">Complete Checkout</a>
				</div>
				
			</form>
		</div>
	</div>

</body>
</html>