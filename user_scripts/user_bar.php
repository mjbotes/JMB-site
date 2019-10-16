<?php
	echo '<div class="userd">';
	require_once "scripts/config.php";
	session_start();
	if ($_SESSION["is_login"] === true) {
		$sql = "SELECT products.price, cart.qty FROM `cart` INNER JOIN products on cart.product_id = products.product_id WHERE cart.user_id=".$_SESSION["ID"];
		$result=mysqli_query($link,$sql);
		$t_q = 0;
		$tot = 0;
		while ($row=mysqli_fetch_row($result)) {
			$t_q = $t_q + $row[1];
			$tot = $tot + ($row[1] * $row[0]);
		}
		if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === 1) {
			$ad = "<a href='admin.php'>Admin</a> | ";
		}
		echo $ad.'<a href="cart.php"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gift" 
		class="tree" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
		<path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5
		-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 
		16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 
		40-40 40z"></path></svg> '.$t_q.' R '.$tot.' </a>| <a href="account.php">'.$_SESSION["Name"].'</a> | <a href="user_scripts/logout.php">logout</a>';
	} else {
		echo "<a href='login.php'>Login</a>";
	}
	echo '</div>'
?>
