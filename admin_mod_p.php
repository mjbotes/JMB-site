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
	<img src="./imgs/header/logo.png" style="width:12%;">
	</header>
	<?php
		require_once "scripts/nav_script.php";
	?>
	<div>
	<table class ="admin_table">
		<tr><th></th><th>Product Name</th><th>Price</th><th></th><th></th></tr>
	</div>
		<?php
	require_once "scripts/config.php";
	$sql = "SELECT * FROM `products`";
	if ($result=mysqli_query($link,$sql)) {
		while ($row=mysqli_fetch_row($result))
		{
			echo '<tr><td><img src="imgs/products/'.$row[1].'"></td><td>'.$row[2].'</td><td>R'.$row[3].'</td><td><img src="imgs/mod.png" class="a_icon"></td><td><img src="imgs/del.png" class="a_icon"></td></tr>';
		}
		mysqli_free_result($result);
	}	
?>
	</table>
<?php
	require_once "scripts/footer.php";
?>
</body>
</html>
