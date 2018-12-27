<html>
<head>
<title>REGISTER SUCCESSFUL</title>
<style>
#top{width:50%;
height:50%;
padding-top:25%;
padding-left:35%;
//border:1px solid red;}
#butt {
    background-color: #007acc;
    color: white;
    padding: 14px 20px;
    cursor: pointer;
    width: 100%;
	opacity:0.6;
text-decoration:none;
border-radius:4px;
margin-left:10%;
margin-top:35%;
}
#butt:hover {
    opacity: 0.8;}
</style>
</head>
<body bgcolor="#fff5cc">
<div id="top">
<?php
	if(isset($_POST["submit2"]))
	{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"project");
	$count=0;	
	$res=mysqli_query($link,"select * from register where (email='$_POST[email]' || enrol='$_POST[enrol]')");
	$count=mysqli_num_rows($res);
	
	if($count>0)
	{
	?>
		<script type="text/javascript">
		alert("This Email/Enrol ID Is Already Registered.");
	</script>
		<?php
	}
	else
	{
	mysqli_query($link,"insert into register values(' ','$_POST[username]','$_POST[branch]','$_POST[email]','$_POST[enrol]','$_POST[password]','$_POST[confirmation]','$_POST[gender]')");
	?>
		<script type="text/javascript">
		alert("Registration Successful.");
	</script>
		<?php
	}
	}
	?>
		<div id="login">
		<a id="butt" href="index.html">Click Here To Go On Login Page.</a>
		</div>
		</div>
</body>
</html>