<?php

$con=mysqli_connect("localhost","root","","qpgs") or die("error creating database");

?>
<?php
$query="select * from faculty";
$s=mysqli_query($con,$query);

echo "<table class='table table-bordered'>";
echo "<tr style='color:black; font-size:15px; background-color:#ff9966'>";
echo "<th>"; echo "Faculty Id"; echo "</th>";
echo "<th>"; echo "Faculty Name"; echo "</th>";
echo "<th>"; echo "Contact"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "<th>"; echo "Branch"; echo "</th>";
echo "<th>"; echo "Status"; echo "</th>";
echo "<th>"; echo "Approve"; echo "</th>";
echo "<th>"; echo "Disapprove"; echo "</th>";
echo "<th>"; echo "Delete Faculty"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($s))
{
	echo "<tr style='color:black;'>
	<td>".$row['fid']."</td>
	<td>".$row['fname']."</td>
	<td>".$row['contact']."</td>
	<td>".$row['email']."</td>
	<td>".$row['bid']."</td>
	<td>".$row['status']."</td>";
	echo "<td>"; ?> <a href = "approve.php?fid=<?php echo $row["fid"]; ?>">
	<img src="images/approve.jpg" height="15%" style="margin-left:30%; border-radius: 50%;"></a> <?php echo "</td>";
    echo "<td>"; ?> <a href = "notapprove.php?fid=<?php echo $row["fid"]; ?>">
	<img src="images/disapprove.png" height="3.5%" style="margin-left:30%; border-radius: 50%;"></a> <?php echo "</td>";
	echo "<td><b>"; ?><a href="delete_faculty.php?fid=<?php echo $row["fid"]; ?>"> 
	<img src="images/delete.jpg" height="5%" style="margin-left:30%; border-radius: 30%;"> </a><?php echo "</b></td>";

	echo "</tr>";
}

echo "</table>";
?>

<script>
function checkdelete()
{
	confirm('Are you sure you want to delete this data?');
}
</script>