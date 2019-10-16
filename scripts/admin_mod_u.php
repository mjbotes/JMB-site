<?php
	echo '<table class ="admin_table">
		<tr><th>Name</th><th>Surame</th><th>Email</th><th>Phone No</th><th></th><th></th></tr>';
	require_once "scripts/config.php";
	$sql = "SELECT * FROM `users`";
	if ($result=mysqli_query($link,$sql)) {
		while ($row=mysqli_fetch_row($result))
		{
			echo '<tr><form action="scripts/modify.php" method="post">
			<input type="hidden" name="p_id" value="'.$row[0].'">
			<input type="hidden" name="m_table" value="ad_user">
			<td><input type="text" value="'.$row[1].'" name="name"</td>
			<td><input type="int" value="'.$row[2].'" name="s_name"></td>
			<td><input type="int" value="'.$row[3].'" name="email"></td>
			<td><input type="int" value="'.$row[4].'" name="p_no"></td>
			<td><button type="submit"><img src="imgs/mod.png" class="a_icon"></button></td>
			<td><a href="scripts/delete.php?del_user='.$row[0].'"><img src="imgs/del.png" class="a_icon"></a></td></tr>';
		}
		mysqli_free_result($result);
	}
	echo '</table>'
?>
