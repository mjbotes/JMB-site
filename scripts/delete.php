<?php
	require_once "config.php";

	if (isset($_GET["del_user"]))
	{
		$sql = "DELETE FROM `users` WHERE `user_id`=".$_GET["del_user"];
		$res = mysqli_query($link, $sql);
	} elseif (isset($_GET["del_product"]))
	{
		$sql = "SELECT `img_link` FROM `products` WHERE `product_id`=".$_GET["del_product"];
		$res = mysqli_query($link, $sql);
		if($row=mysqli_fetch_row($res))
		{
			unlink('../imgs/products/'.$row[0]);
			$sql = "DELETE FROM `products` WHERE `product_id`=".$_GET["del_product"];
			mysqli_query($link, $sql);
		}
	} elseif (isset($_GET["cart"]))
	{
		$sql = "DELETE FROM `cat` WHERE `user_id`=".$_GET["cart"];
		mysqli_query($link, $sql);
	}
	header ("location: ../admin.php");
?>
