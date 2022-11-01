<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>

	<?php
		echo "Hello World";
		echo "<div>Hello World</div>";
		echo "<h2>Hello World</h2>";
		echo "<p>Hello World</p>";

		$number = "number123";
		$a = 5;
		$bool =true;

		$float = 0.678;

		echo '<p>'.$number.'</p>';
		echo '<p>$number</p>';
		echo "This $number is equal to 5";
		echo "<p>This is a 'quote'</p>";

		echo (15-3)%7;

		$firstname = "Carol";
		$lastname = "Cat";
		$fullname = $firstname.' '.$lastname;

		echo '<br>'.$fullname.'<br>';

	    // super global variable

		echo $_Get['name'].'<br>';

		echo "My name is {$_GET['name']}! I am years {$_GET["age"]} old".'<br>';


		$colors = array("RED","Yellow","Blue");

		echo $colors[0].'<br>';
		echo $colors[1].'<br>';
		echo $colors[2].'<br>';
		print_r($colors);

	?>
	<div style="color:<?= $colors[0]; ?>">This text has a different color.</div>

	<?
	
		$colorsAssocative = [
			"red" => "#f00",
			"yellow" => "#ff0",
			"blue" => "#00f"
			];

			echo $colorsAssocative['yellow'];
	?>
	<div style="color:<?= $colorsAssocative['blue']; ?>">This text has a different color.</div>

	<?

		// casting
		$a = 5;
		$c = $a;

		$d = $c*2;

		echo $d;


		echo '<p>This is a paragraph.</p>';
		echo '<p>This is a paragraph.</p>';

		function print_p($v) {
			echo "<pre>",print_r($v),"</pre>";
		}

		print_p($_GET);
		print_p($colors);
		print_p($colorsAssocative);


	?>	


</body>
</html>