<?php
	Session_start();
if($_SESSION["enrol"]==true)
{
$enrol=$_SESSION['enrol'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
$quer = "SELECT *  FROM `attendance` WHERE enrol='$enrol'";
$res = mysqli_query($link, $quer);
echo "<table border='1'><tr><th>Date</th><th>Status</th></tr>";
foreach ($res as $row)
		{
			
		echo "<tr>
		<td> " .$row['date']. " </td>
		<td> " .$row['status']. " </td>
		</tr>";
}echo "</table>";}
else
{
header('location:index.html');
}
echo "<br /><br /><br /><br />";
echo "<br /><br /><br /><br />";
?>
<form action="" method="post">
<center><input type='submit' name="submit1" value='Calculate Attendance'></center>
</form>
<?php
if($_SESSION["enrol"]==true)
{
	if(isset($_POST["submit1"]))
	{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"project");
	$total=0;	
	$present=0;	
	$res=mysqli_query($link,"SELECT *  FROM `attendance` WHERE enrol='$enrol'");
	$result=mysqli_query($link,"SELECT *  FROM `attendance` WHERE enrol='$enrol' and status='Present'");
	$total=mysqli_num_rows($res);
	$present=mysqli_num_rows($result);
	echo "Present :- ". "$present";
	echo "<br />";
	echo "Total :- ". "$total";
	$per = ($present/$total)*100;
	echo "<br />";
	echo "Percentage :- ". "$per %";
}}
else
{
header('location:index.html');
}	
?>
