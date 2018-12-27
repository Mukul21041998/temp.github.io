<?php
	Session_start();
if($_SESSION["enrol"]==true)
{
$branch=$_SESSION['branch'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
$quer = "SELECT *  FROM `faculty` WHERE branch='$branch'";
$res = mysqli_query($link, $quer);
echo "<table border='1'><tr><th>Enrol</th><th>Name</th><th>Subject</th><th>Gender</th></tr>";
foreach ($res as $row)
		{
			
		echo "<tr>
		<td> " .$row['enrol']. " </td>
		<td> " .$row['username']. " </td>
		<td> " .$row['subject']. " </td>
		<td> " .$row['gender']. " </td>
		</tr>";
}echo "</table>";}
else
{
header('location:index.html');
}
?>