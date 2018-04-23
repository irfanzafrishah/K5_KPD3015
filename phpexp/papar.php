<?php 
include ("calculator.php");
include("config.php");
?>
<br>

<table align="center">
<tr>
	<th>No.</th>
	<th>Number 1</th>
	<th>Operation</th>
	<th>Number 2</th>
	<th>Calculation</th>
	<th>Comment</th>
	<th>Delete(Permenant)</th>
</tr>
<div style="margin-left: 4%;">
<?php
echo 'Your ID : ';
echo $_SESSION['dbid'];
?>
<div>
<?php
$no=1;

$id=$_SESSION['dbid'];

$ambil=mysql_query("SELECT * from calculation where id ='$id'");

while($data = mysql_fetch_array ($ambil))
{
?>
<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $data['num1'];?></td>
	<td align="center"><?php echo $data['operation'];?></td>
	<td><?php echo $data['num2'];?></td>
	<td><?php echo $data['answer'];?></td>
	<td><?php echo $data['comment'];?></td>

	<td align="center"><button><?php echo"<a href=\"pro_delete.php?idcal=".$data['idcal']."\">Padam</a>";?></button></td>

</tr>
<?php
	}
	?>

</table>
