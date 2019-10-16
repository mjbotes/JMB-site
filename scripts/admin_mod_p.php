<?php
	echo '<table class ="admin_table">
		<tr><th></th><th>Product Name</th><th>Price</th><th></th><th></th></tr>';
	require_once "scripts/config.php";
	$sql = "SELECT * FROM `products`";
	if ($result=mysqli_query($link,$sql)) {
		while ($row=mysqli_fetch_row($result))
		{
			echo '<tr><td><img src="imgs/products/'.$row[1].'"></td><td>'.$row[2].'</td><td>R'.$row[3].'</td><td><img src="imgs/mod.png" class="a_icon"></td><td><img src="imgs/del.png" class="a_icon"></td></tr>';
		}
		mysqli_free_result($result);
	}
	echo '</table>'
?>
