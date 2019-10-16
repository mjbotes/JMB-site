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
				$sql = "SELECT `user_id` FROM `cart` WHERE `user_id`=".$u_id." AND `product_id`=".$p_id;
				$smt = mysqli_prepare($link, $sql);	
				if(mysqli_stmt_execute($smt)){
						mysqli_stmt_store_result($smt);
						if(mysqli_stmt_num_rows($smt) === 0){
							mysqli_stmt_execute($stmt);}
						}
					}
		} else {
			$err = mysqli_error();
			echo $err;
		}
	header("location: ../cart.php");
?>
