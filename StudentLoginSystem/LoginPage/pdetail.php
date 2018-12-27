	<?php
	Session_start();
if($_SESSION["enrol"]==true)
{
echo "<table border=1px solid black;>";
echo "<tr>";
echo "<td>Enrol ID</td>";
echo "<td>";
echo ""." ".$_SESSION['enrol'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>";
echo ""." ".$_SESSION['username'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Email ID</td>";
echo "<td>";
echo ""." ".$_SESSION['email'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Branch</td>";
echo "<td>";
echo ""." ".$_SESSION['branch'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Gender</td>";
echo "<td>";
echo ""." ".$_SESSION['gender'];
echo "</td>";
echo "</tr>";
echo "</table>";
}

else
{
header('location:index.html');
}
?>