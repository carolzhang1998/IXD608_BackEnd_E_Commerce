<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>store Product List</title>
	<? include "parts/meta.php"; ?>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	<? include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Product List</h2>
			
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>

		<div class="form-control">
			<div class="card soft">
				<div class="display-flex">
					<div class="display-flex flex-stretch">
						<div class="flex-none">
							<button class="form-button" data-value="" data-filter="category" type="button">All</button>
						</div>
						<div class="flex-none">
							<button class="form-button" data-value="coffee" data-filter="category" type="button">Coffee</button>
						</div>
						<div class="flex-none">
							<button class="form-button" data-value="food" data-filter="category" type="button">Food</button>
						</div>
					</div>
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Least Expensive</option>
								<option value="4">Most Expensive</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="productlist grid gap"></div>    
		
	</div>

</body>
</html>