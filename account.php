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
			$sql = "SELECT * FROM `users` WHERE `user_id` = ?";
			if ($stmt = mysqli_prepare($link, $sql))
			{
				mysqli_stmt_bind_param($stmt, "s", $u_id);
				$u_id = $_SESSION['ID'];
				if(mysqli_stmt_execute($stmt)){
					mysqli_stmt_store_result($stmt);
					if (mysqli_stmt_num_rows($stmt) == 1){
						mysqli_stmt_bind_result($stmt, $id, $name, $sname, $email, $p_no, $h_pass);
						if(mysqli_stmt_fetch($stmt)){
							echo '<form class="acc"><label>Name: </label><input type="text" value="'.$name.'" name="name"><br />
							<label>Name: </label><input type="text" value="'.$sname.'" name="name"> <br />
							<label>Name: </label><input type="text" value="'.$email.'" name="name"> <br />
							<label>Name: </label><input type="text" value="'.$p_no.'" name="name"> <br />
							<label>Name: </label><input type="text" name="name"> <br />
							<label>Name: </label><input type="text" name="name"></form>';
						}
					}
				}
			}


		?>
	</div>
</body>
</html>
