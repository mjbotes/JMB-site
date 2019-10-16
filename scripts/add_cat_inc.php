<?php
	require_once "config.php";
	$sql = "INSERT INTO `catergory` (`c_name`) VALUES ('".$_POST["c_n"]."');";
	mysqli_query($link,$sql);
	header("location: ../admin.php");
?>
