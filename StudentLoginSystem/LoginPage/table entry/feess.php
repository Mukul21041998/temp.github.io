<html>
<head><title>Fees Detail</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="enrol" placeholder="Enrol Id" required>
<input type="text" name="balance" placeholder="Balance Amount" required>
<input type="text" name="fine" placeholder="Fine" required>
<input type="text" name="refundable" placeholder="Refundable" required>
<input type="text" name="non_refund" placeholder="Non Refundable" required>
<input type="text" name="total" placeholder="Total" required>
<input name="submit1" placeholder="Submit" type="submit">
</form>
</body>
</html>
<?php
	if(isset($_POST["submit1"]))
	{
	$enrol=$_POST['enrol'];
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"project");
	$count=0;
	$res=mysqli_query($link,"SELECT * FROM fee WHERE enrol='$enrol'");
	$count=mysqli_num_rows($res);
	if($count>0)
	{
		?>
		<script type="text/javascript">
		alert("Entry Already Maintained.");
	</script>
		<?php
	}
	else{
	mysqli_query($link,"insert into fee values(' ','$_POST[enrol]','$_POST[balance]','$_POST[fine]','$_POST[refundable]','$_POST[non_refund]','$_POST[total]')");
	?>
		<script type="text/javascript">
		alert("Entry Successful.");
	</script>
		<?php
	}}
?>