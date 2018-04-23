<?php
include('config.php');
$id_pelajar=$_GET['idcal'];
$query="delete from calculation where idcal='$id_pelajar'";
$result=mysql_query($query);
echo $id_pelajar;
if($result==TRUE) header("Location:papar.php");
if($result==FALSE) echo "gagal <a href=\"papar.php\">senarai</a>";
?>