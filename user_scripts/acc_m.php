<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	require_once "../scripts/config.php";
	session_start();
	if(!empty($_POST["o_pass"]) && !empty($_POST["pass"]))
	{
		$sql = "SELECT `password` FROM `users` WHERE `user_id`=".$_POST["u_id"];
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_row($result);
		if(password_verify($_POST["o_pass"],$row[0]))
		{
			$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
		}
		$sql="UPDATE `users` SET `password`=".$pass." WHERE user_id`=".$_POST["u_id"];
	}
	$sql="UPDATE `users` SET `name`=?,`surname`=? ,`email`=?,`phone_no`=? WHERE `user_id`=?";
	if($stmt = mysqli_prepare($link, $sql)){
		mysqli_stmt_bind_param($stmt, "sssss", $name, $s_name, $email, $p_no, $p_id);
		$name =$_POST["name"];
		$s_name = $_POST["sname"];
		$email = $_POST["email"];
		$p_no = $_POST["tel"];
		$p_id = $_POST["p_id"];
		if(mysqli_stmt_execute($stmt)){
			header("location: ../index.php");
		} else{
			echo "Something went wrong. Please try again later.";
		}
	}
	}
?>
