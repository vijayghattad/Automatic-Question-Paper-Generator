<?php
include "connection.php";
$sub = $_GET['sub'];
$res = mysqli_query($con, "SELECT distinct(scode) FROM `assign_subject` WHERE sname = '$sub'");
$row = mysqli_fetch_array($res);
echo "<input type='text' name='scode' value='$row[0]' class='form-control' autocomplete='off' placeholder='Subject Code' style='border-radius:10px; margin-left:10px;' size='6' disabled>"; 
echo "<input type='hidden' value='$sub' name='subject'>";
?>