
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>Philzs</h1>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none nav nav-flex">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="about.php">About Us</a></li>
				<li>
					<a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge() ?></span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>
