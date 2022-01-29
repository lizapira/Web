<!DOCTYPE html>
<html>
<head>
	<title>Admin Remove Rooms</title>
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
		<li><a href="remove_room_admin.php"class="active">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Remove Rooms</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
			</table>
			<br><br>
			<form class="basic_box" action="admin_room_removed.php" method="post">
			<table>
				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="Single bed">Single bedded</option>
							<option value="Double bed">Double bedded</option>
							<option value="Four bed">Four bedded</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to remove:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
			</table><br>
			<input style="margin-left: 43%;" type="submit" value="Submit">
			</form>
	</div>
</body>
</html>