<?php
require_once "config.php";
$target_dir = "../imgs/products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
		$uploadOk = 1;
		echo "OK";
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
	}
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			$sql = "INSERT INTO `products` (`img_link`, `p_name`, `price`) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($link);
			if($stmt = mysqli_prepare($link, $sql)){
				mysqli_stmt_bind_param($stmt, "ssi", $img_l, $p_name, $price);
				$img_l= $_FILES["fileToUpload"]["name"];
				$p_name = $_POST["p_name"];
				$price = $_POST["price"];
				if(mysqli_stmt_execute($stmt)){
					header("location: ../admin_add_p.php");
				} else{
					echo "Something went wrong. Please try again later.";
				}
			}
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>
