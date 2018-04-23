<?php 
session_start();
?>

<html>
<head>
	<title>Sticulator</title>
	<link rel="stylesheet" type="text/css" href="aio.css" />
</head>
<body bgcolor="black"><center>
	<h2>Sticulator</h2>

<style>
.dropbtn {
    margin: auto;
		font-family: monospace;
		padding: 10px;
		font-size: 15px;
		color: black;
		background: white;
		border-radius: 20px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    margin: auto;
		font-family: monospace;
		padding: 10px;
		font-size: 15px;
		color: yellow;
		background: black;
		border-radius: 20px;
}
</style>
</head>
<body>

	<form action="pro_calculation.php" method="post">

		<table>
			<tr>
				<th>Number 1</th>
				<th><input name="num1" type="text" value''></input></th>
			</tr>
			<tr>
				<th>Operator</th>
				<th><select name="opr">
					<option>+</option>
					<option>-</option>
					<option>*</option>
					<option>/</option>
					<option>%</option>
					<option>bmi</option>
					<option>percent</option>
					<option>perimeter-square</option>
				</select></th>
			</tr>
			<tr>
				<th>Number 2</th>
				<th><input type="text" name="num2" value''></input></th>
			</tr>
			<tr>
				<th>Comment</th>
				<th><input type="text" name="com" value''></input></th>
			</tr>
		</table>
		<br>
		<div align="center">
	<button type="submit" value="Save">Save</button>
	<button type="reset" value="reset">Reset</button><br><br>

</div>
	</form>
		<div class="dropdown">
  <button class="dropbtn">Help?</button>
  <div class="dropdown-content">
<?php include('help.php') ?>
  </div>
</div><br><br>

	<button value="Logout"><a href="index.php">Logout</a></button>
</center>
</body>

</html>