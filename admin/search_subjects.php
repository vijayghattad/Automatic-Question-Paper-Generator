<?php

$con=mysqli_connect("localhost","root","","qpgs") or die("error creating database");

?>
<?php
$query="select * from add_subject where sname like ('$_POST[subname]')";
$s=mysqli_query($con,$query);

echo "<br><br><table class='table table-bordered'>";
echo "<tr style='color:black; font-size:15px; background-color:#ff9966'>";
echo "<th>"; echo "subject code"; echo "</th>";
echo "<th>"; echo "subject name"; echo "</th>";
echo "<th>"; echo "delete subject"; echo "</th>";

echo "</tr>";
while($row=mysqli_fetch_array($s))
{
	echo "<tr style='color:black;'>";
	echo "<td>"; echo $row["scode"]; echo "</td>";
	echo "<td>"; echo $row["sname"]; echo "</td>";
	echo "<td>"; ?><a href="delete_subject.php?id=<?php echo $row["scode"]; ?>">
	<img src="images/delete.jpg" height="5%" style="margin-left:30%; border-radius: 30%;"> </a><?php echo "</td>";

	echo "</tr>";
}

echo "</table>";
?>