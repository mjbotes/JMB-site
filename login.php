<?php
	require_once "user_scripts/login.php";
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
	href = "style/style.css" />
</head>
<body>
	<header>
		<img src="imgs/header/llogo.php">
	</header>
	<?php require_once "scripts/nav_script.php"; ?>
	<div class="main">
		<div class="login">
			<h2>Login</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($er_user)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="user" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $er_user; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($er_pass)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="pass" class="form-control">
                <span class="help-block"><?php echo $er_pass; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
		</div>
	</div>
	<?php
	require_once "scripts/footer.php";
?>
</body>
</html>
