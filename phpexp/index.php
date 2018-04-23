<?php
include ('config.php');
?>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="aio.css" />
	</head>

	<body bgcolor="black">
	<center>
		<h2>Login page</h2><br>
	<form action="pro_login.php" method="post">
		<table>

			<tr>
				<th> Username </th>
				<th> <input type="text" name="username"></input> </th>
			</tr>

			<tr>
				<th> Password </th>
				<th> <input type="password" name="password"></input> </th>
			</tr>

		</table>
		<br>
		<button type="submit" value='Login'>Login</button>
		<button type="reset">Reset</button>

	</form>
			<button type="submit" value='Signup'><a href="signup.php">SignUp</a></button>
	</center>
	</body>



</html>