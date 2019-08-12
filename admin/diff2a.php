<?php
include "connection.php";
$su2a = $_GET['su2a']; 
echo "<input type='hidden' value='$su2a' name='su2a'>";
for($i=1;$i<=$su2a;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d3[]' style='margin-right:50px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}

?>