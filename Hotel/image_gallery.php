<!DOCTYPE>
<html>
	<head>
		<title>Image Gallery</title>
	</head>
	<style type="text/css">
		body {
			background: #f2f2f2;
			margin: 0px;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		ul
		{
  			list-style-type: none;
			background-color: saddlebrown;
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		.footer {
			background-color:saddlebrown;
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}
		li
		{
			display: inline;
			float: left;
		}
		* {box-sizing: border-box;}

		body {font-family: Verdana, sans-serif;}

		.mySlides {display: none;}

		h1
		{
			background-color: saddlebrown;
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}

		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}

		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color: #094198;
		}

		img {
			vertical-align: middle;
			background-size: cover;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: peru;
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
	</style>
	<body>
		<h1>Golden <p style="color: peru; display: inline;">Hotel</p></h1>
		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>
		<br>
		<h2 class="r_room">IMAGE GALLERY</h2><br>
		<div class="row">
  			<div class="column">
    			<img src="images/event1.jpg" alt="Events" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/event2.jpg" alt="Events" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/event3.jpg" alt="Events" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/bar and pool 1.jpg" alt="Bar and Pool" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/bar and pool 2.jpeg" alt="Bar and Pool" style="width:90%">
  			</div>
  			<div class="column">
    			<img src="images/bar and pool 3.jpg" alt="Bar and Pool" style="width:100%">
  			</div>
		</div><br>
		<div class="row">
  			<div class="column">
    			<img src="images/hotel room1.jpg" alt="Hotel Room" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/hotel room 2.jpg" alt="Hotel Room" style="width:100%">
  			</div>
  			<div class="column">
    			<img src="images/hotel room 3.jpg" alt="Hotel Room" style="width:100%">
  			</div>
		</div><br><br><br>
		<h2 id="rooms_and_rates" class="r_room">OUR ROOMS</h2>
		<div class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="images/room1.jpg" alt="Deluxe Room" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/room3.jpg" alt="Extra Room" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/room6.jpg" alt="VIP Room" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Deluxe Room</h3>
  				</div>
  				<div class="column">
    				<h3>Extra Room</h3>
  				</div>
  				<div class="column">
    				<h3>VIP Room</h3>
  				</div>
			</div>
		</div><br>
		<div id="contact" class="footer">
			<hr>
			<h2 class="foot-text"> Since 1999 <br> Contact Us 0041768908</h2>
		
			
		</div>
	</body>