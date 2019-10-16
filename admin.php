<?php
	session_start();
	if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === 1)
	{
		$ok = 1;
	} else {
		header("location: index.php");
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
	href = "./style/style.css" />
</head>
<body style="height:100%; margin: 0;">
<div class="bck2back">
	<header>
	<img src="./imgs/header/logo.png" style="width:12%;">
	<?php require_once "user_scripts/user_bar.php"; ?>
	</header>
	<?php 
	require_once "scripts/nav_script.php";
	require_once "scripts/config.php"
	?>
	<br/>
	<h1 style="margin-top:1vh; font-size:4vh; color:black;">JMB Admin</h1>
	<br />
	<h1 style="margin-top:1vh; font-size:3vh; color:black;">Add Product</h1>
	<div class="add_p" style="font-size: 2vh">
		<?php require_once "scripts/admin_add_p.php"; ?>
	</div>
	<div>
		<?php require_once "scripts/admin_mod_p.php"; ?>
	</div>
	<div>
		<?php require_once "scripts/admin_mod_u.php"; ?>
	</div>
	<div>
		<?php require_once "scripts/admin_carts.php"; ?>
	</div>
</div>
</body>
</html>
