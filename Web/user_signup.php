<!DOCTYPE html>
<html>
<head>
	<title>New User SignUp</title>
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
		border: 4px solid saddlebrown;
		padding-top: 25px;
		padding-bottom: 50px;
		border-radius: 15px;
		color:peru;
        border: 10px solid saddlebrown;
	}
	body  {
		margin-top: -120px;
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
		  font-family:sans-serif;
	}
	button {
		background-color: peru;
		border: 1px solid saddlebrown;
		border-radius: 10px;
		box-shadow: 2px 2px saddlebrown;
	}
	.input {
		color:black;
		margin-right:55px;
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
		padding-left: 10px;
		padding-right: 10px;
	}
	button:link, button:visited 
	{
		text-decoration: none;
	}
	button:hover, button:active 
	{
		background-color: saddlebrown;
		border: 1px solid saddlebrown;
		border-radius: 10px;
		box-shadow: 2px 2px peru;
		font-size: 28px;
	}
	input:hover, input:active 
	{
		background-color: peru;
		box-shadow: 2px 2px saddlebrown;
	}
</style>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)) ,url(img1.jpg);">
		<form action="user_signed_up.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: peru;"><b>New User SignUp</b></p></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;"> </td>
					<td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;"> </td>
					<td><input class="input" type="number" name="phone" placeholder="Enter Number" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;"> </td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;"> </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;"> </td>
					<td><input class="input" type="text" name="idproof" placeholder="Enter ID Proof" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;"> </td>
					<td><input class="input" type="date" name="dob" value="01-01-2000" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="font-size: 28px; background-color: peru; border: 1px solid saddlebrown; box-shadow: 2px 2px saddlebrown; color: white; border-radius: 10px;" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div> 
</body>
</html>