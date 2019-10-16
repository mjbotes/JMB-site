<?php
echo "<table><tr><th>Catergory</th></tr>";
require_once "scripts/config.php";
$sql = "SELECT * FROM `catergory`";
if ($result=mysqli_query($link,$sql)) {
	while ($row=mysqli_fetch_row($result))
	{
		echo '<tr><form action="scripts/modify.php" method="post"><td><img src="imgs/products/'.$row[1].'">
		<input type="hidden" name="c_id" value="'.$row[0].'">
		<input type="hidden" name="m_table" value="cat"></td>
		<td><input type="text" value="'.$row[1].'" name="Catergory"</td>
		<td><button type="submit"><img src="imgs/mod.png" class="a_icon"></form></button></td>
		<td><a href="scripts/delete.php?del_cat='.$row[0].'"><img src="imgs/del.svg" class="a_icon"></a></td></tr>';
	}
	mysqli_free_result($result);
}
echo '</table>'
?>
