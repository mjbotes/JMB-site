<?php
	echo '<form class="add_product" action="scripts/add_product.php" method="post" enctype="multipart/form-data">
		<label>Product Name</label><input type="text" name="p_name"><br />
		<label>Product Price</label><input type="int" name="price"><br />
		<label>Product Description</label><input type="text"><br />
		<input type="file" name="fileToUpload" id="fileToUpload"><br />
    	<input type="submit" value="ADD" name="submit">
	</form>';
?>

