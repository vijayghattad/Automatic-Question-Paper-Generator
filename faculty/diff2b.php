<?php
include "connection.php";
$su2b = $_GET['su2b']; 
echo "<input type='hidden' value='$su2b' name='su2b'>";
for($i=1;$i<=$su2b;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d4[]' style='margin-right:50px;  margin-top:10px; color:black;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>