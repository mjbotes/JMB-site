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
		<img src="./imgs/header/alogo.png" style="width:12%;">
		<?php
				require_once "user_scripts/user_bar.php";
		?>
	</header>
	<?php require_once "scripts/nav_script.php"; ?>
	<div>
		<?php
			session_start();
			require_once "scripts/config.php";
			$sql = "SELECT * FROM `users` WHERE `user_id`=".$_SESSION["ID"].";";
			$result=mysqli_query($link,$sql);
			$row=mysqli_fetch_row($result);
			echo '<h1>Account Management</h1>
			<form class="acc" action="user_scripts/acc_m.php" method="POST"><label>Name: </label><input type="text" value="'.$row[1].'" name="name"><br />
			<label>Surame: </label><input type="text" value="'.$row[2].'" name="sname"> <br />
			<label>Email: </label><input type="text" value="'.$row[3].'" name="email"> <br />
			<label>Telephone: </label><input type="text" value="'.$row[4].'" name="tel"> <br />
			<label>Old Password: </label><input type="text" name="o_pass"> <br />
			<label>Old Password: </label><input type="text" name="pass"> 
			<input type="hidden" value="'.$row[0].'" name="p_id">
			<input type="submit" value="update Account">
			</form>';
		?>
	</div>
</body>
</html>
