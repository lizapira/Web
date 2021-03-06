<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
</head>
<style>
	body {
		background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("images/r1.jpg");
        color: peru;
        height: 3vh;
        background-position:center;
   
	}
	table {
		font-size: 30px;
	}
	td {
		padding: 15px;
	}
	#td1
	{
		background-color: saddlebrown;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	ul {
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: peru;
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:visited {
	  	background-color: saddlebrown;
	  	color: white;
	  	text-decoration: underline;	
	}
	li a:active {
	  	background-color: saddlebrown;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover:not(.active) {
	  	background-color: peru;
	  	color: white;
	  	text-decoration: underline;
	}
	li a:hover {
	  	background-color: saddlebrown;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid saddlebrown;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px peru;
	}
	.decor {
		font-family: Times New Roman;
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">Golden <p style="color: peru; display: inline;">Hotel</p></td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php" class="active">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p>
				</td>
				<tr>
					<td><b>Name: </b></td>
					<td><?php echo $row[2] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone number: </b></td>
					<td><?php echo $row[0] ?><br></td>
				</tr>
				<tr>
					<td><b>Email address: </b></td>
					<td><?php echo $row[3] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of birth: </b></td>
					<td><?php echo $row[5] ?><br></td>
				</tr>
				<tr>
					<td><b>ID Proof: </b></td>
					<td><?php echo $row[4] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
</html>