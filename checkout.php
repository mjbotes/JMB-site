<?php
	require_once "scripts/config.php";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$u_id = $_POST["u_id"];
	$sql = "SELECT `cart_id`,`product_id`, `qty` FROM `cart` WHERE `user_id`=".$u_id;
	if ($result=mysqli_query($link,$sql))
	{
		while ($row=mysqli_fetch_row($result))
	  	{
			$sql = "INSERT INTO `orders`(`user_id`, `product_id`, `qty`) VALUES (".$u_id.",".$row[1].",".$row[2].")";
			$link->query($sql);
			$c_id = $row[0];
	  	}
	mysqli_free_result($result);
	}
	$sql = "DELETE FROM `cart` WHERE `cart_id`=".$c_id.";";
	$link->query($sql);
	}
?>
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
	</header>
	<?php require_once "scripts/nav_script.php"; ?>
	<h3>The order has been placed. Thank You</h3>
</body>
</html>
