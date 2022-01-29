<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
</head>
<style>
	body {
	   margin: 0;
	   background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("images/image4.jpg") ;
	  color: peru;
      height: 2vh;
    background-size: cover;
    background-position: center;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color: saddlebrown;
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
	}
	.basic_box {
		border: 1px solid saddlebrown;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px peru;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
	}
	ul {
	  	list-style-type: none;
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

	li a.active {
	  	background-color: saddlebrown;
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color: peru;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">Golden <p style="color: peru; display: inline;">Hotel</p> </td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" >Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php" class="active">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Confirmed Bookings</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from confirmed_booking";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr>
					<th colspan="2">Modify Stay</th>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="admin_modify_room.php" method="post">
							<input type="number" name="book_id">
					</td>
				</tr>
				<tr>
					<td colspan="1">Enter new CheckOut date:</td>
					<td colspan="2">
						<input type="date" name="checkout">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">Change</button>
				</tr>
			</table>
		</div>
	</body>
</html>