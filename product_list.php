<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

// print_p($_SESSION, $_GET,$_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Product List</title>
	<? include "parts/meta.php"; ?>
</head>
<body>

	<? include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>
			
			<?

				$result = makeQuery(
					makeConn(),
					"SELECT *
					FROM `products`
					ORDER BY `date_create`
					LIMIT 12
					");

				echo "<div class='productlist grid gap'>",array_reduce($result, 'productListTemplate'),"</div>";


			?>

		</div>
	</div>

</body>

</html>