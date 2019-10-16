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
	<form class="add_product" action="scripts/add_product.php" method="post" enctype="multipart/form-data">
		<label>Product Name</label><input type="text" name="p_name"><br />
		<label>Product Price</label><input type="int" name="price"><br />
		<label>Product Description</label><input type="text"><br />
		<input type="file" name="fileToUpload" id="fileToUpload">
    	<input type="submit" value="Upload Image" name="submit">
	</form>
	<?php
	require_once "scripts/footer.php";
?>
	</body>
</html>
