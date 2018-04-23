<?php

session_start();
include("config.php");

$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$q=mysql_query("select * from account where username='$user'");

	while ($m=mysql_fetch_array($q)) 
		{
			$dbids=$m['id'];
			$dbuser=$m['username'];
			$dbpass=$m['password'];

		}


		if ($user==$dbuser&&$pass==$dbpass)
		{
		$_SESSION['dbid'] = $dbids;
		# for display echo $_SESSION["dbid"];
		header('location:papar.php') ;
		}
		
		else if ($user == "" && $pass == "")
		{
			echo '<script language="javascript">';
			echo 'alert("Please enter username and password")';
			echo '</script>';
			include ('index.php');
		}

		else if ($user!==$dbuser&&$pass!==$dbpass){
			echo '<script language="javascript">';
			echo 'alert("Invalid username and password")';
			echo '</script>';
			include ('index.php');}
?>