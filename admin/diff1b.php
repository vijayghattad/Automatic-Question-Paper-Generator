<?php
include "connection.php";
$su1b = $_GET['su1b'];
echo "<input type='hidden' value='$su1b' name='su1b'>"; 
for($i=1;$i<=$su1b;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d2[]' style='margin-right:50px;  margin-top:10px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>