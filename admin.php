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
<body>
	<header>
	<?php require_once "user_scripts/user_bar.php"; ?>
	</header>
	<?php 
	require_once "scripts/nav_script.php";
	require_once "scripts/config.php"
	?>
	<div class="add_p">
		<?php require_once "scripts/admin_add_p.php"; ?>
	</div>
	<div>
		<?php require_once "scripts/admin_mod_p.php"; ?>
	</div>
	<div>

	</div>
</body>
</html>
