<?php
	echo '<table class ="admin_table">
		<tr><th></th><th>Product Name</th><th>Price</th><th></th><th></th></tr>';
	require_once "scripts/config.php";
	$sql = "SELECT * FROM `products`";
	if ($result=mysqli_query($link,$sql)) {
		while ($row=mysqli_fetch_row($result))
		{
			echo '<tr><form action="scripts/modify.php" method="post"><td><img src="imgs/products/'.$row[1].'">
			<input type="hidden" name="p_id" value="'.$row[0].'">
			<input type="hidden" name="m_table" value="product"></td>
			<td><input type="text" value="'.$row[2].'" name="p_name"</td>
			<td>R<input type="int" value="'.$row[3].'" name="p_price"></td>
			<td><button type="submit"><img src="imgs/mod.png" class="a_icon"></form></button></td>
			<td><a href="scripts/delete.php?del_product='.$row[0].'"><img src="imgs/del.svg" class="a_icon"></a></td></tr>';
		}
		mysqli_free_result($result);
	}
	echo '</table>'
?>
