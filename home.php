<!DOCTYPE html>
<html lang="en" style="height:100%; margin:0">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "./style/style.css" />
</head>
<body style="height:100%; margin: 0;">
	<header>
		<img src="./imgs/header/logo.png" style="width:12%;">
			<?php
				require_once "user_scripts/user_bar.php";
			?>
	</header>
	<?php require_once "scripts/nav_script.php";?>
    <div class="land">
        <div class="land-text">
            <br/>
            <h1 style="margin-top:4vh; font-size:5vh; color:black;">Jingle My Bells</h1>
            <br/>
            <h1 style="margin-top:2vh; font-size:3vh; color:black;">Welcome to JMB's, login or click below to see our goods!</h1>
            <br/>
            <h1 style="margin-top:2vh; font-size:2vh; color:black;">We got new stock:</h1>
            <br/>
                <div class="landgoods">
                    <a href="index.php"><img src="./imgs/products/p1.jpg" width=100%></a>
                    <a href="index.php"><img src="./imgs/products/p1.jpg" width=100%></a>
                    <a href="index.php"><img src="./imgs/products/p1.jpg" width=100%></a>
                    <a href="index.php"><img src="./imgs/products/p1.jpg" width=100%></a>
                </div>
            <a href="index.php"><button style="color:black">look at our stuff</button></a>
        </div>
    </div>
    <?php
	require_once "scripts/footer.php";
?>
</body>
</html>