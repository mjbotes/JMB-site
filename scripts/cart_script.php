<?php
	session_start();
	require_once "scripts/config.php";
	if (isset($_SESSION["is_login"]) && $_SESSION["is_login"]) {
		$u_id = $_SESSION["ID"];
		$sql = "SELECT products.p_name, products.price, cart.qty, cart.cart_id FROM cart INNER JOIN products on cart.product_id = products.product_id WHERE cart.user_id =".$u_id;
		if ($result=mysqli_query($link,$sql))
		{
			while ($row=mysqli_fetch_row($result))
			{
				echo '<tr><td>'.$row[0].'</td><td>R'.$row[1].'</td><td><a href="scripts/quantity.php?qty=dec&c_id='.$row[3].'"><img class="qty_id" src="imgs/dec.svg"></a>'.$row[2].'<a href="scripts/quantity.php?qty=inc&c_id='.$row[3].'"><img class="qty_id" src="imgs/inc.svg"></a></td>
				<td>R'.$row[2] * $row[1].'</td><td><a href="scripts/quantity.php?qty=del&c_id='.$row[3].'"><img class="c_del" src="imgs/del.svg"></a></td></tr>';
				$tot=$tot + ($row[2] * $row[1]);
			}	
		} else {
			echo "problem2";
		}
	} else {
		echo "problem";
	}
	echo "<td></td><td></td><td>Total:</td><td>R".$tot."</td></table>
	<form action='checkout.php' method='POST'>
	<input type='hidden' name='u_id' value='".$u_id."'><input type='submit' value='Checkout'></form>";
?>
