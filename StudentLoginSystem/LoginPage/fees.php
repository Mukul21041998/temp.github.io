<?php
	Session_start();
if($_SESSION["enrol"]==true)
{
$enrol=$_SESSION['enrol'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
$quer = "SELECT *  FROM `fee` WHERE enrol='$enrol'";
$res = mysqli_query($link, $quer);
echo "<center>Amount In Rupees.</center>";
echo "<table border='1'><tr><th>Enrol</th><th>Non Refundable Fee</th><th>Refundable Fee</th><th>Balance Remain</th><th>Fine</th><th>Total Fee</th></tr>";
foreach ($res as $row)
		{	
		echo "<tr>
		<td> " .$row['enrol']. " </td>
		<td> " .$row['non_refund']. " </td>
		<td> " .$row['refundable']. " </td>
		<td> " .$row['balance']. " </td>
		<td> " .$row['fine']. " </td>
		<td> " .$row['total']. " </td>
		</tr>";
}echo "</table>";}
else
{
header('location:index.html');
}
?>