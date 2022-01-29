<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUp</title>
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
		padding-top: 25px;
		padding-bottom: 50px;
		border-radius: 15px;
	}
	body  {
		margin-top:-100px;
	  	background-color:#FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
		font-family: sans-serif;
	}
	button {
		background-color: peru;
		border: 1px solid saddlebrown;
		border-radius: 10px;
		box-shadow: 2px 2px saddlebrown;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
		color: black;
		margin-right: 30px;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	input:hover, input:active 
	{
		background-color: peru;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(img1.jpg);">
		<form action="admin_signup.php" method="post">
			<table>
				<tr>
						<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: peru;"><b>Admin SignUp</b></p></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="input" type="text" name="adminid"  placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="input" type="password" name="password"  placeholder="Enter password" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td colspan="2"><input style="font-size: 25px; background-color: peru; border: 1px solid saddlebrown; box-shadow: 2px 2px saddlebrown; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form> 
	</div>
</body>
</html>