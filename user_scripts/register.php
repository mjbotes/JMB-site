<?php
require_once "scripts/config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $name_err = $sname_err = $confirm_password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty(trim($_POST["username"]))){
		$username_err = "Please enter a username.";
	} else{
		$sql = "SELECT 'user_id' FROM users WHERE email = ?";
		if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $email);
			$email = trim($_POST["username"]);
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				
				if(mysqli_stmt_num_rows($stmt) == 1){
					$username_err = "This email is already taken.";
				} else{
					$username = trim($_POST["username"]);
				}
			} else{
				echo "501 Oops! Something went wrong. Please try again later.";
			}
		}
		mysqli_stmt_close($stmt);
	}
	if(empty(trim($_POST["password"]))){
		$password_err = "Please enter a password.";     
	} elseif(strlen(trim($_POST["password"])) < 6){
		$password_err = "Password must have atleast 6 characters.";
	} else{
		$password = trim($_POST["password"]);
	}
	if(empty(trim($_POST["name"]))){
		$name_err = "Please enter a name.";     
	} else {
		$name =trim($_POST["name"]);
	}
	if(empty(trim($_POST["surname"]))){
		$surname_err = "Please enter a Surname.";     
	} else {
		$sname=trim($_POST["surname"]);
	}
		$tel =trim($_POST["telephone"]);

	if(empty(trim($_POST["confirm_password"]))){
		$confirm_password_err = "Please confirm password.";     
	} else{
		$confirm_password = trim($_POST["confirm_password"]);
		if(empty($password_err) && ($password != $confirm_password)){
			$confirm_password_err = "Password did not match.";
		}
	}
	if(empty($username_err) && empty($password_err) && empty($name_err) && empty($sname_err) && empty($confirm_password_err)){
		$sql = "INSERT INTO `users` (`name`, `surname`, `email`, `phone_no`, `password`) VALUES (?, ?, ?, ?, ?)";
		$stmt = mysqli_stmt_init($link);
		if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "sssss", $name, $sname, $email, $tel, $pass);
			$email = $username;
			$pass = password_hash($password, PASSWORD_DEFAULT);
			if(mysqli_stmt_execute($stmt)){
				session_start();
				if ($_SESSION["is_admin"]) {
					header ("location: admin.php");
				} else {
				header("location: login.php");
				}
			} else{
				echo "Something went wrong. Please try again later.";
			}
		}
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
}
?>
