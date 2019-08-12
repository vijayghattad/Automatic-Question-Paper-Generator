<?php

$con=mysqli_connect("localhost","root","","qpgs") or die("error creating database");

?>
<?php
$query="select * from branch";
$s=mysqli_query($con,$query);

echo "<table class='table table-bordered'>";
echo "<tr  style='color:black; font-size:15px; background-color:#ff9966'>";
echo "<th>"; echo "Branch Id"; echo "</th>";
echo "<th>"; echo "Branch Name"; echo "</th>";
echo "<th>"; echo "Delete Branch"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($s))
{
	echo "<tr style='color:black;'>
	<td>".$row['bid']."</td>
	<td>".$row['bname']."</td>
	<td><a href='delete_branch.php?bid=$row[bid]' onclick=' return checkdelete()'><img src='images/delete.jpg' height='5%' style='margin-left:30%; border-radius: 30%;'></a> </td>
	</tr>";
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
<?php
?>