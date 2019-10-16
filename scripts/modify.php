<?php
	require_once "config.php";
	if ($_POST["m_table"] === "ad_user")
	{
		$sql="UPDATE `users` SET `name`= $,`surname`= ? ,`email`= ?,`phone_no`= ? WHERE `user_id`= ?";
		if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "ssss", $name, $s_name, $email, $p_no, $p_id);
			$name =$_POST["name"];
			$s_name = $_POST["s_name"];
			$email = $_POST["email"];
			$p_no = $_POST["p_no"];
			$p_id = $_POST["p-id"];
			if(mysqli_stmt_execute($stmt)){
				header("location: ../admin.php");
			} else{
				echo "Something went wrong. Please try again later.";
			}
		}
	}elseif ($_POST["m_table"] === "user")
	{
		$sql="UPDATE `users` SET `name`= $,`surname`= ? ,`email`= ?,`phone_no`= ? `password`=? WHERE `user_id`= ?";
	
	}elseif ($_POST["m_table"] === "product")
	{
		$sql="UPDATE `products` SET `p_name`='".$_POST["p_name"]."',`price`=".$_POST["p_price"]." WHERE `product_id`=".$_POST["p_id"];
		mysqli_query($link, $sql);
		header("location: ../admin.php");
	}
?>
