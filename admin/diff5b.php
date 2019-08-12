<?php
include "connection.php";
$su5b = $_GET['su5b'];
echo "<input type='hidden' value='$su5b' name='su5b'>"; 
for($i=1;$i<=$su5b;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d10[]' style='margin-right:50px;  margin-top:10px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
echo "<input type='submit' value='Submit' class='form-control btn btn-default' style='background-color:#2a3f54; margin-top:80px; color:white; border-radius:20px;'>";
?>