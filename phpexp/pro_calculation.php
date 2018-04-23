<?php
session_start();
include('config.php');
$dbid = $_SESSION["dbid"];

$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$opr=$_REQUEST['opr'];
$com=$_REQUEST['com'];

if ($opr=="+")
{
	$hasil = $num1 + $num2;
}

else if ($opr=="-")
{
	$hasil = $num1 - $num2;
}

else if ($opr=="*")
{
	$hasil = $num1 * $num2;
}

else if ($opr=="/")
{
	$hasil = $num1 / $num2;
}

else if ($opr=="%")
{
	$hasil = $num1 % $num2;
}

else if ($opr=="bmi")
{
	$num3 = $num2*$num2;
	$hasil = $num3/$num1;
}
else if ($opr=="percent")
{
	$hasil = $num1/$num2*100;
}
else if ($opr == "perimeter-square")
{
	$hasil = $num1*2+$num2*2;
}
mysql_query("insert into calculation values('','$num1','$opr','$num2','$hasil','$com','$dbid')");

header ("location:papar.php");
?>