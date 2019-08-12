<style>
a:link, a:visited {
  background-color:#ff9966;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color:#ff9966;
}

.vb:hover {
  background-color: blue;
}

</style>

<?php
session_start();
include('connection.php');
$results_per_page=10;
$v=$_SESSION["sname"];

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;

$a = "SELECT DISTINCT fid from assign_subject where email='$_SESSION[username]'";
$res = mysqli_query($con, $a); 
$r = mysqli_fetch_array($res);

$sql = "SELECT * FROM question where sname like ('$v') and fid='$r[0]' order by module LIMIT $start_from, ".$results_per_page;
$rs_result = $con->query($sql);

echo "<table class='table table-bordered'  border='1 px solid black;'>";
echo "<tr style='color:black; font-size:15px; background-color:#ff9966; height:40px;'>";
echo "<th>"; echo "Module"; echo "</th>";
echo "<th>"; echo "Question Id"; echo "</th>";
echo "<th>"; echo "Question"; echo "</th>";
echo "<th>"; echo "Marks"; echo "</th>";
echo "<th>"; echo "Difficulty"; echo "</th>";
echo "<th>"; echo "Update"; echo "</th>";
echo "<th>"; echo "Delete"; echo "</th>";
echo "</tr>";
while($row = $rs_result->fetch_assoc())
{
    echo "<tr style='color:black; height:30px;'>
    <td>" .$row['module']."</td>
    <td>" .$row['qid']."</td>
    <td>" .$row['question']."</td>
    <td>" .$row['marks']."</td>
    <td>" .$row['difficultylevel']."</td>
    <td><a href='update_question.php?m=$row[module]&qid=$row[qid]&q=$row[question]&ma=$row[marks]&d=$row[difficultylevel]'  style='background-color:white;'>
    <img src='images/update.jpg' height='2%' style='margin-left:30%; border-radius: 30%;'> </a></td>
    <td><a href='delete_question.php?qid=$row[qid]' style='background-color:white;' onclick=' return checkdelete()'>
    <img src='images/delete.jpg' height='4%' style='margin-left:10%; border-radius: 30%;'> </a> </td>
	</tr>";
}

 echo "</table> <br><br>";
?>


<?php 
$sql = "SELECT COUNT(question) AS total FROM question where sname= '$_SESSION[sname]' and fid='$r[0]'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a class='vb' href='my_question.php?sname=".$_SESSION['sname']."&page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
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