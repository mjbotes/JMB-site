<?php
require_once "scripts/config.php";
echo "<table class='rbig'><tr><th>User ID</th><th>Name</th><th>email</th><th colspan=3>CART</th></tr>";
$sql="SELECT `user_id`, `name`, surname, email FROM users";
$result=mysqli_query($link,$sql);
while ($row=mysqli_fetch_row($result)) {
	echo "<tr><td>".$row[0]."</td><td>".$row[1]." ".$row[2]."</td><td>".$row[3]."</td>";
	$sql = "SELECT products.p_name, products.price, cart.qty FROM `cart` INNER JOIN products on cart.product_id = products.product_id WHERE cart.user_id=".$row[0];
	$res=mysqli_query($link,$sql);
	$tot = 0;
	if ($r=mysqli_fetch_row($res)){
		$tot = $tot + ($r[1] * $r[2]);
		echo "<td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td></tr>";
	while ($r=mysqli_fetch_row($res)) {
		$tot = $tot + ($r[1] * $r[2]);
		echo "<tr><td></td><td></td><td></td><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td></tr>";
	}
	echo '<tr><td></td><td></td><td></td><td>Total</td><td>'.$tot.'</td><td><a href="scripts/delete.php?del_cart='.$row[0].'"><img src="imgs/del.svg" class="a_icon"></a></td></tr>';
	} else {
		echo "<td></td><td></td><td>NO CART</td></tr>";
	}
}
	echo "</table>";
?>
