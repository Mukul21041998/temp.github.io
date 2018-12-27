<?php
session_start();
$connection=mysqli_connect('localhost','root','');
$select_db=mysqli_select_db($connection,'project');
if(isset($_POST["submit1"]))
{
	$user=$_POST['user'];
	$password=$_POST['password'];
	$query = "SELECT * FROM `register` WHERE (email='$user' or enrol='$user') and password='$password'" ;
	$select=mysqli_query($connection,"SELECT * FROM register WHERE enrol='$user' or email='$user'");
	while($res=mysqli_fetch_array($select))
	{
		$enrol=$res['enrol'];
		$username=$res['username'];
		$email=$res['email'];
		$branch=$res['branch'];
		$gender=$res['gender'];
	$result = mysqli_query($connection, $query);
	$count = mysqli_num_rows($result);
	if($count>0)
	{
		$_SESSION['enrol']=$enrol;
		$_SESSION['username']=$username;
		$_SESSION['email']=$email;
		$_SESSION['branch']=$branch;
		$_SESSION['gender']=$gender;
		header("Location:dashboard.php");	
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Incorrect Enrol/Email Id and Password");
		window.location="index.html"
		</script>
			<?php	

	}	
}}
?>
		