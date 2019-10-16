<?php
	echo '<div class="userd">';
	session_start();
	if ($_SESSION["is_login"] === true) {
		if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === 1) {
			$ad = "<a href='admin.php'>Admin</a> | ";
		}
		echo $ad.'<a href="account.php">'.$_SESSION["Name"].'</a> | <a href="user_scripts/logout.php">logout</a>';
	} else {
		echo "<a href='login.php'>Login</a>";
	}
	echo '</div>'
?>
