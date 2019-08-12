<?php
include "connection.php";
$su4b = $_GET['su4b'];
echo "<input type='hidden' value='$su4b' name='su4b'>"; 
for($i=1;$i<=$su4b;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d8[]' style='margin-right:50px;  margin-top:10px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>