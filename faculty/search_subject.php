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

$sql = "SELECT * FROM question where sname like ('$v') order by module LIMIT $start_from, ".$results_per_page;
$rs_result = $con->query($sql);
echo "<table class='table table-bordered' border='1 px'>";
echo "<thead>";
echo "<tr style='color:black; font-size:15px; background-color:#ff9966; height:40px;'>";
echo "<th>"; echo "Module"; echo "</th>";
echo "<th>"; echo "Question Id"; echo "</th>";
echo "<th>"; echo "Question"; echo "</th>";
echo "<th>"; echo "Marks"; echo "</th>";
echo "<th>"; echo "Difficulty"; echo "</th>";
echo "</tr>";
echo "</thead>";
while($row = $rs_result->fetch_assoc())
{
    echo "<tr style='color:black; height:30px;'>";
    echo "<td>"; echo $row["module"]; echo "</td>";
	echo "<td>"; echo $row["qid"]; echo "</td>";
    echo "<td>"; echo $row["question"]; echo "</td>";
    echo "<td>"; echo $row["marks"]; echo "</td>";
    echo "<td>"; echo $row["difficultylevel"]; echo "</td>";  
	echo "</tr>";
}
echo "</table><br>";
?>

<?php 
$sql = "SELECT COUNT(question) AS total FROM question where sname= '$_SESSION[sname]' ";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a class='vb' href='search_subject.php?sname=".$_SESSION['sname']."&page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>
