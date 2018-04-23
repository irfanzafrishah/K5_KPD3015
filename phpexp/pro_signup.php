<?php
include ('config.php');
$uname=$_REQUEST['username'];
$pass=$_REQUEST['password'];

echo $uname;
echo $pass;

$x="insert into account values ('','$uname','$pass') ";
$v=mysql_query($x);

header ('location:index.php');
?>