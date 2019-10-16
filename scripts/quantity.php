<?php
	require_once "config.php";
	$c_id = $_GET["c_id"];
	if($_GET["qty"] === "inc"){
		$sql = "UPDATE `cart` SET `qty`=`qty` + 1 WHERE `cart_id`=".$c_id; 
		mysqli_query($link,$sql);
		header("location: ../cart.php");
	} elseif($_GET["qty"] === "dec"){
		$sql = "UPDATE `cart` SET `qty`=`qty` - 1 WHERE `cart_id`=".$c_id;
		mysqli_query($link,$sql);
		$sql = "SELECT `qty` FROM `cart` WHERE `cart_id`=".$c_id;
		$res = mysqli_query($link,$sql);
		$row = mysqli_fetch_row($res);
		echo $row[0];
		if($row[0] === "0")
		{
			$sql = "DELETE FROM `cart` WHERE `cart_id`=".$c_id;
			mysqli_query($link,$sql);
		}
		header("location: ../cart.php");
	} elseif($_GET["qty"] === "del"){
		$sql = "DELETE FROM `cart` WHERE `cart_id`=".$c_id;
		mysqli_query($link,$sql);
		header("location: ../cart.php");
	}
?>
