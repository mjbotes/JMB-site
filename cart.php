<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "style/style.css" />
</head>
<body>
	<header>
	<img src="./imgs/header/clogo.png" style="width:12%;">
		<?php
			require_once "user_scripts/user_bar.php";
		?>
	</header>
	<?php
		require_once "scripts/nav_script.php";
	?>
	<br/>
	<h1 style="margin-top:1vh; font-size:4vh; color:black;">Shopping Cart</h1>
	<br/>
	<p>Proceed to checkout</p>
	<br />
	<table class="cart">
	<?php
		require_once "scripts/cart_script.php";
	?>
	<?php
	require_once "scripts/footer.php";
?>
</body>
</html>
