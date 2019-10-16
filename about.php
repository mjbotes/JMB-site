<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel = "stylesheet"
	type = "text/css"
	href = "./style/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap"
	rel="stylesheet">
    <link rel="stylesheet" href="./style/popup.css">
</head>
<body>
    <header>
		<img src="./imgs/header/alogo.png" style="width:12%;">
		<?php
				require_once "user_scripts/user_bar.php";
		?>
	</header>
    <div class ="about">
		<?php require_once "scripts/nav_script.php"; ?>
        <h3>Santa and his Elf</h3>
        <div class="aboutinfobox">
            <br/>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.oluta,<br/>
                non nesciunt. Magnam, similique, labore quisquam blanditiis explicabo
                consequatur exercitationem et distinctio repellat cupiditate iste. Natus,<br/>
                iusto. Pariatur quae tenetur laborum, porro itaque, tempora magnam officia
                aut rerum provident nam reprehenderit ipsam dicta aspernatur magni<br/>
                exercitationem sunt ad? Ducimus reprehenderit enim cum quisquam nisi deleniti
                doloremque eos beatae expedita libero minus nam pariatur aliquid nulla
                voluptatum, molestias quibusdam. Ex illum architecto beatae itaque adipisci
                necessitatibus impedit, officia nam veniam animi? Quae?</p>
        <br/>
            <div class="marnus">
                <h2>Mars</h2>
                <img src= "./imgs/santa.jpg">
		        <p>Lorem ipsum dolor sit amet consectetur,<br/>
                    adipisicing elit. Nesciunt, nihil aliquam hic<br/>
                    temporibus explicabo velit laboriosam minus numquam<br/>
                    consequuntur odio expedita nam corporis delectus laudantium a<br/>
                    doloribus accusamus est fuga!</p>
            </div>
            <div class="marnus">
                    <h2>Bongs</h2>
                    <img src= "./imgs/rein.jpg">
		        <p>Lorem ipsum dolor sit amet consectetur,<br/>
                    adipisicing elit. Nesciunt, nihil aliquam hic<br/>
                    temporibus explicabo velit laboriosam minus numquam<br/>
                    consequuntur odio expedita nam corporis delectus laudantium a<br/>
                    doloribus accusamus est fuga!</p>
            </div> 
        </div>
        <div class="moreabout">
        <h3>About the Store</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam repellat rem culpa ut obcaecati, quasi error iusto accusantium nisi? Ab fugit ullam beatae, itaque fugiat ad sunt vitae ex non iusto iste sint placeat, debitis eligendi? Possimus eligendi ut ex fugit reiciendis quis, vitae veritatis ratione, ipsam necessitatibus distinctio laborum!</p>
        </div>
        <div id="popup1" class="overlay">
  <div class="popup"> <a class="close" href="#">&times;</a>
    <div id="dialog" class="window">
      <div class="box">
        <div class="newletter-title">
          <h2>Sign up &amp; get 10% off</h2>
        </div>
        <div class="box-content newleter-content">
          <label>Subscribe to our newsletters now and stay up-to-date with new collections, the latest Xmas stuff and exclusive offers.</label>
          <div id="frm_subscribe">
            <form name="subscribe" id="subscribe_popup">
              <div>
                <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail">
                <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                <div id="notification"></div>
                <a class="button" onclick="email_subscribepopup()"><span>Submit</span></a> </div>
            </form>
            <br /><br /><br />
            <div class="subscribe-bottom">
              <input type="checkbox" id="newsletter_popup_dont_show_again">
              <label for="newsletter_popup_dont_show_again" style="color:black;">Don't show this popup again</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary skip" href="#popup1" style="padding:6px 15px; background:#333; color:#fff; text-decoration:none; border-radius:3px; display:inline-block; margin-top: 1.5%; margin-bottom: 10%;">Sign Up</a>
<br /><br /><br /><br /><br />
<?php
	require_once "scripts/footer.php";
?>    
</body>
		