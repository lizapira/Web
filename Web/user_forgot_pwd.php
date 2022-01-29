<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
</head>
<style>
	div {
		width: 65%;
		height: 100%;
                size:100%
		text-align: center;
		position: relative;
		margin-right: 20%;
		margin-left: 20%;
		vertical-align: middle;
		font-size: 30px;
		border: 4px solid peru;
		padding-top: 25px;
		padding-bottom: 50px;
                color:peru;
                border: 10px solid saddlebrown;
		border-radius: 15px;
	}
	body  {
               margin-top:-100%;
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	button {
		background-color: peru;
		border: 1px solid saddlebrown;
		border-radius: 10px;
		box-shadow: 2px 2px peru;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color: #e6b800;
		border: 1px solid #a6a6a6;
		border-radius: 10px;
		box-shadow: 2px 2px #a6a6a6;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<?php $email = 0;
		$dob = 0;
		?>
		<br><br><br><br><br><br><br><br><br><br>
	<div style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(img1.jpg);">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: peru;"><b>User Forgot Password</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
			<tr>
				<td>Enter User Email address: </td>
				<td><input class="input" type="email" name="email" placeholder="Enter email address" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr>
				<td>Enter Date Of Birth:</td>
				<td> <input class="input" type="date" name="dob" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input style="font-size: 28px; background-color:peru; border: 1px solid saddlebrown; box-shadow: 2px 2px saddlebrown; color: white; border-radius: 10px;" type="submit" value="Recover Password"></td>
			</tr>
			</form>
		</table>
	</body>
</html>