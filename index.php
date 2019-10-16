<!DOCTYPE html>
<html lang="en" style="height:100%; margin:0">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "./style/style.css" />
</head>
<body style="height:100%; margin: 0;">
	<header>
		<img src="./imgs/header/logo.png" style="width:12%;">
			<?php
				require_once "user_scripts/user_bar.php";
			?>
	</header>
	<?php require_once "scripts/nav_script.php"; ?>
	<div class="categories">
		<h1 style="margin-top:4vh; font-size:3vh; color:black;">Categories</h1>
		</div>
	<div class="main">
		<br/>
		<div class="products">
			<?php
				require_once "scripts/config.php";
				$sql="SELECT img_link, p_name, price, product_id FROM products";
				if ($result=mysqli_query($link,$sql))
				{
				while ($row=mysqli_fetch_row($result))
				  {
				  echo '<div class="item"><img src="imgs\products\\'.$row[0].'"><h2>'.$row[1].'</h2><p>'.$row[2].'</p><form action="scripts/add_cart.php"><input type="hidden" name="p_id" value="'.$row[3].'"><input type="submit" value="add to cart"></form></div>';
				  }
				mysqli_free_result($result);
			  }	
			?>
		</div>
	</div>
	<?php
	require_once "scripts/footer.php";
?>
</body>
</html>
