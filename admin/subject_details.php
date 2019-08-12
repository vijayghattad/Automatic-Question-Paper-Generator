<?php

$con=mysqli_connect("localhost","root","","qpgs") or die("error creating database");

?>
<?php
$query="select * from add_subject";
$s=mysqli_query($con,$query);

echo "<br><br><table class='table table-bordered'>";
echo "<tr style='color:black; font-size:15px; background-color:#ff9966'>";
echo "<th>"; echo "Subject Code"; echo "</th>";
echo "<th>"; echo "Subject Name"; echo "</th>";
echo "<th>"; echo "Delete Subject"; echo "</th>";

echo "</tr>";
while($row=mysqli_fetch_array($s))
{
	echo "<tr style='color:black;'>";
	echo "<td>"; echo $row["scode"]; echo "</td>";
	echo "<td>"; echo $row["sname"]; echo "</td>";
	echo "<td>"; ?><a href="delete_subject.php?id=<?php echo $row["scode"];?>" style="color:red" onclick=" return checkdelete()">
   <img src="images/delete.jpg" height="5%" style="margin-left:30%; border-radius: 30%;"> </a><?php echo "</td>";

	echo "</tr>";
}

echo "</table>";
?>

<script>
function checkdelete()
{
	var retVal = confirm("Do you want to continue?");
               if( retVal == true ) {
                    return true;
               } else {
                  confirm("User does not want to continue!");
                  return false;
               }
}
</script>