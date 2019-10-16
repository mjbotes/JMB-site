<?php
	session_start();
	require_once "config.php";
	if(isset($_SESSION["is_login"]) && $_SESSION["is_login"] === true) {
		$sql = "INSERT INTO `cart` (`user_id`, `product_id`, `qty`) VALUES (?, ?, '1')";
		$stmt = mysqli_stmt_init($link);
		if($stmt = mysqli_prepare($link, $sql)){
				mysqli_stmt_bind_param($stmt, "ii", $u_id, $p_id);
				$u_id = $_SESSION["ID"];
				$p_id = $_GET["p_id"];
				echo $u_id;
				echo $p_id;
				if(mysqli_stmt_execute($stmt)){
					header("location: ../index.php");
				} else {
					echo "better";
				}
		} else {
			$err = mysqli_error();
			echo $err;
		}
	} else {
		echo "FUCK";
	}
	
?>
