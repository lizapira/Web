<!DOCTYPE html>
<html>
<head>
	<title>Admin Found</title>
</head>
<style>
	div {
		width: 65%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 20%;
		margin-left: 20%;
		vertical-align: middle;
		font-size: 30px;
		border: 10px solid saddlebrown;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 15px;
        color:peru;
	}
	body  {
        margin-top: 65px;
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
        font-family: sans-serif;
	}
</style>
<body>
<div style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(img1.jpg);">
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<a href="admin_login.php">Redirect to Admin Login</a>
	</div>
</body>
</html>