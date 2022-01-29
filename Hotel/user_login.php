<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
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
		
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: peru;
		border: 10px solid saddlebrown;
		border-radius: 15px;
	}
	body  {
		margin-top: -100px;
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: peru;
		border: 1px solid saddlebrown;
		box-shadow: 2px 2px saddlebrown;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
		color: black;
		margin-top: 30px;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: peru;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid saddlebrown;
		box-shadow: 2px 2px peru;
		color: peru;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: peru;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>

<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(img1.jpg);">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: peru"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="input" type="text" name="phone" placeholder="Enter phone" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td></td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input class="button"style="text-decoration: none;  font-size: 25px;" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: peru;"><b>New User?</b></td>
				<td style="color: peru;"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>
</body>
</html>