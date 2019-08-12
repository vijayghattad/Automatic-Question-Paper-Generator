<?php
include "connection.php";
$su3b = $_GET['su3b']; 
echo "<input type='hidden' value='$su3b' name='su3b'>";
for($i=1;$i<=$su3b;$i++)
{
echo "<b style='color:black;'>".$i.") &nbsp</b> <select name='d6[]' style='margin-right:50px;  color:black; margin-top:10px;'> <option value='L1'> L1 </option> <option value='L2'> L2 </option><option value='L3'> L3 </option></select>";
}
?>