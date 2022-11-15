<?

function productListTemplate($r,$o){
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div class="product-list-product-name">$o->title</div>
			<div class="product-list-price">&dollar;$o->price</div>
		</figcaption>
	</figure>
</a> 
HTML;
}


function cartListTemplate($r,$o) {
return $r.<<< HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>

	<div class="flex-stretch">
		<div class="cart-product-name">$o->title</div>
		<div class="cart-delete-button"><a href="#">Delete</a></div>
	</div>
	<div class="flex-none"> 
		&dollar;$o->price
	</div>
</div>
HTML;
}


?>
