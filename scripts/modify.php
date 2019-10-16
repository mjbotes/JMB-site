<?php
	require_once "config.php";
	if ($_POST["m_table"] === "ad_user")
	{
		$sql="UPDATE `users` SET `name`= $,`surname`= ? ,`email`= ?,`phone_no`= ? WHERE `user_id`= ?";
	
	}elseif ($_POST["m_table"] === "user")
	{
		$sql="UPDATE `users` SET `name`= $,`surname`= ? ,`email`= ?,`phone_no`= ? `password`=? WHERE `user_id`= ?";
	
	}elseif ($_POST["m_table"] === "product")
	{
		$sql="UPDATE `products` SET `p_name`=".$_POST["p_name"].",`price`=".$_POST["p_price"]." WHERE `product_id'=".$_POST["p_id"];
	
	}
?>
