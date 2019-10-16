<?php
	session_start();
	require_once "scripts/config.php";
	if (isset($_SESSION["is_login"]) && $_SESSION["is_login"]) {
		$u_id = $_SESSION["ID"];
		$sql = "SELECT products.p_name, products.price, cart.qty FROM cart INNER JOIN products on cart.product_id = products.product_id WHERE cart.user_id =".$u_id;
		if ($result=mysqli_query($link,$sql))
		{
			while ($row=mysqli_fetch_row($result))
			{

				echo '<tr><td>'.$row[0].'</td><td>R'.$row[1].'</td><td>'.$row[2].'</td></tr>';
			}	
		} else {
			echo "problem2";
		}
	} else {
		echo "problem";
	}
?>
