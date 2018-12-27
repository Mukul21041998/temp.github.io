<html>
<head>
<title>Attendance</title></head>
<body>
<form action="" method="post">
Branch &nbsp;&nbsp;
<select name="branch" required>
<option value="CSE">CSE</option>
<option value="IT">IT</option>
</select><br /><br />
Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="date" required><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit1" >
</form>
</body>
</html>
<?php
//$connection=mysqli_connect('localhost','root','');
//mysqli_select_db($connection,'project');
//if(isset($_POST["submit1"]))
	Session_start();
	if(isset($_POST["submit1"]))
	{
	$branch=$_POST['branch'];
	$date=$_POST['date'];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"project");
	$count=0;	
	$res=mysqli_query($link,"select * from attendance where (branch='$branch' and date='$date')");
	$count=mysqli_num_rows($res);
	//echo "$date";
	//echo "$branch";
	//$query = "SELECT * FROM 'attendance' WHERE (branch='$branch' and date='$date')";
	//$result = mysqli_query($connection, $query);
	//$count = mysqli_num_rows($result);
	if($count>0)
	{
	?>
		<script type="text/javascript">
			alert("ATTENDANCE ALREADY TAKEN ON THIS BRANCH AND DATE");
		window.location="t.attendance.php"
		</script>
	<?php	
	}
	else
	{
	$quer = "SELECT `id`, `enrol`, `username` FROM `register` WHERE branch='$_POST[branch]'";
	$res = mysqli_query($link, $quer);
	echo "<form action='' method='post'>";
	echo "<input type='date' name='date' value='$date' readonly>";
	echo "<input type='text' name='branch' value='$branch' readonly>";
	echo "<table border='1'><tr><th>ID</th><th>Enrol</th><th>Name</th><th>Status</th></tr>";
	foreach ($res as $row)
		{
			
		echo "<tr><td> " .$row['id']. "</td>
		 <td> " .$row['enrol']. "</td>
		<td> " .$row['username']. " </td>
		<td> Present <input type='radio'  name='attendance[".$row['enrol']. "]' value='present' required> Absent <input type='radio' name='attendance[".$row['enrol']. "]' value='absent' required> </td>
		</tr>";
	}
	echo "</table>";
	echo "<input type='submit' name='submit2'>";
	echo "</form>";
	}
}
?>
<?php
	if(isset($_POST["submit2"]))
	{
	//$name = "username[".$row['username']."]";
	$att = $_POST['attendance'];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"project");
	foreach ($att as $id => $value)
    {
        if ($value=="present")
		{
			mysqli_query($link,"insert into attendance values(' ','$id','Present','$_POST[branch]','$_POST[date]')");
		}
		else
		{
			mysqli_query($link,"insert into attendance values(' ','$id','Absent','$_POST[branch]','$_POST[date]')");
	}}
	?>
		<script type="text/javascript">
		alert("Entry Successful.");
	</script>
		<?php
	}
	?>
